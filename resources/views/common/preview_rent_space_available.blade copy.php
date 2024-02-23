@extends('layouts.style_guest')

@section('content')

@Auth
@if((Auth::user()->gender != '-'))
<div class="container py-2">
    <div class="row py-4">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="dropdown py-2">

                <section class="nav-wrp mx-0">

                    <!-- start accordion nav block -->
                    <nav class="acnav" role="navigation">
                        <!-- start level 1 -->
                        <ul class="acnav__list acnav__list--level1">

                            <!-- start group 1 -->
                            <li class="has-children">
                                <input id="group-1" class="acnav__checkbox" type="checkbox" hidden />
                                <label class="acnav__label" for="group-1">Faculty of Natural Sciences</label>
                                <!-- start level 2 -->
                                <ul class="acnav__list acnav__list--level2">
                                    <li>
                                        <a class="acnav__link acnav__link--level2" href="#">Department of Biodiversity and Conservation Biology</a>
                                    </li>
                                    <li>
                                        <a class="acnav__link acnav__link--level2" href="#">Department of Biotechnology</a>
                                    </li>

                                    <li>
                                        <a class="acnav__link acnav__link--level2" href="#">Department of Chemistry</a>
                                    </li>
                                    <li>
                                        <a class="acnav__link acnav__link--level2" href="#">Department of Computer Science</a>
                                    </li>

                                    <li>
                                        <a class="acnav__link acnav__link--level2" href="#">Department of Earth Sciences</a>
                                    </li>

                                    <li>
                                        <a class="acnav__link acnav__link--level2" href="#">Department of Mathematics and Applied Mathematics</a>
                                    </li>
                                    <li class="has-children">
                                        <input id="group-1-1" class="acnav__checkbox" type="checkbox" hidden />
                                        <label class="acnav__label acnav__label--level2" for="group-1-1">Department of Medical Biosciences</label>
                                        <!-- start level 3 -->
                                        <ul class="acnav__list acnav__list--level3">
                                            <li>
                                                <a class="acnav__link acnav__link--level3" href="/all_asset_available/Chemical">Chemical</a>
                                            </li>
                                            <li>
                                                <a class="acnav__link acnav__link--level3" href="/all_asset_available/Equipment">Equipment</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="acnav__link acnav__link--level2" href="#">Department of Physics and Astronomy</a>
                                    </li>
                                    <li>
                                        <a class="acnav__link acnav__link--level2" href="#">Department of Statistics and Population Studies</a>
                                    </li>
                                    <!-- end level 3 -->
                            </li>

                        </ul>
                        <!-- end level 2 -->
                        </li>
                        <!-- end group 1 -->

                        <!-- start group 2 -->
                        <li class="has-children">
                            <input id="group-2" class="acnav__checkbox" type="checkbox" hidden />
                            <label class="acnav__label" for="group-2">Faculty of Community and Health Sciences</label>
                            <!-- start level 2 -->
                            <ul class="acnav__list acnav__list--level2">
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Dietetics and Nutrition</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Occupational Therapy</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Physiotherapy</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Psychology</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Social Work</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Sport, Recreation and Exercise Science</a>
                                </li>
                            </ul>
                            <!-- end level 2 -->
                        </li>
                        <!-- end group 2 -->

                        <!-- start group 3 -->
                        <li class="has-children">
                            <input id="group-3" class="acnav__checkbox" type="checkbox" hidden />
                            <label class="acnav__label" for="group-3">Faculty of Dentistry</label>
                            <!-- start level 2 -->
                            <ul class="acnav__list acnav__list--level2">
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Community Oral Health</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Craniofacial Biology, Pathology and Radiology</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Maxillofacial and Oral Surgery and Anaesthesiology and Sedation</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Oral Hygiene</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Oral Medicine and Periodontology</a>
                                </li>
                            </ul>
                            <!-- end level 2 -->
                        </li>
                        <!-- end group 3 -->
                        <!-- start group 3 -->
                        <li class="has-children">
                            <input id="group-4" class="acnav__checkbox" type="checkbox" hidden />
                            <label class="acnav__label" for="group-4">Faculty of Economic and Management Sciences</label>
                            <!-- start level 2 -->
                            <ul class="acnav__list acnav__list--level2">
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Accounting</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Finance</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Industrial Psychology</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Information Systems</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Management and Entrepreneurship</a>
                                </li>
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">Department of Political Studies</a>
                                </li>
                            </ul>
                            <!-- end level 2 -->
                        </li>

                        <!-- start group 1 -->
                        <li class="has-children">
                            <input id="group-5" class="acnav__checkbox" type="checkbox" hidden />
                            <label class="acnav__label" for="group-5">School</label>
                            <!-- start level 2 -->
                            <ul class="acnav__list acnav__list--level2">
                                <li class="has-children">
                                    <input id="group-5-1" class="acnav__checkbox" type="checkbox" hidden />
                                    <label class="acnav__label acnav__label--level2" for="group-5-1">School of Nursing</label>
                                    <!-- start level 3 -->
                                    <ul class="acnav__list acnav__list--level3">
                                        <li>
                                            <a class="acnav__link acnav__link--level3" href="/all_asset_available/Equipment">Equipment</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="acnav__list acnav__list--level2">
                                <li class="has-children">
                                    <input id="group-5-2" class="acnav__checkbox" type="checkbox" hidden />
                                    <label class="acnav__label acnav__label--level2" for="group-5-2">School of Pharmacy</label>
                                    <!-- start level 3 -->
                                    <ul class="acnav__list acnav__list--level3">
                                        <li>
                                            <a class="acnav__link acnav__link--level3" href="/all_asset_available/Chemical">Chemical</a>
                                        </li>
                                        <li>
                                            <a class="acnav__link acnav__link--level3" href="/all_asset_available/Equipment">Equipment</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="acnav__list acnav__list--level2">
                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">School of Public Health</a>
                                </li>
                            </ul>
                            <ul class="acnav__list acnav__list--level2">

                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">School of Natural Medecine</a>
                                </li>
                            </ul>
                            <ul class="acnav__list acnav__list--level2">

                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">School of Science and Mathematics Education</a>
                                </li>
                            </ul>
                            <ul class="acnav__list acnav__list--level2">

                                <li>
                                    <a class="acnav__link acnav__link--level2" href="#">School of Government</a>
                                </li>
                            </ul>
                            </ul>
                            <!-- end level 3 -->
                        </li>

                        </ul>
                        <!-- end level 2 -->
                        </li>

                        </ul>
                        <!-- end level 1 -->
                    </nav>
                    <!-- end accordion nav block -->

                </section>

            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="input-group py-2">

                <input type="text" class="form-control outline-0" placeholder="Type asset name">
                <div class="input-group-append">
                    <button class="btn btn-secondary ml-3 text-white" type="button">
                        Search
                    </button>
                </div>
            </div>

            <div class="order-card auto-fit py-3">

                <div class="panel panel-default card-input py-2">
                    <img src="{{asset('sample_1.jpg')}}" width="100%">
                </div>
                <div class="panel panel-default card-input">

                    <div class="card-body border-0">
                        <div class="panel-heading pb-2">
                        </div>
                        <p class="text-dark mx- 0">
                            <b>Rent space</b>
                        </p>
                        <div>
                            <small class="pb-3 mb-3">
                                Explore our diverse collection of incubators housed within UWC, each incubator equipped with a range of distinct features to cater to your specific needs. Discover the perfect rental space for your requirements by clicking the button below.
                            </small>
                        </div>
                        <div class="py-3">
                            <!-- <a href="/dashboard/my_asset/category_equipment/form_add_space_rent" class="btn btn-secondary btn btn-block no-radius">
                                {{ __('Rent space') }}
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/rent_space_available">Space for rent</a></li>
                <li class="breadcrumb-item active" aria-current="page">Incubator</li>
            </ol>
        </nav>
    </div>

