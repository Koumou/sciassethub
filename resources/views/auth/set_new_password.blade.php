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

@elseif(Session::has('ACTIVE_ALREADY'))
<div class="container py-5">
    <div class="row  py-4 d-flex align-items-center justify-content-center">

        <div class="col-lg-7 text-center">

            <div class="py-4">
                <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1678130412/Eduassethub/Icons/check_i0mble.png" alt="envelop" width="15%" />
            </div>
            <h2 class="fs-title text-center"><b>Success</b></h2>

            <p>
                Your email address is already verified.
            </p>
            <div class="py-2">
                <a class="btn btn-secondary no-radius" href="/login">Ok</a>
            </div>

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
                <div class="card-body">
                    <div class="col-lg-12">
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
                    </div>
                    <form id="msform" method="POST" action="{{ route('login') }}" data-netlify-recaptcha="true" data-netlify="true">
                        {{ csrf_field() }}

                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-2">
                                    <div>
                                        <h2 class="fs-title"><b>Set your password</b></h2>
                                        <small>The new password should have min. 8 chracters (Must contain letters, numbers, and symbols.)</small>
                                  
                                  <br />
                                  <br />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">New Password: <b class="text-danger">*</b></label>
                                    <input type="password" name="password" placeholder="Enter new password" />
                                    <!-- <div class="mt-4 " ><a href=""><b style="font-size: small; color:dodgerblue;">Forgot password?</b></a></div> -->
                                </div>

                            </div>

                            <input type="button" name="next" class="next action-button_" value="Set password" />


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

                                <!-- <button type="submit" class="btn btn-danger float-left no-radius">Cancel</button>

                                <button type="submit" class="btn btn-success float-right no-radius">I UNDERSTAND</button> -->
                            </div>
                        </fieldset>


                    </form>

                </div>
            </div>


        </div>



    </div>
</div>



@endif



@endsection