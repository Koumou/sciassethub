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
                    <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1679330943/Eduassethub/All_images/pexels-kindel-media-8325941_xyre6e.jpg" width="100%">
                </div>

                <div class="panel panel-default card-input">

                    <div class="card-body border-0">
                        <div class="panel-heading pb-2">
                            <!-- <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1679328407/Eduassethub/All_images/Lab_wkrwh9.jpg" width="100%"> -->
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
                            <a href="/rent_space_available" class="btn btn-secondary btn btn-block no-radius">
                                {{ __('Rent space') }}
                            </a>
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
                <li class="breadcrumb-item"><a href="/">Asset</a></li>
                <li class="breadcrumb-item active" aria-current="page">Medical Biosciences - {{$cat_reference}}</li>
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


    <section class="container py-0">
        <div class="row align-items-center py-5">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h5>
                    <b>{{$cat_reference}}</b>
                </h5>
            </div>
        </div>

        @if(count($all_asset_available) != 0)
        <div class="order-card auto-fill">
            @foreach($all_asset_available as $asset_avail)
            <?php

            //    dd ($all_asset_available);
            $asset_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->asset_name);
            $asset_min_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->min_value);
            $asset_max_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->max_value);
            $asset_unit_measurement_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->unit_measurement);
            $asset_asset_category_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->asset_category);

            $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->firstname);
            $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->lastname);
            $owner_full_name = $owner_firstname . " " . $owner_lastname;
            ?>
            @if(gzuncompress($asset_max_value_decrypt) >= gzuncompress($asset_min_value_decrypt))
            @if(gzuncompress($asset_asset_category_decrypt) == $cat_reference)

            <a href="/all_asset_available/asset_preview/{{$asset_avail->asset_reference}}" class="btn btn-secondary btn btn-block no-radius">

                <div class="panel panel-default card-input card">

                    <div class="card-body border-0">
                        <div class="panel-heading pb-2 myGallery">
                            <div class="item">

                                <img src="{{asset($asset_avail->asset_image)}}" class="asset_avaiable">
                            </div>
                        </div>
                        <p class="text-dark my-1 py-1 mx-0">

                            @if($asset_avail->ar_demo != 'no')
                            <span class="pl-3"><img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1691847793/Sciassethub/img/AR_j7bpeu.png" width="25"></span>
                            @endif

                            @if($cat_reference == "Chemical")
                            <?php
                            $asset_chemical_formula_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->chemical_formula);
                            ?>
                        <p>
                            <button type="button" class="btn btn-link text-muted p-0 text-decoration-none" data-toggle="tooltip" data-placement="top" title="{{gzuncompress($asset_chemical_formula_decrypt)}}">
                                <small><i class="fa fa-eye pr-1"></i> Chemical formula</small>
                            </button>
                        </p>
                        @endif
                        @if($asset_asset_category_decrypt == "Chemical")
                        <a tabindex="-1" id="testPop" title="Chemical formula" data-content="Formaldehyde, acetic acid, glucose" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-container="body" data-viewport=".container">
                            <i class="fa fa-info-circle"></i>
                        </a>
                        @endif
                        </p>
                        <div>
                            <small class="pb-3 mb-3">
                                Quantity in storage: {{gzuncompress($asset_max_value_decrypt)}} {{ucfirst(gzuncompress($asset_unit_measurement_decrypt))}}
                            </small>
                            <br />
                            <div class="container-controller py-2">
                                <div class="float-left">
                                    <div class="user_profile_01">
                                        <span class="text-white">{{\App\Providers\AppServiceProvider::FirstLetter($owner_full_name)}}</span>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div><b>{{$owner_firstname}} {{$owner_lastname}}</b></div>
                                    <div class="pt-0"><small>Asset added {{\App\Providers\AppServiceProvider::difference_between_timestamp($asset_avail->created_at)}}</small></div>
                                    </p>
                                </div>
                            </div>
                        </div>

                        @if($asset_avail->user_reference != Auth::user()->email)
                        <div>
                            <a href="/all_asset_available/asset_preview/{{$asset_avail->asset_reference}}" class="btn btn-secondary btn btn-block no-radius">
                                <?php
                                $asset_preview = ['assets_display' => $all_asset_available];
                                Illuminate\Support\Facades\Cache::put('asset_reference', $asset_preview, $minutes = 2880);
                                ?>
                                {{ __('Request asset') }}
                            </a>
                        </div>
                        @else
                        <button class="btn btn-danger btn btn-block no-radius" disabled>Can not request </button>
                        @endif
                    </div>
                </div>
            </a>
            @endif


            @endif

            @endforeach

        </div>
        @endif

    </section>

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