</div>
@else

<div class="py-2">
    <section class="cover">

        <div class="cover-content">
            <div class="container py-4">


                <h1 class="text-white responsive-h">
                    Welcome to SciAssetHub platform, where you can access cutting-edge of science assets for your research.
                </h1>

                <h2 class="text-white pt-5 responsive-h">
                    <b class="text-white">
                        Unlock your research potential with our cutting-edge science assets. Request now.
                    </b>

                    <div class="py-5 m-0">
                        <a href="/register">
                            <button class="btn btn-warning btn-lg" type="button">Get started</button>
                        </a>
                    </div>
                </h2>
            </div>
        </div>
    </section>
</div>

@endif



@endauth





@if(Session::has('ACCOUNT_CREATED'))
<div class="container py-5">
    <div class="row  py-4 d-flex align-items-center justify-content-center">

        <div class="col-lg-7 text-center">

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
@elseif(Session::has('ATTEMPTED_LOGIN_WHILE_LOGED'))
<div class="container py-5">
    <div class="row  py-4 d-flex align-items-center justify-content-center">

        <div class="col-lg-7 text-center">

            <div class="py-4">
                <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1678483869/Eduassethub/Icons/supprise_lqdror.png" alt="envelop" width="15%" />
            </div>
            <h2 class="fs-title text-center"><b>Oups</b></h2>

            <p>
                the account is currently being used on another device or browser.
            </p>
            <div class="py-2">
                <a class="btn btn-secondary no-radius" href="/">Ok</a>
            </div>

        </div>
    </div>
