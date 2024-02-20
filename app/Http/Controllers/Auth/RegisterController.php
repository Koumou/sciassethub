<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
                function ($attribute, $value, $fail) {
                    $allowedDomains = ['myuwc.ac.za', 'uwc.ac.za'];
                    $emailParts = explode('@', $value);


                    if (!in_array($emailParts[1], $allowedDomains)) {
                        $fail('The ' . $attribute . ' domain is not allowed.');
                    }
                },
            ],
            'position' => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) use ($data) {
                    $email = $data['email'];
                    $allowedDomains = ['uwc.ac.za'];
                    $allowedDomains1 = ['myuwc.ac.za'];
                    $emailParts = explode('@', $email);
                    $username =  strtok($email, "@");


                    if (in_array($emailParts[1], $allowedDomains) && $value == '5') {
                        $fail('The ' . $attribute . ' you specified is not allowed for the current email domain.');
                    } elseif (in_array($emailParts[1], $allowedDomains1) && $value != '5') {
                        $fail('The ' . $attribute . ' you specified is not allowed for the current email domain.');
                    } elseif (!is_numeric($username) && $value == '5') {
                        $fail('The email you provided is not allowed for the position.');
                    } elseif (is_numeric($username) && $value != '5') {
                        $fail('The email you provided is not allowed for the position.');
                    }
                },
            ],
            'university' => ['required', 'string', 'max:255'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
            ],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {


        $new_user = User::create(
            [
                'firstname' => '-',
                'lastname' => '-',
                'gender' => '-',
                'physical_address' => '-',
                'phone_number' => '-',
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'password_salt' => Hash::make($data['password']),
                'position_id' => encrypt($data['position']),
                'university_id' => encrypt($data['university']),
                'account_status' => encrypt('inactive'),
                'islogin' => 0,

            ]

        );

        $details = [
            'title' => $data['email'],
            'body' => 'active'
        ];

        Mail::to($data['email'])->send(new \App\Mail\WelcomeMessage($details));

        // Mail::to($data['email'])->send(new \App\Mail\VerifyEmail($details));

        return $new_user;
    }
}
