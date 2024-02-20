<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile_student()
    {
        return view('student.profile_student');
    }
    public function view_asset_requested()
    {
        return view('student.view_asset_requested');
    }
    public function view_space_requested()
    {
        return view('student.view_space_requested');
    }

    public function ar_microscope()
    {
        return view('student.index');
    }


    public function change_password(Request $request)
    {
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            $request->session()->flash('PASSWORD_NOT_CHANGED');
            return redirect()->back();
        } else {
            User::where('email', Auth::user()->email)
                ->update([
                    'password' => Hash::make($request->new_password),
                ]);
            $request->session()->flash('PASSWORD_CHANGED');
            return redirect()->back();
        }
    }

    public function personal_information(Request $request)
    {
        $validator_personal_information = Validator::make($request->all(), [
            'firstname' => 'required|max:15|string',
            'surname' =>  'required|max:15|string',
            'gender' => 'required',
            'phone_number' => 'required|integer|digits:9',
            'address' => 'required|max:100|string',
            'department' => 'required|integer',
        ]);

        if ($validator_personal_information->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator_personal_information)
                ->withInput();
        }


        User::where('email', Auth::user()->email)
            ->update([
                'title' => encrypt(ucwords($request->title)),
                'firstname' => encrypt(ucwords(strtolower($request->firstname))),
                'lastname' => encrypt(ucwords(strtolower($request->surname))),
                'gender' => encrypt($request->gender),
                'phone_number' => encrypt($request->phone_number),
                'physical_address' => encrypt(ucwords(strtolower($request->address))),
                'department_id' => encrypt($request->department),
            ]);

        $request->session()->flash('PERSONAL_INFORMATION_UPDATED');
        return redirect()->back();
    }

    public function supervisor_confirmation($supervisor_reference, $research_reference)
    {
        dd($supervisor_reference, $research_reference);
        $supervisor_email_confirmation = Crypt::decryptString($supervisor_reference);
        $student_project_reference = Crypt::decryptString($research_reference);

        // dd($supervisor_email_confirmation, $student_project_reference);


        Research_project::where('student_reference', $student_project_reference)
            ->update([
                'supervisor_email' => $supervisor_email_confirmation,
            ]);

        return "Thank you!";
    }

    public function research_project(Request $request)
    {
        $validator_personal_information = Validator::make($request->all(), [
            'title' => 'required',
            'supervisor' =>  'required|max:25|string',
            'research_focus' => 'required|max:150|string',
            'supervisor_email' => [
                'required',
                'string',
                'email',
                'max:255',
                function ($attribute, $value, $fail) {
                    $allowedDomains = ['uwc.ac.za'];
                    $emailParts = explode('@', $value);

                    if (!in_array($emailParts[1], $allowedDomains)) {
                        $fail('The email domain is not allowed.');
                    } else if ($value == Auth::user()->email && Crypt::decrypt(Auth::user()->position_id) === '5') {
                        $fail("The email address '" . $value . "' you've given may not be the most appropriate for your supervisor.");
                    }
                },
            ],
            'topic' => 'required'
        ]);

        if ($validator_personal_information->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator_personal_information)
                ->withInput();
        }

        $emailParts = explode('@', Auth::user()->email);
        $allowedDomains = ['uwc.ac.za'];
        // dd(ucwords(Auth::user()->email), ucwords($request->supervisor), $emailParts[1]);
        // dd($emailParts[1] ==  $allowedDomains[0] && $request->supervisor == 'N/A', $emailParts[1] ,  $allowedDomains[0], $request->supervisor ,'N/A');
       
        if ($emailParts[1] ==  $allowedDomains[0] && $request->supervisor == 'N/A') {
            Research_project::create([
                'student_reference' => Auth::user()->email,
                'supervisor_title' => encrypt(ucwords($request->title)),
                'supervisor_name' => encrypt(ucwords($request->supervisor)),
                'supervisor_email' => Auth::user()->email,
                'research_focus' => encrypt($request->research_focus),
                'asset_category' => encrypt($request->topic),
            ]);

            $request->session()->flash('RESEARCH_PROJECT');
            return redirect()->back();
        } else {
            Research_project::create([
                'student_reference' => Auth::user()->email,
                'supervisor_title' => encrypt(ucwords($request->title)),
                'supervisor_name' => encrypt(ucwords($request->supervisor)),
                'supervisor_email' => "-",
                'research_focus' => encrypt($request->research_focus),
                'asset_category' => encrypt($request->topic),
            ]);

            $details = [
                'supervisor_title' => ucwords($request->title),
                'supervisor_name' => ucwords($request->supervisor),
                'supervisor_email' => $request->supervisor_email,
                'research_title' => ucwords($request->research_focus),
                'student_firstname' => Crypt::decrypt(Auth::user()->firstname),
                'student_lastname' => Crypt::decrypt(Auth::user()->lastname),
                'student_title' => Crypt::decrypt(Auth::user()->title),
            ];

            Mail::to($request->supervisor_email)->send(new \App\Mail\Supervisor_notification($details));


            $request->session()->flash('RESEARCH_PROJECT');
            return redirect()->back();
        }
    }
}
