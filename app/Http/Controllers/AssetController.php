<?php

namespace App\Http\Controllers;

use App\Events\AssetAdded;
use App\Listeners\AssetAddedNotification;
use App\Models\Research_project;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Throwable;
use Mpdf\Tag\Th;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use ThiagoAlessio\TesseractOCR\TesseractOCR;

use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use App\Models\Asset;
use Illuminate\Support\Facades\Cache;
use App\Models\Asset_request;
use App\Models\Assets_copy;
use App\Models\Message;
use App\Models\Rent_space;
use App\Models\Space_request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use SapientPro\ImageComparatorLaravel\Facades\Comparator;
use App\Providers\AppServiceProvider;

// use App\Models\Image;
// use Sightengine\SightengineClient;


use Illuminate\Support\Facades\Http;

class AssetController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function asset_available($reference)
    {

        return view('common.asset_available', ['cat_reference' => $reference]);
    }

    public function rent_space_available()
    {
        return view('common.rent_space_available');
    }

    public function preview_rent_space_available($reference)
    {

        return view('common.preview_rent_space_available', ['space_rent_reference' => $reference]);
    }

    public function modify_chemical(Request $request, $asset_reference)
    {

        $validator_personal_information = Validator::make($request->all(), [
            'chemical_max' =>  'required|integer|min:1',
            'chemical_min' =>  'required|integer',
            'general_use' =>  'required|max:150|string',
            'instruction' =>  'required|max:150|string',
            'warning_hazard' =>  'required|max:150|string',
        ]);
        if ($validator_personal_information->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator_personal_information)
                ->withInput();
        }

        $mav_v = encrypt(gzcompress(ucfirst(strtolower($request->chemical_max))));
        $min_v = encrypt(gzcompress(ucfirst(strtolower($request->chemical_min))));
        $instruction = encrypt(gzcompress(ucfirst(strtolower($request->instruction))));
        $general_use = encrypt(gzcompress(ucfirst(strtolower($request->general_use))));
        $warning_hazard = encrypt(gzcompress(ucfirst(strtolower($request->warning_hazard))));


        if ($request->chemical_min == $request->chemical_max || $request->chemical_min <= $request->chemical_max) {
            Asset::where("asset_reference", $asset_reference)
                ->update([
                    'max_value' => $mav_v,
                    'min_value' => $min_v,
                    'general_use' => $general_use,
                    'instruction' => $instruction,
                    'warning_hazard' => $warning_hazard,
                ]);
        }


        $request->session()->flash('EQUIPMENT_MODIFIED');
        return redirect()->back();
    }

    public function history()
    {
        return view('common.history');
    }
    public function message()
    {
        return view('common.message');
    }

    public function asset_requested()
    {
        return view('staff.asset_requested');
    }
    public function my_student()
    {
        return view('staff.asset_requested_process');
    }

    public function my_student_feedback($reference_student, $feedback)
    {
        $asset_requested_info =  Asset_request::where('id', $reference_student)->where('is_request_approved', Auth::user()->email)->first();
        $asset_info =  Asset::where('asset_id', $asset_requested_info->asset_request_id)->first();

        // dd($asset_info, $asset_requested_info);
        if ($feedback == "proceed") {

            $asset_info = Asset::where('asset_id', $asset_requested_info->asset_request_id)->first();



            $owner_information = User::where('email', $asset_info->user_reference)->first();


            Asset_request::where('id', $reference_student)
                ->update([
                    'asset_owner_ref' => $asset_info->user_reference,
                    'is_request_approved' => '-',
                ]);

            $details = [
                'asset_name' => gzuncompress(Crypt::decrypt($asset_info->asset_name)),
                'm_unit' => gzuncompress(Crypt::decrypt($asset_info->unit_measurement)),
                'requested_qty' => $asset_requested_info->quantity,
                'owner_ref' => Crypt::decrypt($owner_information->title) . ". " . Crypt::decrypt($owner_information->firstname) . " " . Crypt::decrypt($owner_information->lastname),
            ];

            Mail::to($owner_information->email)->send(new \App\Mail\Requested_notification($details));

            return redirect()->back();
        } else {

            $asset_max_qty = Crypt::decrypt($asset_info->max_value);
            $quantity_left = intval(gzuncompress($asset_max_qty)) + intval($asset_requested_info->quantity);





            Asset::where('asset_id', $asset_requested_info->asset_request_id)
                ->update(['max_value' => encrypt(gzcompress($quantity_left))]);

            // dd($quantity_left);

            Asset_request::where('id', $reference_student)->where('is_request_approved', Auth::user()->email)->delete();


            return redirect()->back();
        }
    }



    public function send_request(Request $request, $reference_, $owner_reference)
    {

        // dd($request);

        Space_request::create([
            'space_request_id' => $reference_,
            'space_owner_ref' => $owner_reference,
            'requester_id' => Auth::user()->email,
            'date_start' => $request->rent_start_date_confirmed,
            'date_end' => $request->rent_end_date_confirmed,
            'is_request_approved' => '-'
        ]);

        Cache::forget('availability_start_entered');
        Cache::forget('availability_end_entered');

        return redirect()->back();
    }


    public function look_space_rent_based_on_user(Request $request)
    {

        $rentSpaces = Rent_space::all();

        $decryptedRentSpaces = $rentSpaces->map(function ($rentSpace) {
            $rentSpace->availability_start = gzuncompress(Crypt::decrypt($rentSpace->availability_start));
            $rentSpace->availability_end = gzuncompress(Crypt::decrypt($rentSpace->availability_end));
            $rentSpace->type_storage = gzuncompress(Crypt::decrypt($rentSpace->type_storage));

            return $rentSpace;
        });

        $get_user_request = $decryptedRentSpaces->filter(function ($rentSpace) use ($request) {
            return $rentSpace->availability_start == $request->rent_start_date ||
                $rentSpace->availability_end == $request->rent_end_date;
        });


        Cache::put('availability_start_entered', $request->rent_start_date, $minutes = 2880);
        Cache::put('availability_end_entered', $request->rent_end_date, $minutes = 2880);
        Cache::put('request_type_storage', $request->type_storage, $minutes = 2880);

        return redirect()->back();
    }

    public function add_space_rent(Request $request)
    {
        $validator_personal_information = Validator::make($request->all(), [
            'type_storage' =>  'required|max:25|string',
            'storage_brand' =>  'required|max:30|string',
            'storage_location_building' =>  'required|max:50|string',
            'access_location' =>  'required|string',
            'temperature_range_low' => [
                'required',
                'regex:/^[-+]?[0-9]+(\.[0-9]+)?$/',
            ],
            'temperature_range_high' =>  [
                'required',
                'regex:/^[-+]?[0-9]+(\.[0-9]+)?$/',
            ],
            'co2' => [
                'required',
                'string',
            ],
            'rent_duration' =>  'required|max:150|integer',
            'rent_start_date' =>  'required',
            'rent_end_date' =>  'required',
            'additional_information' =>  'required|max:150|string',
        ]);

        if ($validator_personal_information->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator_personal_information)
                ->withInput();
        }

        function generate_space_rent_reference($number_length)
        {
            $_range = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $_string = '';

            for ($i = 0; $i < $number_length; $i++) {
                $index = rand(0, strlen($_range) - 1);
                $_string .= 'RS' . $_range[$index];
            }
            return $_string;
        }

        $image_frontal = $request->file('image_frontal');
        $input_frontal['imagename_frontal'] = time() . '.' . $image_frontal->extension();

        $destinationPath_frontal = public_path('/');
        $img_frontal = Image::make($image_frontal->path());
        $img_frontal->resize(300, 250, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath_frontal . '/' . $input_frontal['imagename_frontal']);

        $destinationPath_frontal = public_path('/images');
        $image_frontal->move($destinationPath_frontal, $input_frontal['imagename_frontal']);



        $image_interior = $request->file('image_interior');
        $input_interior['imagename_interior'] = time() . '.' . $image_interior->extension();

        $destinationPath_interior = public_path('/');
        $img_interior = Image::make($image_interior->path());
        $img_interior->resize(300, 250, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath_interior . '/' . $input_interior['imagename_interior']);

        $destinationPath_interior = public_path('/images');


        $image_interior->move($destinationPath_interior, $input_interior['imagename_interior']);
        Rent_space::create([
            'user_reference' => Auth::user()->email,
            'rent_place_reference' => generate_space_rent_reference(3) . generate_space_rent_reference(1) . generate_space_rent_reference(3),
            'type_storage' => encrypt(gzcompress(ucwords(strtolower($request->type_storage)))),
            'storage_brand' => encrypt(gzcompress(ucwords(strtolower($request->storage_brand)))),
            'storage_location_building' => encrypt(gzcompress(ucwords(strtolower($request->storage_location_building)))),
            'accessiblity' => encrypt(gzcompress(ucwords($request->access_location))),
            'temperature_range_l' => encrypt(gzcompress(ucwords($request->temperature_range_low))),
            'temperature_range_h' => encrypt(gzcompress(ucwords($request->temperature_range_high))),
            'co2' => encrypt(gzcompress(ucwords($request->co2))),
            'rent_duration' => encrypt(gzcompress(ucwords($request->rent_duration))),
            'availability_start' => encrypt(gzcompress(ucwords($request->rent_start_date))),
            'availability_end' => encrypt(gzcompress(ucwords($request->rent_end_date))),
            'additional_information' => encrypt(gzcompress(ucfirst(strtolower($request->additional_information)))),
            'frontal_img' => $input_frontal['imagename_frontal'],
            'interior_img' =>  $input_interior['imagename_interior'],
        ]);

        $users_ = DB::table('users')
            ->where('email', '!=', Auth::user()->email)
            ->get();

        foreach ($users_ as $user_) {
            $details = [
                'storage_location_building' => $request->storage_location_building,
                'type_storage' => $request->type_storage,
                'name' => $request->storage_brand,
                'co2' => $request->co2,
                'low' => $request->temperature_range_low,
                'high' => $request->temperature_range_high,
                'start' => $request->rent_start_date,
                'end' => $request->rent_end_date,
                'subscriber_reference' => $user_->email
            ];
            Mail::to($user_->email)->send(new \App\Mail\Space_rent_added($details));
        }

        $request->session()->flash('SPACE_RENT_ADDED');
        return redirect()->back();
    }

    // begin request space update
    public function request_space_update($request_asset_status, $decision)
    {
        // dd(Auth::user()->email);
        $asset_requested_status = Space_request::where('id', $request_asset_status)->first();

        if ($asset_requested_status->is_request_approved == '-') {
            $fetch_space_detail = Rent_space::where('rent_place_id', $request_asset_status)->first();
            $space_name = gzuncompress(Crypt::decrypt($fetch_space_detail->type_storage));
            $space_brand = gzuncompress(Crypt::decrypt($fetch_space_detail->storage_brand));

            // dd($space_brand,$space_name);


            Space_request::where('id', $request_asset_status)
                ->update(['is_request_approved' => $decision]);

            $details = [
                'final_decision' => $decision,
                'space_brand' => $space_brand,
                'space_name' => $space_name,
                'asset_reference' => $fetch_space_detail->rent_place_reference,
                'owner_contact' => Auth::user()->email,
            ];
        }
        if ($decision == "Reject") {
            Message::create([
                'subject' => 'Space [' . $details['space_name'] . ' #' . $details['asset_reference'] . '] Request Rejected',
                'sender' => Auth::user()->email,
                'recipient' => $asset_requested_status->requester_id,
                'content' => 'Dear user n_We regret to inform you that your request for ' . $details['space_name'] . 'has been rejected. We understand that this outcome may cause inconvenience, and we apologize for any disruption it may have caused to your plans. We encourage you to explore alternative options.n_If you have any further questions or require additional assistance, please do not hesitate to contact ' . $details['owner_contact'] . '.',
            ]);
        } else {

            Message::create([
                'subject' => 'Space [' . $details['space_name'] . ' #' . $details['asset_reference'] . '] Request Approved',
                'sender' => Auth::user()->email,
                'recipient' => $asset_requested_status->requester_id,
                'content' => 'We are pleased to inform you that your recent rent space request has been approved. This email serves as confirmation that your request for ' . $details['space_name'] . 'has been approved.n_Additional information will be emailed to you directly by the owner.n_If you have any further questions or require additional assistance, please do not hesitate to contact ' . $details['owner_contact'] . '.',
            ]);
        }

        Mail::to($asset_requested_status->requester_id)->send(new \App\Mail\Space_requested_feedback($details));

        return redirect()->back();
    }
    // end request space update

    public function request_asset_update($request_asset_status, $decision)
    {
        $asset_requested_status = Asset_request::where('id', $request_asset_status)->first();

        if ($asset_requested_status->is_request_approved == '-') {

            $fetch_asset_detail = Asset::where('asset_id', $asset_requested_status->asset_request_id)->first();

            $asset_name = Crypt::decrypt($fetch_asset_detail->asset_name);
            $asset_category = Crypt::decrypt($fetch_asset_detail->asset_category);
            $asset_unity_of_measurement = Crypt::decrypt($fetch_asset_detail->unit_measurement);
            $asset_instruction = Crypt::decrypt($fetch_asset_detail->instruction);
            $asset_warning_hazard = Crypt::decrypt($fetch_asset_detail->warning_hazard);
            $asset_max_qty = Crypt::decrypt($fetch_asset_detail->max_value);

            $requested_updated_at = $asset_requested_status->updated_at;



            Asset_request::where('id', $request_asset_status)
                ->update(['is_request_approved' => $decision]);
            $details = [
                'final_decision' => $decision,
                'asset_name' => gzuncompress($asset_name),
                'asset_reference' => $fetch_asset_detail->asset_reference,
                'requested_quantity' => $asset_requested_status->quantity,
                'asset_unity_of_measurement' => gzuncompress($asset_unity_of_measurement),
                'asset_category' => gzuncompress($asset_category),
                'asset_instruction' => gzuncompress($asset_instruction),
                'asset_warning_hazard' => gzuncompress($asset_warning_hazard),
                'requested_updated_at' => $requested_updated_at,
                'owner_contact' => Auth::user()->email,

            ];


            if ($decision == "reject") {
                $quantity_left = intval(gzuncompress($asset_max_qty)) +  intval($asset_requested_status->quantity);
                Asset::where('asset_id', $fetch_asset_detail->asset_id)
                    ->update(['max_value' => encrypt(gzcompress($quantity_left))]);

                Message::create([
                    'subject' => 'Asset [' . $details['asset_name'] . ' #' . $details['asset_reference'] . '] Request Rejected',
                    'sender' => Auth::user()->email,
                    'recipient' => $asset_requested_status->requester_id,
                    'content' => 'Dear user n_We regret to inform you that your recent asset request for ' . $details['asset_name'] . 'has been rejected. We understand that this outcome may cause inconvenience, and we apologize for any disruption it may have caused to your plans. We encourage you to explore alternative options.n_If you have any further questions or require additional assistance, please do not hesitate to contact ' . $details['owner_contact'] . '.',
                ]);
            } else {

                Message::create([
                    'subject' => 'Asset [' . $details['asset_name'] . ' #' . $details['asset_reference'] . '] Request Approved',
                    'sender' => Auth::user()->email,
                    'recipient' => $asset_requested_status->requester_id,
                    'content' => 'Dear user n_We regret to inform you that your recent asset request for ' . $details['asset_name'] . 'has been rejected. We understand that this outcome may cause inconvenience, and we apologize for any disruption it may have caused to your plans. We encourage you to explore alternative options.n_If you have any further questions or require additional assistance, please do not hesitate to contact ' . $details['owner_contact'] . '.',
                ]);
            }
            Mail::to($asset_requested_status->requester_id)->send(new \App\Mail\Asset_requested_feedback($details));

            return redirect()->back();
        }
    }
    public function asset_request_process(Request $request, $asset_request_reference)
    {

        $retrieve_asset_selected = Cache::get("asset_reference");


        if (count($retrieve_asset_selected) != 0) {

            foreach ($retrieve_asset_selected as $asset_requested_detail) {
                foreach ($asset_requested_detail as $asset_requested_detais) {

                    $user_info = User::where('email', $asset_requested_detais->user_reference)->first();

                    $research_info = Research_project::where('student_reference', Auth::user()->email)->first();

                    // dd($research_info);

                    $asset_requested_is_existed = Asset_request::where('asset_request_id', $asset_requested_detais->asset_id)
                        ->where('asset_owner_ref', $asset_requested_detais->user_reference)
                        ->where('requester_id', Auth::user()->email)
                        ->get();

                    Cache::put("owner_reference", $asset_requested_detais->user_reference);
                    Cache::put("asset_name", gzuncompress(Crypt::decrypt($asset_requested_detais->asset_name)));
                    Cache::put("m_unit", gzuncompress(Crypt::decrypt($asset_requested_detais->unit_measurement)));
                    Cache::put("requested_qty", $request->qty);

                    if (count($asset_requested_is_existed) == 0) {

                        if (empty($request->training)) {
                            Asset_request::create([
                                'asset_request_id' => $asset_requested_detais->asset_id,
                                'asset_owner_ref' => '-',
                                'requester_id' => Auth::user()->email,
                                'quantity' => $request->qty,
                                'tobetrained' => 'No',
                                'is_request_approved' => $research_info->supervisor_email
                            ]);
                        } else {
                            Asset_request::create([
                                'asset_request_id' => $asset_requested_detais->asset_id,
                                'asset_owner_ref' => '-',
                                'requester_id' => Auth::user()->email,
                                'quantity' => $request->qty,
                                'tobetrained' => 'Yes',
                                'is_request_approved' => $research_info->supervisor_email
                            ]);
                        }


                        $asset_requested_decrypt = Crypt::decrypt($asset_requested_detais->max_value);

                        $quantity_left = intval(gzuncompress($asset_requested_decrypt)) - intval($request->qty);

                        $user_info = User::where('email', $asset_requested_detais->user_reference)->first();
                        $supervisor_info = User::where('email', $research_info->supervisor_email)->first();

                        Asset::where('asset_id', $asset_requested_detais->asset_id)
                            ->update(['max_value' => encrypt(gzcompress($quantity_left))]);

                        $retrieve_asset_selected = Cache::get("owner_reference");

                        // $details = [
                        //     'asset_name' => Cache::get("asset_name"),
                        //     'm_unit' => Cache::get("m_unit"),
                        //     'requested_qty' => Cache::get("requested_qty"),
                        //     'owner_ref' => Crypt::decrypt($user_info->firstname) . '. ' . Crypt::decrypt($user_info->title)
                        // ];

                        // Mail::to($retrieve_asset_selected)->send(new \App\Mail\Requested_notification($details));

                        // dd($supervisor_info, $research_info);
                        $details = [
                            'asset_name' => Cache::get("asset_name"),
                            'm_unit' => Cache::get("m_unit"),
                            'requested_qty' => Cache::get("requested_qty"),
                            'supervisor' => $research_info->supervisor_email,
                            'student_fullname_' => Crypt::decrypt(Auth::user()->title) . ". " . Crypt::decrypt(Auth::user()->firstname) . " " . Crypt::decrypt(Auth::user()->lastname),
                            'supervisor_fullname_' => Crypt::decrypt($supervisor_info->title) . ". " . Crypt::decrypt($supervisor_info->firstname) . " " . Crypt::decrypt($supervisor_info->lastname),
                            'owner_ref' => Crypt::decrypt($user_info->firstname) . '. ' . Crypt::decrypt($user_info->title)
                        ];

                        Mail::to($research_info->supervisor_email)->send(new \App\Mail\Supervisor_notification_action_needed($details));


                        return redirect()->back();
                    } else {
                        Cache::forget('asset_reference');
                        return redirect()->back();
                    }
                }
            }
        } else {

            Cache::forget('asset_reference');
            return redirect()->back();
        }
    }

    public function asset_preview($asset_selected_reference)
    {
        try {
            $retrieve_asset_sselected = Cache::get("asset_reference");
            foreach ($retrieve_asset_sselected as $asset_selected) {
                $asset_selected_filter = $asset_selected->where('asset_reference', $asset_selected_reference);
                $asset_preview = ['assets_display' => $asset_selected_filter];
                Cache::put('asset_reference', $asset_preview, $minutes = 2880);
            }
            return view('common.asset_preview');
        } catch (Throwable $e) {
            return redirect()->back();
        }
    }

    public function add_chemical(Request $request)
    {

        // require_once __DIR__ . '/vendor/autoload.php';
        $validator_personal_information = Validator::make($request->all(), [
            'chemical_name' => 'required|max:30|string',
            'exp_date' => [
                'required',
                'date',
                'after_or_equal:' . now()->addDay()->format('Y-m-d'),
            ],
            'asset_category' =>  'required|max:15|string',
            'chemical_current_location' =>  'required|max:15|string',
            'chemical_max' =>  'required|integer',
            'chemical_min' =>  'required|integer',
            'measurement' =>  'required|string',
            'chemical_formula' =>  'required|max:100|string',
            'general_use' =>  'required|max:150|string',
            'instruction' =>  'required|max:150|string',
            'warning_hazard' =>  'required|max:150|string',
            'image_attached' =>  'required'
        ]);

        if ($validator_personal_information->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator_personal_information)
                ->withInput();
        }


        $image = $request->file('image_attached');
        $input['imagename'] = time() . '.' . $image->extension();

        $destinationPath = public_path('/');
        $img = Image::make($image->path());
        $img->resize(300, 250, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);


        //         $imagePath = public_path($destinationPath.$input['imagename']);

        //         $text = (new TesseractOCR($imagePath))->run();

        // dd(response()->json(['text' => $text]));

        // $client = new SightengineClient('{api_user}', '{api_secret}');

        // $output = $client->check(['nudity'])->set_file(public_path('images/' . $input['imagename']));

        // dd($output);

        // $SightEngine = new SightengineClient(env('SIGHTENGINEUSER'), env('SIGHTENGINEKEY'));

        // //analyze the locally stored image for nudity
        // $imageCheck = $SightEngine->check(['nudity'])->set_file(public_path('images/' . $input['imagename']));


        // $rawNudityProbability = $imageCheck->nudity->raw;
        // $acceptableThreshold  = 0.60;

        // if ($rawNudityProbability > $acceptableThreshold) {
        //     // remove from our storage destination if we don't want to keep it.
        //     // unlink($localFilePath);

        //     //take action on the user. Send a warning message, log a report, investigate, ban them, notify the admin, etc
        //     //send a response back to the user
        //     return response()->json([
        //         'success' => true,
        //         'message' => 'Problem with the image upload!',
        //     ]);
        // }

        //         $params = array(
        //             'url' =>  'https://sightengine.com/assets/img/examples/example7.jpg',
        //             'models' => '{model}',
        //             'api_user' => '{api_user}',
        //             'api_secret' => '{api_secret}',
        //           );

        //           // this example uses cURL
        //           $ch = curl_init('https://api.sightengine.com/1.0/check.json?'.http_build_query($params));
        //           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //           $response = curl_exec($ch);
        //           curl_close($ch);

        //           $output = json_decode($response, true);

        // //   dd($output);

        // $SightEngine = new SightengineClient(env('SIGHTENGINEUSER'), env('SIGHTENGINEKEY'));

        // //analyze the locally stored image for nudity
        // $imageCheck = $SightEngine->check(['nudity'])->set_file(public_path('images/' . $input['imagename']));


        // $rawNudityProbability = $imageCheck->nudity->raw;
        // $acceptableThreshold  = 0.60;

        // if ($rawNudityProbability > $acceptableThreshold) {
        //     // remove from our storage destination if we don't want to keep it.
        //     // unlink($localFilePath);

        //     //take action on the user. Send a warning message, log a report, investigate, ban them, notify the admin, etc
        //     //send a response back to the user
        //     return response()->json([
        //         'success' => true,
        //         'message' => 'Problem with the image upload!',
        //     ]);
        // }



        // dd(AppServiceProvider::convert_chemical_name_to_chemical_formula($request->chemical_formula));


        $asset_name = encrypt(gzcompress(ucwords($request->chemical_name)));
        $asset_expiring_date = encrypt(gzcompress(ucwords($request->exp_date)));

        $asset_cat = encrypt(gzcompress(ucwords($request->asset_category, 9)));

        $asset_location = encrypt(gzcompress(ucwords($request->chemical_current_location)));
        $mav_v = encrypt(gzcompress(ucwords($request->chemical_max)));
        $min_v = encrypt(gzcompress(ucwords($request->chemical_min)));
        $unit = encrypt(gzcompress($request->measurement));
        $chemical_formula = encrypt(gzcompress(AppServiceProvider::convert_chemical_name_to_chemical_formula($request->chemical_formula)));
        $instruction = encrypt(gzcompress($request->instruction));
        $general_use = encrypt(gzcompress(ucwords($request->general_use)));
        $warning_hazard = encrypt(gzcompress(ucwords($request->warning_hazard)));
        $three_d = encrypt(gzcompress(ucwords($request->three_d)));
        $ar = encrypt(gzcompress(ucwords($request->ar)));
        $training = encrypt(gzcompress(ucwords($request->equipment_training)));

        function generate_chemical_reference($number_length)
        {
            $_range = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $_string = '';

            for ($i = 0; $i < $number_length; $i++) {
                $index = rand(0, strlen($_range) - 1);
                $_string .= $_range[$index];
            }
            return $_string;
        }




        if ($request->chemical_min == $request->chemical_max || $request->chemical_min <= $request->chemical_max) {
            $asset_added =  Asset::create([
                'user_reference' => Auth::user()->email,
                'asset_reference' => generate_chemical_reference(3) . generate_chemical_reference(1) . generate_chemical_reference(3),
                'asset_name' => $asset_name,
                'asset_category' => $asset_cat,
                'asset_current_location' => $asset_location,
                'max_value' => $mav_v,
                'min_value' => $min_v,
                'unit_measurement' => $unit,
                'chemical_formula' => $chemical_formula,
                'general_use' => $general_use,
                'instruction' => $instruction,
                'warning_hazard' => $warning_hazard,
                'asset_image' => $input['imagename'],
                '360_view' => 'na',
                'ar_demo' => '-',
                'training_available' => $training,
                'department' =>  Auth::user()->department_id,
                'exp_date' => $asset_expiring_date,
            ]);

            $asset_added =  Assets_copy::create([
                'user_reference' => Auth::user()->email,
                'asset_reference' => generate_chemical_reference(3) . generate_chemical_reference(1) . generate_chemical_reference(3),
                'asset_name' => $asset_name,
                'asset_category' => $asset_cat,
                'asset_current_location' => $asset_location,
                'max_value' => $mav_v,
                'min_value' => $min_v,
                'unit_measurement' => $unit,
                'chemical_formula' => $chemical_formula,
                'general_use' => $general_use,
                'instruction' => $instruction,
                'warning_hazard' => $warning_hazard,
                'asset_image' => $input['imagename'],
                '360_view' => 'na',
                'ar_demo' => '-',
                'training_available' => $training,
                'department' =>  Auth::user()->department_id,
                'exp_date' => $asset_expiring_date,
            ]);



            $user = User::where('email', Auth::user()->email);

            $user_topics = DB::table('users')
                ->join('research_project', 'users.email', '=', 'research_project.student_reference')
                ->get();


            foreach ($user_topics as $user_topic) {
                $user_category_decrypt = Crypt::decrypt($user_topic->asset_category);

                $details = [
                    'owner_firstname' => Crypt::decrypt(Auth::user()->firstname),
                    'owner_lastname' => Crypt::decrypt(Auth::user()->lastname),
                    'asset_name' => ucwords($request->equipment_name),
                    'asset_equipment' => ucwords($request->asset_category),
                    'date_asset_created' => $asset_added->created_at,
                    'subscriber_reference' => $user_topic->email
                ];



                if (ucwords($request->asset_category) == $user_category_decrypt) {
                    Mail::to($user_topic->email)->send(new \App\Mail\Asset_added($details));
                }
            }
            $request->session()->flash('EQUIPMENT_ADDED');
            return redirect()->back();
        } else {
            return redirect()
                ->back()
                ->withErrors("Chemical: minimum value must be less than Maximun value.")
                ->withInput();
        }
    }

    public function add_equipment(Request $request)
    {

        $validator_personal_information = Validator::make($request->all(), [
            'equipment_name' => 'required|max:15|string',
            'asset_category' =>  'required|max:15|string',
            'measurement' =>  'required|max:15|string',
            'equipment_max' =>  'required|integer',
            'equipment_min' =>  'required|integer',
            'general_use' =>  'required|max:150|string',
            'instruction' =>  'required|max:150|string',
            'warning_hazard' =>  'required|max:150|string',
            'image_attached' =>  'required'

        ]);


        if ($validator_personal_information->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator_personal_information)
                ->withInput();
        }


        $image = $request->file('image_attached');
        $input['imagename'] = time() . '.' . $image->extension();

        $destinationPath = public_path('/');
        $img = Image::make($image->path());
        $img->resize(300, 250, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        $asset_name = encrypt(gzcompress(ucwords($request->equipment_name)));

        $asset_cat = encrypt(gzcompress(ucwords($request->asset_category, 9)));

        $asset_location = encrypt(gzcompress(ucwords($request->equipment_current_location)));
        $mav_v = encrypt(gzcompress(ucwords($request->equipment_max)));
        $min_v = encrypt(gzcompress(ucwords($request->equipment_min)));
        $unit = encrypt(gzcompress($request->measurement));
        $instruction = encrypt(gzcompress($request->instruction));
        $general_use = encrypt(gzcompress(ucwords($request->general_use)));
        $warning_hazard = encrypt(gzcompress(ucwords($request->warning_hazard)));
        $three_d = encrypt(gzcompress(ucwords($request->three_d)));
        $ar = encrypt(gzcompress(ucwords($request->ar)));
        $training = encrypt(gzcompress(ucwords($request->equipment_training)));


        function generate_asset_reference($number_length)
        {
            $_range = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $_string = '';

            for ($i = 0; $i < $number_length; $i++) {
                $index = rand(0, strlen($_range) - 1);
                $_string .= $_range[$index];
            }
            return $_string;
        }

        if ($request->equipment_min == $request->equipment_max || $request->equipment_min <= $request->equipment_max) {


            $asset_added =  Asset::create([
                'user_reference' => Auth::user()->email,
                'asset_reference' => generate_asset_reference(3) . generate_asset_reference(1) . generate_asset_reference(3),
                'asset_name' => $asset_name,
                'asset_category' => $asset_cat,
                'asset_current_location' => $asset_location,
                'max_value' => $mav_v,
                'min_value' => $min_v,
                'unit_measurement' => $unit,
                'chemical_formula' => 'na',
                'general_use' => $general_use,
                'instruction' => $instruction,
                'warning_hazard' => $warning_hazard,
                'asset_image' => $input['imagename'],
                '360_view' => $three_d,
                'ar_demo' => $request->ar,
                'training_available' => $training,
                'department' =>  Auth::user()->department_id,
                'exp_date' => 'na',
            ]);

            $asset_added =  Assets_copy::create([
                'user_reference' => Auth::user()->email,
                'asset_reference' => generate_asset_reference(3) . generate_asset_reference(1) . generate_asset_reference(3),
                'asset_name' => $asset_name,
                'asset_category' => $asset_cat,
                'asset_current_location' => $asset_location,
                'max_value' => $mav_v,
                'min_value' => $min_v,
                'unit_measurement' => $unit,
                'chemical_formula' => 'na',
                'general_use' => $general_use,
                'instruction' => $instruction,
                'warning_hazard' => $warning_hazard,
                'asset_image' => $input['imagename'],
                '360_view' => $three_d,
                'ar_demo' => $request->ar,
                'training_available' => $training,
                'department' =>  Auth::user()->department_id,
                'exp_date' => 'na',
            ]);

            $user = User::where('email', Auth::user()->email);

            $user_topics = DB::table('users')
                ->join('research_project', 'users.email', '=', 'research_project.student_reference')
                ->get();


            foreach ($user_topics as $user_topic) {
                $user_category_decrypt = Crypt::decrypt($user_topic->asset_category);

                $details = [
                    'owner_firstname' => Crypt::decrypt(Auth::user()->firstname),
                    'owner_lastname' => Crypt::decrypt(Auth::user()->lastname),
                    'asset_name' => ucwords($request->equipment_name),
                    'asset_equipment' => ucwords($request->asset_category),
                    'date_asset_created' => $asset_added->created_at,
                    'subscriber_reference' => $user_topic->email
                ];



                if (ucwords($request->asset_category) == $user_category_decrypt) {


                    Mail::to($user_topic->email)->send(new \App\Mail\Asset_added($details));
                }
            }


            $request->session()->flash('EQUIPMENT_ADDED');

            return redirect()->back();
        } else {
            return redirect()
                ->back()
                ->withErrors("Equipment: minimum value must be less than Maximun value.")
                ->withInput();
        }
    }
}
