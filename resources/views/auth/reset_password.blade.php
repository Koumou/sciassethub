@extends('layouts.style_guest')

@section('content')

@if(Session::has('ACCOUNT_CREATED'))
<div class="container py-5">
    <div class="row  py-4 d-flex align-items-center justify-content-center">

        <div class="col-lg-6 col-md-7 col-sm-12">

            <div class="py-4">
                <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1678128750/Eduassethub/Icons/envelop_gqrk9k.png" alt="envelop" width="15%" />
            </div>
            <h2 class="fs-title text-center"><b>Confirm your email</b></h2>

            <p>
                Your account has successfully created, but it currently inactive; In order to active your account, please click on the enclosed link within the email that has been dispatched to your inbox. In case you are unable to locate the email, we kindly request you to check your spam folder.
            </p>
            <div class="py-2">
                <a class="btn btn-secondary no-radius" href="/login">Ok</a>
            </div>

        </div>
    </div>
</div>

@elseif(Session::has('PASSWORD_CHANGED'))
<div class="container py-5">
    <div class="row  py-4 d-flex align-items-center justify-content-center">

        <div class="col-lg-6 col-md-7 col-sm-12">
            <center>
                <div class="py-4">
                    <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1706273040/Sciassethub/img/Check_kngjfb.png" alt="check" width="15%" />
                </div>
                <h2 class="fs-title text-center"><b>Success!</b></h2>

                <p>
                    Your password has been changed successfully.</p>
                <div class="py-2">
                    <a class="btn btn-secondary no-radius" href="/login">Back to login</a>
                </div>
            </center>
        </div>
    </div>
</div>


@elseif(Session::has('RESET_EMAIL_SENT'))
<div class="container py-5">
    <div class="row  py-4 d-flex align-items-center justify-content-center">

        <div class="col-lg-7 text-center">


            <form id="msform" method="POST" action="{{ route('new_password') }}" data-netlify-recaptcha="true" data-netlify="true">
                {{ csrf_field() }}
                <fieldset>
                    <div class="form-card">
                        <div class="py-2 pb-2">
                            <div>
                                <h2 class="fs-title"><b>Enter the 6-digit code</b></h2>
                                <p>Check your email for a verification code</p>
                                <p><i>Do not refresh this page.</i></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <label class="fieldlabels">Email: <b class="text-danger">*</b></label> -->
                            <input id="code_pin" type="text" name="code_pin" value="{{ old('code_pin') }}" placeholder="6 digit code" autofocus>

                            <br />
                            <p>For the security reason your are required to re-type your email (<?php echo Illuminate\Support\Facades\Cache::get("email_pin_reset") ?>)</p>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Your email" autofocus>


                        </div>

                    </div>

                    <input type="button" name="next" class="next action-button_" value="Reset password" />
                </fieldset>

                <fieldset>
                    <div class="form-card">

                        <div class="form-group">
                            <label class="fieldlabels">New password: <b class="text-danger">*</b></label>
                            <input id="new_password" type="password" name="new_password" value="{{ old('new_password') }}" placeholder="Enter new password" autofocus>
                        </div>

                    </div>


                    <input type="submit" id="yes_login_attempt" class="btn btn-secondary no-radius action-button float-left" name="login_attempt" value="Cancel" onclick="<?php $value = "yes";

                                                                                                                                                                            Illuminate\Support\Facades\Cookie::queue('account_owner', $value, 360); ?>">

                    <input type="submit" id="no_login_attempt" class="btn btn-danger no-radius action-button float-right" name="login_attempt" value="Submit" onclick="<?php $value = "no";
                                                                                                                                                                        Illuminate\Support\Facades\Cookie::queue('account_owner', $value, 360); ?>">


        </div>
        </fieldset>
        </form>


    </div>
</div>
</div>

@elseif(Session::has('ACTIVE_SUCCESS'))
<div class="container py-5">
    <div class="row  py-4 d-flex align-items-center justify-content-center">

        <div class="col-lg-7 text-center">

            <div class="py-4">
                <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1678130412/Eduassethub/Icons/check_i0mble.png" alt="envelop" width="15%" />
            </div>
            <h2 class="fs-title text-center"><b>Success</b></h2>

            <p>
                Thank you for verifying your email address.
            </p>
            <div class="py-2">
                <a class="btn btn-secondary no-radius" href="/login">Ok</a>
            </div>

        </div>
    </div>
</div>
@else



<div class="container py-5">
    <div class="row  py-4 d-flex align-items-center justify-content-center">
        <div class="col-lg-5">
            <div class="card ">
                <div class="card-body mx-0">
                    <div class="col-lg-12 mx-0 px-0">
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oops!</strong> <br />
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if(Session::has('UNKNOQN_MAIL'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oops!</strong> Unknown mail.
                        </div>

                        @endif
                    </div>
                    <form id="msform" method="POST" action="{{ route('reset_password') }}" data-netlify-recaptcha="true" data-netlify="true">
                        {{ csrf_field() }}

                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-2">
                                    <div>
                                        <h2 class="fs-title"><b>Reset your password</b></h2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="fieldlabels">Email: <b class="text-danger">*</b></label>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Enter email" autofocus>
                                </div>

                            </div>

                            <input type="button" name="next" class="next action-button_" value="Reset password" />


                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <div class="pb-4">
                                        <h2 class="fs-title"><b>Log In</b></h2>
                                    </div>
                                    It seems like you are attempting to log in. For security reasons, we need to verify if you are logging in on behalf of the account owner. Can you please confirm if you are authorized to access this account?
                                </div>

                            </div>
                            <div class="form-group py-3 pb-2">


                                <input type="submit" id="yes_login_attempt" class="btn btn-secondary no-radius action-button float-left" name="login_attempt" value="Yes" onclick="<?php $value = "yes";

                                                                                                                                                                                    Illuminate\Support\Facades\Cookie::queue('account_owner', $value, 360); ?>">

                                <input type="submit" id="no_login_attempt" class="btn btn-danger no-radius action-button float-right" name="login_attempt" value="No" onclick="<?php $value = "no";
                                                                                                                                                                                Illuminate\Support\Facades\Cookie::queue('account_owner', $value, 360); ?>">


                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>

            <div class="my-4 rounded">
                <center>
                    <p style="font-size: small; padding-bottom: 0px"><a href="/register"><b style="color:dodgerblue;">Back to log in form</b></a></p>
                </center>
            </div>

        </div>



    </div>
</div>



@endif



@endsection