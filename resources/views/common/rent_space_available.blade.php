@extends('layouts.style_guest')

@section('content')

@Auth
@if((Auth::user()->gender != '-'))
<div class="container py-2">
    <div class="row py-4">
        <div class="col-lg-4 col-md-4 col-sm-12">
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
                    <label class="acnav__label" for="group-5">School and Divisions</label>
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
                    <!-- end level 3 -->
                </li>

                </ul>
                <!-- end level 2 -->
                </li>

                </ul>
                <!-- end level 1 -->
            </nav>

        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
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

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Space for rent</li>
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


    @if(count($all_available_space_) != 0)
    <section class="container py-0">
        <div class="row align-items-center py-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h5>
                    <b>Space for rent</b>
                </h5>
            </div>
        </div>

        <div>
            <?php
            $get_recent_available_space_rent_start = gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($all_available_space_->min('availability_start')));
            $get_recent_available_space_rent_end = gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($all_available_space_->max('availability_end')));
            $currentDate = date('Y-m-d');
            $minDate = date('Y-m-d');
            ?>

            @if($get_recent_available_space_rent_start != $currentDate || $get_recent_available_space_rent_end != $currentDate)
            <div class="card mb-4 p-4">
                <form id="msform" method="POST" action="/rent_space_available" enctype="multipart/form-data" data-netlify-recaptcha="true" data-netlify="true">
                    {{ csrf_field() }}

                    <div class="form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label class="fieldlabels">Check-in Date *</label>
                                    @if(Cache::has('availability_start_entered'))

                                    <?php
                                    $rent_start_date_entered = Illuminate\Support\Facades\Cache::get('availability_start_entered');
                                    ?>
                                    <input type="date" name="rent_start_date" min="<?php echo $get_recent_available_space_rent_start; ?>" value="<?php echo $rent_start_date_entered; ?>" />
                                    @else
                                    <input type="date" name="rent_start_date" min="<?php echo $get_recent_available_space_rent_start; ?>" value="<?php echo $minDate; ?>" />
                                    @endif
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="fieldlabels">Check-out Date *</label>

                                    @if(Cache::has('availability_end_entered'))

                                    <?php

                                    $rent_end_date_entered = Illuminate\Support\Facades\Cache::get('availability_end_entered');
                                    ?>
                                    <input type="date" name="rent_end_date" min="<?php echo $get_recent_available_space_rent_start; ?>" value="<?php echo $rent_end_date_entered; ?>" />
                                    @else
                                    <input type="date" name="rent_end_date" min="<?php echo $get_recent_available_space_rent_start; ?>" value="<?php echo $minDate; ?>" />
                                    @endif

                                </div>

                                <div class="form-group col-md-4">
                                    <label class="fieldlabels">Type of the storage *</label>
                                    <select name="type_storage" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                        <option value="">-- Select type of the storage --</option>
                                        <option value="incubator">Incubator</option>
                                        <option value="freezer">Freezer</option>
                                        <option value="fridge">Fridge</option>

                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <button class="btn btn-secondary" type="submit">Search</button>
                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
            @endif


        </div>

        @if(Cache::has('availability_start_entered'))

        <div class="order-card auto-fill pt-4">


            @if(count($all_available_space_) != 0)

            <?php
            $rent_start_date_entered = Illuminate\Support\Facades\Cache::get('availability_start_entered');
            $rent_end_date_entered = Illuminate\Support\Facades\Cache::get('availability_end_entered');
            $rent_request_type_storage = Illuminate\Support\Facades\Cache::get('request_type_storage');
            $decryptedRentSpaces = $all_available_space_->map(function ($rentSpace) {
                $rentSpace->availability_start = gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($rentSpace->availability_start));
                $rentSpace->availability_end = gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($rentSpace->availability_end));
                $rentSpace->type_storage = gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($rentSpace->type_storage));

                return $rentSpace;
            });
            $get_user_request = $decryptedRentSpaces->filter(function ($rentSpace) use ($rent_start_date_entered, $rent_end_date_entered) {
                return $rentSpace->availability_start >= $rent_start_date_entered ||
                    $rentSpace->availability_end <= $rent_end_date_entered;
            });
            $filter = $get_user_request->where("type_storage", ucfirst($rent_request_type_storage));
            ?>

            @foreach($filter as $rent_space_availk_)

            <?php

            $type_storage_decrypt = $rent_space_availk_->type_storage;

            $storage_brand_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->storage_brand);
            $start_decrypt = $rent_space_availk_->availability_start;
            $storage_location_building_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->storage_location_building);

            $end_decrypt = $rent_space_availk_->availability_end;
            $temperature_range_l_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->temperature_range_l);
            $co2_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->co2);
            $temperature_range_h_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->temperature_range_h);
            $co2_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->co2);
            $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->firstname);
            $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->lastname);
            $owner_full_name = $owner_firstname . " " . $owner_lastname;

            ?>

            <a href="/rent_space_available/preview_rent_space_available/{{$rent_space_availk_->rent_place_id}}">

                <div class="panel panel-default card-input card">

                    <div class="card-body border-0">
                        <div class="panel-heading pb-2 myGallery">
                        </div>
                        <p class="text-dark my-1 py-1 mx-0">

                        </p>
                        <p class="text-dark my-1 py-1 mx-0">
                            <b>{{$type_storage_decrypt}}: Brand ({{gzuncompress($storage_brand_decrypt)}})</b>
                        </p>
                        <div>
                            <small class="pb-0 mb-0">
                                <span class="pb-0 mb-0">
                                    Location: {{gzuncompress($storage_location_building_decrypt)}}
                                    <br />
                                    TR: {{gzuncompress($temperature_range_l_decrypt)}}°C (low) ~ {{gzuncompress($temperature_range_h_decrypt)}}°C (high)
                                    <br />
                                    @if(gzuncompress($co2_decrypt) == "Yes")
                                    <span class="badge badge-pill badge-dark mt-2">CO<sub class="text-white">2</sub></span>
                                    @endif
                                </span> </small>

                         <br />

                            <br />
                            <div class="container-controller py-2">
                                <div class="float-left">
                                    <!-- <div class="bleed-left"></div> -->
                                    <div class="user_profile_01">
                                        @if($owner_firstname == "Deleted")
                                        <span class="text-white">UU</span>
                                        @else
                                        <span class="text-white">{{\App\Providers\AppServiceProvider::FirstLetter($owner_full_name)}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="float-right">


                                    @if($owner_firstname == "Deleted")
                                    <div><b class="ellipsis">Unknown User</b></div>
                                    @else
                                    <div><b class="ellipsis mr-1">{{Str::limit($owner_full_name, 10, ' ...')}}</b></div>
                                    @endif



                                    <div class="pt-0"><small>Asset added {{\App\Providers\AppServiceProvider::difference_between_timestamp($rent_space_availk_->created_at)}}</small></div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach

            @endif
        </div>

        <?php
        $rent_request_type_storage = Illuminate\Support\Facades\Cache::get('request_type_storage');

        $mergedCollection = $all_available_space_->concat($get_user_request);
        // Step 2: Remove duplicate indexes
        $uniqueCollection = $mergedCollection->unique('rent_place_id');

        $truck = $uniqueCollection->where('type_storage', '!==', ucfirst($rent_request_type_storage));

        $uniqueArray = $truck->take(4);
        ?>
        @if(count($uniqueArray) != 0)

        <div class="pt-5">
            <h5 class="pt-5"><b>You can also see</b></h5>
        </div>

        @endif
        <div class="order-card auto-fill py-3">


            @if(count($uniqueArray) != 0)
            @foreach($uniqueArray as $rent_space_availk_)
            <?php

            $type_storage_decrypt = $rent_space_availk_->type_storage;

            $storage_brand_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->storage_brand);
            $start_decrypt = $rent_space_availk_->availability_start;
            $temperature_range_l_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->temperature_range_l);
            $co2_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->co2);
            $temperature_range_h_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->temperature_range_h);
            $co2_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->co2);
            $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->firstname);
            $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->lastname);
            $owner_full_name = $owner_firstname . " " . $owner_lastname;
            ?>

            <a href="/rent_space_available/preview_rent_space_available/{{$rent_space_availk_->rent_place_id}}">



                <div class="panel panel-default card-input card">

                    <div class="card-body border-0">
                        <p class="text-dark my-1 mx-0">
                            <b>{{$type_storage_decrypt}}</b> @if(gzuncompress($co2_decrypt) == "Yes")
                            <span class="badge badge-pill badge-dark mt-2">CO<sub class="text-white">2</sub></span>
                            @endif
                        </p>
                        <div>
                            <small class="pb-0 mb-0">
                                TR: {{gzuncompress($temperature_range_l_decrypt)}}°C (low) ~ {{gzuncompress($temperature_range_h_decrypt)}}°C (high)
                            </small>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            @endif
        </div>

        @else

        <div class="order-card auto-fill pt-2">
            @if(count($all_available_space_) != 0)
            @foreach($all_available_space_ as $rent_space_availk_)
            <?php
            $type_storage_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->type_storage);
            $storage_brand_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->storage_brand);
            $storage_location_building_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->storage_location_building);

            $start_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->availability_start);
            $end_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->availability_end);
            $temperature_range_l_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->temperature_range_l);
            $co2_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->co2);
            $temperature_range_h_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->temperature_range_h);
            $co2_decrypt = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->co2);
            $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->firstname);
            $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($rent_space_availk_->lastname);
            $owner_full_name = $owner_firstname . " " . $owner_lastname;


            ?>

            <a href="/rent_space_available/preview_rent_space_available/{{$rent_space_availk_->rent_place_id}}">
                <div class="panel panel-default card-input card">

                    <div class="card-body border-0">
                        <div class="panel-heading pb-2 myGallery">
                        </div>
                        <p class="text-dark my-1 py-1 mx-0">

                        </p>
                        <p class="text-dark my-1 py-1 mx-0">
                            <b>{{gzuncompress($type_storage_decrypt)}}: Brand ({{gzuncompress($storage_brand_decrypt)}})</b>
                        </p>
                        <div>
                            <span class="pb-0 mb-0">
                                Location: {{gzuncompress($storage_location_building_decrypt)}}
                                <br />
                                TR: {{gzuncompress($temperature_range_l_decrypt)}}°C (low) ~ {{gzuncompress($temperature_range_h_decrypt)}}°C (high)
                                <br />
                                @if(gzuncompress($co2_decrypt) == "Yes")
                                <span class="badge badge-pill badge-dark mt-2">CO<sub class="text-white">2</sub></span>
                                @endif
                            </span>
                            <br />
                            <br />
                            <div class="container-controller py-2">
                                <div class="float-left">
                                    <!-- <div class="bleed-left"></div> -->
                                    <div class="user_profile_01">
                                        @if($owner_firstname == "Deleted")
                                        <span class="text-white">UU</span>
                                        @else
                                        <span class="text-white">{{\App\Providers\AppServiceProvider::FirstLetter($owner_full_name)}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="float-right">

                                    @if($owner_firstname == "Deleted")
                                    <div><b class="ellipsis">Unknown User</b></div>
                                    @else
                                    <div><b class="ellipsis mr-1">{{Str::limit($owner_full_name, 10, ' ...')}}</b></div>
                                    @endif

                                    <div class="pt-0"><small>Asset added {{\App\Providers\AppServiceProvider::difference_between_timestamp($rent_space_availk_->created_at)}}</small></div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach


            @endif
        </div>


        @endif

    </section>
    @else
    <center>
        <img img src="{{asset('empty-box.png')}}" class="m-0 pt-4" alt="Logo" width="45%">
        <div class="pt-0 p-0">Nothing found!</div class="mt-0 p-0">
    </center>
    @endif

</div>


<script>
    $(document).ready(function() {
        $("body").tooltip({
            selector: '[data-toggle=tooltip]'
        });
    });
</script>

@endif
@endsection