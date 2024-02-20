<?php

namespace App\Http\Controllers;

use App\Models\Activate_account;
use App\Models\Asset;
use App\Models\Asset_request;
use App\Models\Rent_space;
use App\Models\Research_project;
use App\Models\Space_request;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Throwable;
use Mpdf\Tag\Th;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function delete_account()
    {
        if (Crypt::decrypt(Auth::user()->position_id) === '5') {
            $asset_requested = Asset_request::where('requester_id', Auth::user()->email)->where("is_request_approved", '-')->get();
            $space_requested = Asset_request::where('requester_id', Auth::user()->email)->where("is_request_approved", '-')->get();

            if (count($asset_requested) == 0 && count($space_requested) == 0) {

                User::where('email', Auth::user()->email)
                    ->update([
                        'email' => "deleted_account." . Auth::user()->email,
                        'firstname' => encrypt(ucwords("Deleted")),
                        'lastname' => encrypt(ucwords("Account")),
                        'password' => Hash::make("deleted_account"),
                    ]);
                Research_project::where('student_reference', Auth::user()->email)
                    ->delete();

                auth()->logout();
                Session()->flush();
                return redirect('/login');
            } else {
                return redirect()->back();
            }
        } else {
            $asset_requested = Asset_request::where('asset_owner_ref', Auth::user()->email)->where("is_request_approved", '-')->get();
            $space_requested = Space_request::where('space_owner_ref', Auth::user()->email)->where("is_request_approved", '-')->get();

            if (count($asset_requested) == 0 && count($space_requested) == 0) {
                User::where('email', Auth::user()->email)
                    ->update([
                        'email' => "deleted_account." . Auth::user()->email,
                        'firstname' => encrypt(ucwords("Deleted")),
                        'lastname' => encrypt(ucwords("Account")),
                        'password' => Hash::make("deleted_account"),
                    ]);


                Asset::where('user_reference', Auth::user()->email)
                    ->update([
                        'user_reference' => "deleted_account." . Auth::user()->email,
                    ]);

                Rent_space::where('user_reference', Auth::user()->email)
                    ->update([
                        'user_reference' => "deleted_account." . Auth::user()->email,
                    ]);

                Rent_space::where('user_reference', Auth::user()->email)
                    ->update([
                        'user_reference' => "deleted_account." . Auth::user()->email,
                    ]);
                Research_project::where('student_reference', Auth::user()->email)
                    ->delete();


                auth()->logout();
                Session()->flush();
                return redirect('/login');
            } else {
                return redirect()->back();
            }
        }
    }

    public function resent_active_account_email()
    {

        try {

            if (Activate_account::where('user_reference', Auth::user()->email)->exists()) {
                return redirect()->back();
            } else {

                $details = [
                    'title' => Auth::user()->email,
                    'body' => 'active'
                ];

                Mail::to($details['title'])->send(new \App\Mail\VerifyEmail($details));

                Activate_account::create([
                    'user_reference' => Auth::user()->email,
                ]);

                return redirect()->back();
            }
        } catch (Throwable $e) {
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {

        if (Cookie::has('user_loged')) {
            User::where('email', Crypt::decryptString(Cookie::get('user_loged')))->update(['islogin' => '0']);
        }
        auth()->logout();
        Session()->flush();
        return redirect('/');
    }


    public function Gate(Request $request)
    {
        User::where('email', Auth::user()->email)->update(['islogin' => '1']);
        Cookie::queue('user_loged', encrypt(Auth::user()->email), 18000);
        return redirect('/dashboard');
    }


    public function email_activation($email, Request $request)
    {

        try {
            try {
                $decrypted_email = Crypt::decryptString($email);
            } catch (DecryptException $i) {
                return  redirect()->back();
            }


            $user_status = User::where('email', $decrypted_email)->first();

            if ($user_status != NULL && Crypt::decrypt($user_status->account_status) == 'inactive') {

                User::where('email', $decrypted_email)
                    ->update([
                        'email_verified_at' => NOW(),
                        'account_status' => encrypt('active'),

                    ]);

                $request->session()->flash('ACTIVE_SUCCESS');
                return redirect('/');
            } else {
                $request->session()->flash('ACTIVE_ALREADY');
                return redirect()->back();
            }
        } catch (Throwable $e) {

            return redirect()->back();
        }
    }

    public function index_auth()
    {
        return view('common.index_auth');
    }
}
