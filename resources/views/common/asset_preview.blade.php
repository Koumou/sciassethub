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
            <!-- <div class="input-group py-2">

                <input type="text" class="form-control outline-0" placeholder="Type asset name">
                <div class="input-group-append">
                    <button class="btn btn-secondary ml-3 text-white" type="button">
                        Search
                    </button>
                </div>
            </div> -->

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
@endif

@endauth

<?php
$retrieve_asset_sselected = Illuminate\Support\Facades\Cache::get("asset_reference");
?>
@if(count($retrieve_asset_sselected) == 1)

@foreach($retrieve_asset_sselected as $preview_assets)
@foreach($preview_assets as $preview_asset)

<?php
$asset_asset_category = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->asset_category);
?>
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/">Asset</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{gzuncompress($asset_asset_category)}}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container py-2">


    <?php
    $isApprove = $asset_requested_display->where('asset_request_id', $preview_asset->asset_id);

    ?>
    @if($isApprove->contains('asset_owner_ref','-'))

    <?php
    ?>
    <div class="alert alert-warning mx-0" role="alert">
        <strong>About the "{{gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($preview_asset->asset_name))}}" requested by you!</strong> The asset hasn't been sent to the owner yet; however, the system has temporarily reserved the requested amount. This reservation will persist until your supervisor approves the request, and the asset owner will receive notification regarding your request.
    </div>
    @endif
    <div class="row py-4">


        <div class="row m-0 p-0">


            <div class="col-lg-4 col-md-6 col-sm-12 m-0 p-0">

                <div class="panel-heading pb-2 myGallery">
                    <div class="item">
                        <img src="{{asset($preview_asset->asset_image)}}" class="asset_available_preview">
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-12">
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">

                <?php
                $asset_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->asset_name);
                $asset_min_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->min_value);
                $asset_max_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->max_value);
                $asset_unit_measurement_decrypt = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->unit_measurement);
                $asset_asset_category_decrypt = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->asset_category);
                $asset_training_available = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->training_available);
                $asset_warning_hazard = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->warning_hazard);
                $asset_general_use = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->general_use);
                $asset_instruction = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->instruction);
                $user_account_status = Illuminate\Support\Facades\Crypt::decrypt(Illuminate\Support\Facades\Auth::user()->account_status);



                // dd();

                $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->firstname);
                $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->lastname);
                $owner_full_name = $owner_firstname . " " . $owner_lastname;

                $decompress = gzuncompress($asset_training_available);

                ?>
                <div class="container-controller py-2 ml-0">
                    <div class="float-left pr-3">
                        <div class="user_profile_01">
                            <span class="text-white">{{\App\Providers\AppServiceProvider::FirstLetter($owner_full_name)}}</span>
                        </div>
                    </div>
                    <div class="float-right m-0 p-0">
                        <div><b>{{$owner_firstname}} {{$owner_lastname}}</b></div>
                        <div class="pt-0"><small>Asset added {{\App\Providers\AppServiceProvider::difference_between_timestamp($preview_asset->created_at)}}</small></div>
                        </p>
                    </div>

                </div>

                <div>

                    <!-- <span class="pl-3"><img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1691847793/Sciassethub/img/AR_j7bpeu.png" width="25"></span> -->

                    <b class="pr-4">{{gzuncompress($asset_name_decrypt)}}</b>
                    @if($preview_asset->ar_demo != 'no')


                    <!-- Button trigger modal -->
                    <a href="#" class="btn border-0" data-toggle="modal" data-target="#staticBackdrop">
                        <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1691847793/Sciassethub/img/AR_j7bpeu.png" width="35">
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="staticBackdropLabel">View mode</h5> -->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>
                                        <center>To View this model using:</center>
                                    </h5>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-2 col-md-2 col-sm-12">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 justify-content-center align-items-center">

                                            <div class="text-center">
                                                <div class="card-body">
                                                    <div class="align-items-center">
                                                        <i class="fa fa-mobile-phone py-2" style="font-size:48px;color:black"></i>
                                                        <div class="pt-2">on mobile phone</div>
                                                    </div>
                                                    <p>Scan the code below with your device (e.g. Android or IOS)</p>
                                                    <div>
                                                        <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1695245622/Sciassethub/img/QR_https_sciassethub_com__w98415.png" width="120">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-12">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 justify-content-center align-items-center">

                                            <div class="text-center">
                                                <div class="card-body">
                                                    <div class="align-items-center">
                                                        <i class="fa fa-desktop py-2" style="font-size:48px;color:black"></i>
                                                        <div class="pt-2">on desktop pc</div>

                                                    </div>
                                                    <p> Click on the following <a href="https://sciassethub.com/ar_microscope">Microscope</a> </p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    @endif

                </div>
                <br />
                <p class="py-1">
                    <small>
                        Quantity in storage: {{gzuncompress($asset_max_value_decrypt)}} {{ucfirst(gzuncompress($asset_unit_measurement_decrypt))}}
                    </small>
                </p>
                @if($preview_asset->exp_date != "na")
                <p>
                    <small>
                        <?php
                        $asset_chemical_formula_ = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->chemical_formula);
                        $asset_exp_date = Illuminate\Support\Facades\Crypt::decrypt($preview_asset->exp_date);

                        ?>
                    </small>
                </p>

                @if($preview_asset->exp_date != "na")
                <?php
                ?>
                <div class="py-2">
                    <p><b>Chemical formula:</b></p>
                    <p>{{gzuncompress($asset_chemical_formula_)}}</p>
                </div>
                <div class="py-2">
                    <p><b>Expiration date:</b></p>
                    <p>{{gzuncompress($asset_exp_date)}}</p>
                </div>
                @endif
                @endif




                @if($asset_requested_display->where('asset_request_id', $preview_asset->asset_id)->count() === 0)



                @if(Auth::user()->email != $preview_asset->user_reference)

                <form method="POST" action="/all_asset_available/asset_preview/{{$preview_asset->asset_id}}/requested" data-netlify-recaptcha="true" data-netlify="true">
                    {{ csrf_field() }}

                    @if($decompress == "Yes")
                    <div class="py-2">
                        In-person training on the usage of {{gzuncompress($asset_name_decrypt)}} is available. Would you like to request a session (Optional) ?

                        <p class="pt-2">
                            <input type="radio" id="no_ar" name="training" value="no">
                            <label for="no_ar">No</label>
                        </p>
                    </div>
                    @endif

                    @if($user_account_status == "active")
                    <div class="row m-0 p-0 pt-5">
                        <div class="col-lg-5 col-md-4 col-sm-12 m-0 p-0">
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                            <input type="number" id="number" name="qty" value="0" class="ml-3" />
                            <!-- <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value" data-max-quantity="{{ gzuncompress($asset_max_value_decrypt) }}"  data-min-quantity="{{ gzuncompress($asset_min_value_decrypt) }}">+</div> -->
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value" data-max-quantity="{{ gzuncompress($asset_max_value_decrypt) }}" data-min-quantity="{{ gzuncompress($asset_min_value_decrypt) }}">+</div>


                        </div>
                        <div class="col-lg-1 col-md-3 col-sm-12 py-2">
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-12 m-0 p-0">
                            <button type="submit" id="request_btn" class="btn btn-secondary btn no-radius ml-1 p-2">
                                {{ __('Request asset') }}
                            </button>
                        </div>
                    </div>
                    @else
                    <div class="m-0 p-0 pt-5">
                        <b class="text-danger">Your account has not been activated yet. Please activate your account to be able to request an asset. <br />To activate your account, go to your email account, search for <u class="text-danger">SciAssetHub</u>, open the email titled "Verify your email address," scroll down, and click on the orange button that says "Activate your account."</b>
                    </div>
                    @endif
                </form>
                @endif


                @else
                <div class="col-lg-12 col-md-12 col-sm-12 m-0 py-3 px-0">
                    <button type="submit" class="btn btn-secondary btn no-radius ml-1 disabled">
                        {{ __('Requested') }}
                    </button>
                </div>
                @endif



                <div class="py-2 pt-5">
                    <p><b>General use:</b></p>
                    <p>{{gzuncompress($asset_general_use)}}</p>
                </div>

                <div class="py-2">
                    <p><b>Instructions for using {{gzuncompress($asset_name_decrypt)}}:</b></p>
                    <p>{{gzuncompress($asset_instruction)}}</p>
                </div>


                <div class="py-2">
                    <p><b>Warning hazard:</b></p>
                    <p>{{gzuncompress($asset_warning_hazard)}}</p>
                </div>

            </div>
        </div>
    </div>
    <br />
    <br />
    <?php

    $specify_asset = $analyst_asset->where('asset_id', $preview_asset->asset_id);

    $total_ = gzuncompress($asset_max_value_decrypt);

    $asset_accepted = $specify_asset->where('is_request_approved', 'accept');
    $asset_rejected = $specify_asset->where('is_request_approved', 'reject');
    $requested = $specify_asset->where('is_request_approved', '-');
    $asset_hold = $specify_asset->where('asset_owner_ref', '-');

    // dd($asset_accepted, $asset_rejected, $requested, $asset_hold);

    ?>
    <div class="row">
        <div class="col-md-8" class="col-md-12">

            <div class="panel panel-default card-input crd">
                <div class="card-ody border-0">

                    <div class="item mb-2">
                        Asset requested
                        <div class="progress" style="height: 15px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo round((floatval(count($requested)) * 100) / $total_) ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{round((floatval(count($requested)) * 100) / $total_)}}%</div>
                        </div>
                    </div>

                    <div class="item mb-2">
                        Asset accepted
                        <div class="progress" style="height: 15px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo round((floatval(count($asset_accepted)) * 100) / $total_) ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{round((floatval(count($asset_accepted)) * 100) / $total_)}}%</div>
                        </div>
                    </div>

                    <div class="item mb-4">
                        Asset rejected
                        <div class="progress" style="height: 15px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo round((floatval(count($asset_rejected)) * 100) / $total_) ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{round((floatval(count($asset_rejected)) * 100) / $total_)}}%</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-1" class="col-md-12">
        </div>

        <div class="col-md-3" class="col-md-12">
            <div class="panel panel-default card-input ard">
                <div class="card-bdy border-0">
                    <div class="item">
                        <h5 class="card-eader">Asset on hold <span class="badge badge-pill badge-secondary float-right ml-5">{{count($asset_hold)}}</span></h5>
                        <br />
                        <small>The label is associated with the asset that has been requested and is currently in a pending status, awaiting confirmation from their respective supervisors.</small>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>
@endforeach
@endforeach
@endif


<script>
    $(function() {
        $('[data-toggle="popover"]').popover()
    })
</script>

@endsection