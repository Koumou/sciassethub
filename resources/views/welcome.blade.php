@extends('layouts.style_guest')

@section('content')


@Auth
@if((Auth::user()->gender != '-'))

<div class="container py-2">
    <div class="row py-4">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <!-- start accordion nav block -->
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
                        <label class="acnav__label" for="group-5">Schools</label>
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
        <div class="col-lg-8 col-md-8 col-sm-12">
            @Auth

            @endauth


            <div class="order-card auto-fit py-3">

                <div class="panel panel-default card-input py-2">
                    <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1679330943/Eduassethub/All_images/pexels-kindel-media-8325941_xyre6e.jpg" width="100%">
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
                            <a href="/rent_space_available" class="btn btn-secondary btn btn-block no-radius">
                                {{ __('Rent space') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 py-2 mx-0 px-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Asset</li>
            </ol>
        </nav>
    </div>

</div>
@else


<div class="container py-2">
    <div class="row py-4">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <!-- start accordion nav block -->
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
                        <label class="acnav__label" for="group-5">Schools</label>
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
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="order-card auto-fit py-3">
                <div class="panel panel-default card-input py-2">
                    <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1679330943/Eduassethub/All_images/pexels-kindel-media-8325941_xyre6e.jpg" width="100%">
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
                <li class="breadcrumb-item active" aria-current="page">Asset</li>
            </ol>
        </nav>
    </div>

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

    <div class="container py-2">
        <div class="row py-4">
            <div class="col-lg-4 col-md-4 col-sm-12 mx-0">
                <div class="dropdown py-2 mx-0">


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
                                <label class="acnav__label" for="group-5">Schools</label>
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


    </div>


    @endguest
    <section class="container pt-0 pb-3">

        <?php
        $total_asset_t_be_displayed = intval(count($all_chemical_available_four)) + intval(count($all_asset_available_four));
        ?>

        @if($total_asset_t_be_displayed != 0)
        @if(count($all_chemical_available_four) != 0)

        <div class="row align-items-center pt-0 mt-0">

            @Auth
            <div class="row align-items-center mx-0 px-0">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h5>
                        <b>Chemical</b>
                    </h5>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 py-1 pb-5 mx-0 px-0">
                    <a href="all_asset_available/Chemical" class="btn btn-secondary no-radius float-right">
                        {{ __('View more') }}
                    </a>
                </div>
            </div>
        </div>

        @endauth

        <div class="order-card auto-fill pt-0">
            @foreach($all_chemical_available_four->take(4) as $asset_available)
            <?php
            $asset_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->asset_name);
            $asset_min_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->min_value);
            $asset_max_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->max_value);
            $asset_unit_measurement_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->unit_measurement);
            $asset_asset_category_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->asset_category);
            $asset_chemical_formula_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->chemical_formula);
            $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($asset_available->firstname);
            $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($asset_available->lastname);
            $owner_full_name = $owner_firstname . " " . $owner_lastname;

            Illuminate\Support\Facades\Cache::put('initial', $owner_full_name, $minutes = 2880);
            Illuminate\Support\Facades\Cache::put('firstname', $owner_firstname, $minutes = 2880);
            Illuminate\Support\Facades\Cache::put('lastname', $owner_lastname, $minutes = 2880);

            ?>

            @if(gzuncompress($asset_max_value_decrypt) !==0 && gzuncompress($asset_min_value_decrypt) !==0)

            @if(gzuncompress($asset_max_value_decrypt) != 0)
            <a href="/all_asset_available/asset_preview/{{$asset_available->asset_reference}}">
                @endif
                <?php
                Illuminate\Support\Facades\Cache::forget('asset_reference');
                $asset_preview = ['assets_display' => $all_asset_available];
                Illuminate\Support\Facades\Cache::put('asset_reference', $asset_preview, $minutes = 2880);
                ?>

                <div class="panel panel-default card-input card">
                    <div class="card-body border-0">
                        <div class="panel-heading pb-2 myGallery">
                            <div class="item">
                                <img src="{{asset($asset_available->asset_image)}}" class="asset_avaiable">
                            </div>
                        </div>
                        <p class="text-dark my-1 py-1 mx-0">
                            <b>{{gzuncompress($asset_name_decrypt)}}</b>
                            @if($asset_available->ar_demo != 'no')
                            <span class="pl-3"><img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1691847793/Sciassethub/img/AR_j7bpeu.png" width="25"></span>
                            @endif
                            @if(gzuncompress($asset_chemical_formula_decrypt) != "")
                        <p>
                            <button type="button" class="btn btn-link text-muted p-0 text-decoration-none" data-toggle="tooltip" data-placement="top" title="{{gzuncompress($asset_chemical_formula_decrypt)}}">
                                <small><i class="fa fa-eye pr-1"></i>Chemical formula</small>
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
                            @if(gzuncompress($asset_max_value_decrypt) != 0)
                            <small class="pb-3 mb-3">
                                Quantity in storage: {{gzuncompress($asset_max_value_decrypt)}} {{ucfirst(gzuncompress($asset_unit_measurement_decrypt))}}
                            </small>
                            @else
                            <small class="pb-3 mb-3">
                                <b class="text-danger">Quantity in storage: {{gzuncompress($asset_max_value_decrypt)}} {{ucfirst(gzuncompress($asset_unit_measurement_decrypt))}} </b>
                            </small>
                            @endif
                            <br />
                            <div class="container-controller pl-2">
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
                                    <div class="pt-0"><small>Asset added {{\App\Providers\AppServiceProvider::difference_between_timestamp($asset_available->created_at)}}</small></div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                @if(gzuncompress($asset_max_value_decrypt) != 0)

            </a>
            @endif

            @endif
            @endforeach

        </div>
        @endif

        <!-- End of chemical section  -->


        @if(count($all_asset_available_four) != 0)

        <div class="py-4"></div>
        @Auth
        <div class="row align-items-center pt-0 mt-0">

            <div class="col-lg-6 col-md-6 col-sm-6 py-4 my-4">
                <h5>
                    <b>Equipment</b>
                </h5>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="all_asset_available/Equipment" class="btn btn-secondary no-radius float-right">
                    {{ __('View more') }}
                </a>
            </div>

        </div>

        @endif
        @endif

        @if(count($all_asset_available_four) != 0)
        <div class="order-card auto-fill">
            @foreach($all_asset_available_four->take(4) as $asset_available)

            <?php
            $asset_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->asset_name);
            $asset_min_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->min_value);
            $asset_max_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->max_value);
            $asset_unit_measurement_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->unit_measurement);
            $asset_asset_category_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->asset_category);
            $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($asset_available->firstname);
            $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($asset_available->lastname);
            $owner_full_name = $owner_firstname . " " . $owner_lastname;
            ?>
            @if(gzuncompress($asset_max_value_decrypt) >= gzuncompress($asset_min_value_decrypt))

            @if(gzuncompress($asset_max_value_decrypt) != 0)
            <a href="all_asset_available/asset_preview/{{$asset_available->asset_reference}}">
                @endif
                <?php
                Illuminate\Support\Facades\Cache::forget('asset_reference');
                $asset_preview = ['assets_display' => $all_asset_available];
                Illuminate\Support\Facades\Cache::put('asset_reference', $asset_preview, $minutes = 2880);
                ?>

                <div class="panel panel-default card-input card">
                    <div class="card-body border-0">
                        <div class="panel-heading pb-2 myGallery">
                            <div class="item">

                                <img src="{{asset($asset_available->asset_image)}}" class="asset_avaiable">
                            </div>
                        </div>
                        <p class="text-dark my-1 py-1 mx-0">
                            <b>{{gzuncompress($asset_name_decrypt)}}</b> <span class="pl-3">

                                @if($asset_available->ar_demo != 'no')
                                <span class="pl-3"><img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1691847793/Sciassethub/img/AR_j7bpeu.png" width="25"></span>
                                @endif

                                <!-- <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1691847793/Sciassethub/img/AR_j7bpeu.png" width="25"></span> -->
                                @if($asset_asset_category_decrypt == "Chemical")


                                <a tabindex="-1" id="testPop" title="Chemical formula" data-content="Formaldehyde, acetic acid, glucose" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-container="body" data-viewport=".container">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                                @endif
                        </p>
                        <div>
                            @if(gzuncompress($asset_max_value_decrypt) != 0)
                            <small class="pb-3 mb-3">
                                Quantity in storage: {{gzuncompress($asset_max_value_decrypt)}} {{ucfirst(gzuncompress($asset_unit_measurement_decrypt))}}
                            </small>
                            @else
                            <small class="pb-3 mb-3">
                                <b class="text-danger">Quantity in storage: {{gzuncompress($asset_max_value_decrypt)}} {{ucfirst(gzuncompress($asset_unit_measurement_decrypt))}}</b>
                            </small>
                            @endif

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
                                    <div><b class="ellipsis">{{Str::limit($owner_full_name, 15, ' ...')}}</b></div>
                                    @endif
                                    <div class="pt-0"><small>Asset added {{\App\Providers\AppServiceProvider::difference_between_timestamp($asset_available->created_at)}}</small></div>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @if(gzuncompress($asset_max_value_decrypt) != 0)
            </a>
            @endif

            @endif
            @endforeach

            @endif
        </div>
        @else

        <div class="row align-items-center pt-0 mt-0">
            <div class="col-lg-12 col-md-12 col-sm-12 py-5">

                <center>
                    <p>Nothing to display.</p>
                    <p><i>Be the inaugural contributor by adding assets, including chemicals or equipment, to our platform.</i></p>

                    <a href="dashboard/my_asset" class="btn btn-secondary no-radius my-4">
                        {{ __('Add now') }}
                    </a>
                </center>
            </div>

        </div>
        @endif

    </section>

    @guest
    <!-- <div class="container py-5">

        <center>
            <div class="my-5" style="width: 50%; height: 20px; border-bottom: 1px solid black; text-align: center">
                <center>
                    <span style="font-size: 30px; background-color: #fff; padding: 0 20px;">
                       <b>Title Section</b>
                    </span>
                </center>
            </div>
        </center>
    </div>

     <div class="container">
        <table class="comparison-table">
            <thead>
                <th>&nbsp;</th>
                <th class="text-center">Sciassethub</th>
                <th class="text-center">The competition</th>
                <th class="text-center">The competition</th>
            </thead>
            <tbody>
                <tr>
                    <td>View assets</td>
                    <td>✓</td>
                    <td>✓</td>
                    <td>✓</td>

                </tr>
                <tr>
                    <td>View assets <b>(AR mode)</b></td>
                    <td>✓</td>
                    <td>✓</td>
                    <td>✓</td>
                </tr>
                <tr>
                    <td>View assets <b>(3D mode)</b></td>
                    <td>✓</td>
                    <td>✓</td>
                    <td>✓</td>
                </tr>
                <tr>
                    <td>Request asset</td>
                    <td>✓</td>
                    <td>✓</td>
                    <td>✓</td>

                </tr>
                <tr>
                    <td>View space to rent (incubator)</td>
                    <td>✓</td>
                    <td>✗</td>
                    <td>✓</td>
                </tr>
            </tbody>
        </table>
    </div> -->
    <br />
    <div class="slider mt-5">
        <div class="slide-track">
            <div class="slide">
                <img src="{{asset('60Uwc.png')}}" height="100" width="180">
            </div>
            <div class="slide">
                <img src="{{asset('Natural-Sciences.jpg')}}" height="100" width="250">
            </div>
            <div class="slide">
                <img src="{{asset('CHS.jpg')}}" height="100" width="250">
            </div>
            <div class="slide">
                <img src="{{asset('Dentistry_Final.jpg')}}" height="100" width="270">
            </div>
            <div class="slide">
                <img src="{{asset('phar.jpg')}}" height="100" width="300">
            </div>

            <div class="slide">
                <img src="{{asset('Natural-Sciences.jpg')}}" height="100" width="250">
            </div>
            <div class="slide">
                <img src="{{asset('CHS.jpg')}}" height="100" width="250">
            </div>
            <div class="slide">
                <img src="{{asset('60Uwc.png')}}" height="100" width="180">
            </div>
            <div class="slide">
                <img src="{{asset('Dentistry_Final.jpg')}}" height="100" width="270">
            </div>
            <div class="slide">
                <img src="{{asset('phar.jpg')}}" height="100" width="300">
            </div>
        </div>
    </div>
    @endguest


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