</div>


@else


<div class="py-0">

    @guest
    <section class="cover">

        <div class="cover-content">
            <div class="container pt-4">


                <h1 class="text-white responsive-h">
                    Welcome to SciAssetHub platform, where you can access cutting-edge of science assets for your research.
                </h1>

                <h2 class="text-white pt-5 responsive-h">
                    <b class="text-white">
                        Unlock your research potential with our cutting-edge science assets. Request now.
                    </b>

                    <div class="py-5 m-0">
                        <a href="/register">
                            <button class="btn btn-warning btn-lg" type="button">Get started</button>
                        </a>
                    </div>
                </h2>
            </div>
        </div>
    </section>
    @endguest


    <div class="container py-2">
        <div class="row py-4">

            <div class="row ">
                <?php
                $space_rent_preview = $all_available_space_->where('rent_place_id', $space_rent_reference);
                ?>

                @if(count($space_rent_preview) != 0)

                @foreach($space_rent_preview as $rent_space_availk_)

                <?php

                // dd($rent_space_availk_);

                // rent_place_reference

                ?>
                <?php

                $type_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->type);
                $rent_price_per_unit_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->rent_price_per_unit);
                $incubator_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->incubator_name);
                $start_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->availability_start);
                $end_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->availability_end);
                $temperature_range_l_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->temperature_range_l);
                $co2_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->co2);
                $temperature_range_h_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->temperature_range_h);
                $co2_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->co2);
                $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->firstname);
                $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->lastname);
                $owner_full_name = $owner_firstname . " " . $owner_lastname;

                $accessiblity_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->accessiblity);
                $description_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->description);




                ?>
                <div class="col-lg-4 col-md-4 col-sm-12 m-0 p-0">

                    <div class="panel-heading pb-2 myGallery">
                        <div class="item">


                            <div class="container12">

                                <!-- Main view of our gallery -->
                                <div class="main_view">
                                    <img src="{{asset($rent_space_availk_->frontal_img)}}" id="main_" alt="IMAGE" width="100%">
                                </div>
                                <br />

                                <!-- All images with side view -->
                                <div class="side_view px-0 col-sm-0">
                                    <img src="{{asset($rent_space_availk_->frontal_img)}}" onclick="change(this.src)">
                                    <img src="{{asset($rent_space_availk_->interior_img)}}" onclick="change(this.src)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1 col-md-1 col-sm-12">
                </div>

                <div class="col-lg-7 col-md-7 col-sm-12">

                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12">

                            <div>

                                <div class="container-controller pt-2 ml-0">
                                    <div class="float-left">
                                        <div class="user_profile_01">
                                            <span class="text-white">{{\App\Providers\AppServiceProvider::FirstLetter($owner_full_name)}}</span>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <div><b>{{$owner_firstname}} {{$owner_lastname}}</b></div>
                                        <div class="pt-0"><small>Space added {{\App\Providers\AppServiceProvider::difference_between_timestamp($rent_space_availk_->created_at)}}</small></div>
                                        </p>
                                    </div>

                                </div>


                            </div>
                            <div class="container-controler py-2 ml-0">
                                <!-- <h3><span class="badge badge-pill badge-dark"> <b class="text-white">R {{gzuncompress($rent_price_per_unit_decrypt)}} /day </b></span></h3> -->
                                <p class="text-dark my-1 py-1 mx-0">
                                    <b>{{gzuncompress($type_decrypt)}} - {{gzuncompress($incubator_name_decrypt)}} </b>
                                </p>
                            </div>
                            <div class="pb-4">
                                <small class="pb-3 mb-3">
                                    TR: {{gzuncompress($temperature_range_l_decrypt)}}°C (low) ~ {{gzuncompress($temperature_range_h_decrypt)}}°C (high)
                                </small>
                                <div>
                                    <small class="pb-3 mb-3">
                                        CO<sup>2</sup> avail: ({{gzuncompress($co2_decrypt)}}) cubic meters
                                    </small>
                                </div>
                                <br />
                                <div>
                                    <small class="pb-3 mb-3">
                                        Check-in: {{gzuncompress($start_decrypt)}}
                                    </small>
                                </div>
                                <div>
                                    <small class="pb-3 mb-3">
                                        Check-out: {{gzuncompress($end_decrypt)}}
                                    </small>
                                </div>

                                <br />
                                <div>
                                    <small class="pb-3 mb-3">
                                        Accessiblity : {{gzuncompress($accessiblity_decrypt)}}
                                    </small>
                                </div>
                                <div>
                                    <small class="pb-3 mb-3">
                                        Description: {{gzuncompress($description_decrypt)}}
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12">


                            <div class="panel panel-default card-input card initial border border-secondary no_hover border-1 my-2">





                                @if(count($all_space_requested_requested) != 0)

                                <?php


                                $track_space_requested = $all_space_requested_requested->where('space_request_id', $space_rent_reference);
                                ?>

                                @if(count($track_space_requested) == 0)
                                <div class="card-body border-0">
                                    <h3 class="text-dark mx-0">
                                        <b><span class="badge badge-pill badge-dark"> <b class="text-white">ZAR {{gzuncompress($rent_price_per_unit_decrypt)}} /day </b></span></b>
                                    </h3>
                                    <div class="py-2"><b>Confirm reservation</b><br /><small>#{{$rent_space_availk_->rent_place_reference}}</small></div>

                                    <?php
                                    $currentDate = date('Y-m-d');
                                    $minDate = date('Y-m-d');
                                    ?>

                                    <form id="msform" method="POST" action="/rent_space_available/preview_rent_space_available/{{$space_rent_reference}}/{{$rent_space_availk_->user_reference}}/sent_request" enctype="multipart/form-data" data-netlify-recaptcha="true" data-netlify="true">
                                        {{ csrf_field() }}

                                        <div class="form-row">

                                            @if(Cache::has('availability_start_entered'))

                                            @if(count($all_available_space_) != 0)

                                            <?php
                                            $rent_start_date_entered = Illuminate\Support\Facades\Cache::get('availability_start_entered');
                                            $rent_end_date_entered = Illuminate\Support\Facades\Cache::get('availability_end_entered');
                                            ?>

                                            <div class="form-group col-md-12">
                                                <label class="fieldlabels">Estimate check-in Date *</label>

                                                <input type="date" name="rent_start_date_confirmed" max="<?php echo $rent_start_date_entered; ?>" min="<?php echo $rent_start_date_entered; ?>" value="<?php echo $rent_start_date_entered; ?>" />
                                            </div>



                                            <div class="form-group col-md-12">
                                                <label class="fieldlabels">Estimate check-out Date *</label>
                                                <input type="date" name="rent_end_date_confirmed" max="<?php echo $rent_end_date_entered; ?>" min="<?php echo $rent_end_date_entered; ?>" value="<?php echo $rent_end_date_entered; ?>" />
                                            </div>


                                            <div class="form-group col-md-12">
                                                <label class="fieldlabels">Type of the storage *</label>
                                                <select name="type_storage_confirmed" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                                    <option value="">-- Select type of the storage --</option>
                                                    <option value="incubator" selected>incubator</option>
                                                </select>
                                            </div>

                                            @endif

                                            @else



                                            <?php
                                            $start_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->availability_start);
                                            $end_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->availability_end);
                                            ?>

                                            <div class="form-group col-md-12">
                                                <label class="fieldlabels">Check-in Date *</label>
                                                <!-- <input type="date" name="name" placeholder="Enter the maximum value of the chemical you currently have" /> -->
                                                <input type="date" name="rent_start_date_confirmed" max="{{gzuncompress($end_decrypt)}}" min="{{gzuncompress($start_decrypt)}}" value="{{gzuncompress($start_decrypt)}}" />

                                                <!-- <input type="date" name="rent_start_date_confirmed" max="<?php echo $currentDate; ?>" min="<?php echo $currentDate; ?>" value="<?php echo $minDate; ?>" /> -->
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label class="fieldlabels">Check-out Date *</label>
                                                <input type="date" name="rent_end_date_confirmed" max="{{gzuncompress($end_decrypt)}}" min="{{gzuncompress($start_decrypt)}}" value="{{gzuncompress($end_decrypt)}}" />

                                                <!-- <input type="date" name="rent_end_date_confirmed" max="<?php echo $currentDate; ?>" min="<?php echo $currentDate; ?>" value="<?php echo $minDate; ?>" /> -->
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label class="fieldlabels">Type of the storage *</label>
                                                <select name="type_storage_confirmed" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                                    <option value="">-- Select type of the storage --</option>
                                                    <option value="incubator" selected>incubator</option>
                                                </select>
                                            </div>

                                            @endif

                                        </div>


                                        <div class="form-group">
                                            <button class="btn btn-secondary" type="submit">Request Sent</button>
                                        </div>
                                    </form>
                                </div>

                                @else

                                @foreach($track_space_requested as $requested_space)
                                <div>
                                    <div class="card-body border-0">
                                        <div class="pt-2 pb-4"> <b>Your reservation details</b> </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div><small>Check-in</small></div>
                                                <div><b><?php echo date('F d, Y', strtotime($requested_space->date_start)) ?></b></div>

                                            </div>
                                            <div class="col-md-6">
                                                <div><small>Check-out</small></div>
                                                <div><b><?php echo date('F d, Y', strtotime($requested_space->date_end)) ?></b></div>
                                            </div>
                                        </div>
                                        <br />
                                        <div><small>Total length of rent</small></div>
                                        <div><b>{{\App\Providers\AppServiceProvider::count_day($requested_space->date_end,$requested_space->date_start)}}</b></div>

                                        <br />
                                        <hr />
                                        <div><small>Your price summary</small></div>
                                        <div><b>ZAR {{((strtotime($requested_space->date_end) - strtotime($requested_space->date_start)) / (60 * 60 * 24)) * gzuncompress($rent_price_per_unit_decrypt)}}</b></div>

                                        <!-- <br /> -->
                                        <hr />
                                        <div><small>Status</small></div>
                                        <div><b>
                                                @if($requested_space->is_request_approved == '-')
                                                Waiting
                                                @else
                                                {{$requested_space->is_request_approved}}
                                                @endif
                                            </b></div>

                                    </div>
                                </div>
                                @endforeach

                                @endif

                                @endif




                            </div>

                            <div class="pt-5 pb-0 mb-0">
                                <h5 class="pb-0 mb-0"><b>Other offer</b></h5>
                            </div>


                            <div class="order-card auto-fill">



                                <?php
                                $space_rent_other_suggestion = $all_available_space_recommendation->where('rent_place_id', '!=', $space_rent_reference);

                                // $space_rent_other_suggestion = $all_available_space_recommendation->where('rent_place_id', '!=', $space_rent_reference);

                                $current_space_rent_selected = $all_available_space_recommendation->where('rent_place_id', '==', $space_rent_reference);

                                // dd($current_space_rent_selected);

                                $current_space_rent_selected_size = gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($current_space_rent_selected->min('size')));


                                // dd($space_rent_reference);

                                // $Lowest_price = gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($space_rent_other_suggestion->max('size')));
                                ?>

                                @if(count($space_rent_other_suggestion) != 0)

                                @foreach($space_rent_other_suggestion->take(1) as $rent_space_availk_)

                                @if(gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->size)) == $current_space_rent_selected_size || gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->size)) >= $current_space_rent_selected_size || gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->size)) <= $current_space_rent_selected_size) <?php
                                                                                                                                                                                                                                                                                                                                                                                                                    $type_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->type);
                                                                                                                                                                                                                                                                                                                                                                                                                    $rent_price_per_unit_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->rent_price_per_unit);
                                                                                                                                                                                                                                                                                                                                                                                                                    $incubator_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->incubator_name);
                                                                                                                                                                                                                                                                                                                                                                                                                    $start_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->availability_start);
                                                                                                                                                                                                                                                                                                                                                                                                                    $end_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->availability_end);
                                                                                                                                                                                                                                                                                                                                                                                                                    $temperature_range_l_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->temperature_range_l);
                                                                                                                                                                                                                                                                                                                                                                                                                    $size_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->size);
                                                                                                                                                                                                                                                                                                                                                                                                                    $temperature_range_h_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->temperature_range_h);
                                                                                                                                                                                                                                                                                                                                                                                                                    $size_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->size);
                                                                                                                                                                                                                                                                                                                                                                                                                    $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->firstname);
                                                                                                                                                                                                                                                                                                                                                                                                                    $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->lastname);
                                                                                                                                                                                                                                                                                                                                                                                                                    $owner_full_name = $owner_firstname . " " . $owner_lastname;
                                                                                                                                                                                                                                                                                                                                                                                                                    ?> <a href="/rent_space_available/preview_rent_space_available/{{$rent_space_availk_->rent_place_id}}">

                                    <div class="panel panel-default card-input card initial border border-secondary border-1 my-4">

                                        <div class="card-body">
                                            <p class="text-dark mx-0">
                                                <b>{{gzuncompress($type_decrypt)}} <span class="badge badge-pill badge-dark"> <b class="text-white">R {{gzuncompress($rent_price_per_unit_decrypt)}} /day </b></span></b>
                                            </p>
                                            <div>
                                                <small class="pb-3 mb-3">
                                                    TR: {{gzuncompress($temperature_range_l_decrypt)}}°C (low) ~ {{gzuncompress($temperature_range_h_decrypt)}}°C (high)
                                                </small>
                                                <div>
                                                    <small class="pb-3 mb-3">
                                                        Size avail: ({{gzuncompress($size_decrypt)}}) cubic meters
                                                    </small>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                    @endif

                                    @endforeach
                                    @endif
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>

<div class="modal fade border-0 no-border" id="message_display" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="message_displayLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="message_displayLabel"><b>Space for rent - Booking information</b></h5>
                <button type="button" class="close round-button" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body pb-4">
                <b id="bookId"></b>
                <!-- <b id="bookId">Rent for space form</b> -->
            </div>
        </div>
    </div>
</div>
</section>

</div>


<script>
    $(document).ready(function() {
        $(".open-AddBookDialog").click(function() {
            $('#bookId').text($(this).data('id'));

            var bookId = $(this).data('id');
        });
    });
</script>

@endif
@endsection