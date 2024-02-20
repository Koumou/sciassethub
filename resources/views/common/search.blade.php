@extends('layouts.style_guest')

@section('content')

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
@endif

<div class="container py-5">
    <div class="row  py-4 d-flex align-items-center justify-content-center">
        <form id="msform" method="POST" action="{{ route('search.request') }}" data-netlify-recaptcha="true" data-netlify="true">
            {{ csrf_field() }}

            <center>
                <div class="col-lg-8">
                    <div class="input-group py-2">


                        <input type="text" class="form-control outline-0" name="input_insert" placeholder="Type asset name" onkeyup="if(this.value.length > 2) document.getElementById('start_button').disabled = false; else document.getElementById('start_button').disabled = true;">
                        <div class="input-group-append">
                            <button class="btn btn-secondary ml-3 text-white" type="submit" id="start_button" disabled>
                                Search
                            </button>
                        </div>

                    </div>
                </div>
            </center>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $('#textarea').on('keypress keyup keydown', function() {
            if ($('#textarea').val() == "") {
                $('#savebtn').prop('disabled', true);
            } else {
                $('#savebtn').prop('disabled', false);
            }
        });
    </script>
</div>


@if (Cache::has('asset_search') || Cache::has('asset_search1'))
<?php

// dd(Illuminate\Support\Facades\Cache::get('asset_search1'));
$cache_asset_search = Illuminate\Support\Facades\Cache::get('asset_search');
$cache_asset_search1 = Illuminate\Support\Facades\Cache::get('asset_search1');
$cache_input_inserted = Illuminate\Support\Facades\Cache::get('input_inserted');
$cache_input_ChapGPT = Illuminate\Support\Facades\Cache::get('ChapGPT');



// dd(count($cache_asset_search) == 0 , count($cache_asset_search1));
?>

@if(count($cache_asset_search) == 0 && count($cache_asset_search1) == 0)
<div class="container py-5">

    <div class="pt-5">
        <p>About 0 results</p>
        <di>Your search - {{$cache_input_inserted}} - did not match any documents.</di>
    </div>
</div>

@else

<div class="container py-0">

    <div class="pt-0">
        <div><small>About {{count($cache_asset_search) + count($cache_asset_search1)}} results</small></div>
        <div><small>Your search - {{$cache_input_inserted}} - did not match any documents.</small></div>
        <br />
        <br />
    </div>


    <div class="row py-4">
        <!-- ChapGPT -->
        <div class="order-card auto-fill__">

            <!-- Begin _ Asset -->
            @foreach($cache_asset_search as $asset_available)
            <?php

            $asset_name_decrypt = $asset_available->asset_name;
            $asset_min_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->min_value);
            $asset_max_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->max_value);
            $asset_unit_measurement_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->unit_measurement);
            $asset_asset_category_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->asset_category);
            $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($asset_available->firstname);
            $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($asset_available->lastname);
            $owner_full_name = $owner_firstname . " " . $owner_lastname;
            ?>

            <a href="all_asset_available/asset_preview/{{$asset_available->asset_reference}}">

                <div class="panel panel-default card-input card">
                    <div class="card-body border-0">
                        <div class="panel-heading pb-2 myGallery">
                            <div class="item">

                                <img src="{{asset($asset_available->asset_image)}}" class="asset_avaiable">
                            </div>
                        </div>
                        <p class="text-dark my-1 py-1 mx-0">
                            <b>{{$asset_name_decrypt}}</b>
                            <span class="pl-3">
                                @if($asset_available->ar_demo != 'no')
                                <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1691847793/Sciassethub/img/AR_j7bpeu.png" width="35">
                                @endif
                            </span>

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
                                    <!-- <div class="bleed-left"></div> -->
                                    <div class="user_profile_01">
                                        <span class="text-white">{{\App\Providers\AppServiceProvider::FirstLetter($owner_full_name)}}</span>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div><b>{{$owner_firstname}} {{$owner_lastname}}</b></div>
                                    <!-- <div class="pt-0"><small>Asset added {{\App\Providers\AppServiceProvider::difference_between_timestamp($asset_available->created_at)}}</small></div>
                                    <br /> -->

                                    {{$cache_input_ChapGPT}};

                                </div>
                            </div>
                        </div>
                        <div>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach

            <!-- End Asset -->


            <!-- Begin Space -->
            <?php
            ?>
            @if(count($cache_asset_search1) !=0)
            @foreach($cache_asset_search1 as $asset_available)
            <?php

            $type_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->type_storage);
            $storage_brand_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->storage_brand);
            $low_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->temperature_range_l);
            $high_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->temperature_range_h);
            $storage_location_building_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->storage_location_building);
            $co2_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_available->co2);
            $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($asset_available->firstname);
            $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($asset_available->lastname);
            $owner_full_name = $owner_firstname . " " . $owner_lastname;
            ?>


            <a href="/rent_space_available/preview_rent_space_available/{{$asset_available->rent_place_id}}">


                <div class="panel panel-default card-input card">
                    <div class="card-body border-0">
                        <!-- <div class="panel-heading pb-2 myGallery">
                            <div class="item">
                                <img src="{{asset($asset_available->frontal_img)}}" class="asset_avaiable">
                            </div>
                        </div> -->
                        <p class="text-dark my-1 py-1 mx-0">
                            <b>{{gzuncompress($type_decrypt)}}: Brand ({{gzuncompress($storage_brand_decrypt)}})</b>
                            <br />
                        <div>Location: {{gzuncompress($storage_location_building_decrypt)}}</div>
                        <div>TR: {{gzuncompress($low_decrypt)}}°C (low) ~ {{gzuncompress($high_decrypt)}}°C (high)</div>
                        @if(gzuncompress($co2_decrypt) == "Yes")
                        <span class="badge badge-pill badge-dark mt-2">CO<sub class="text-white">2</sub></span>
                        @endif
                        </p>
                        <div>

                            <div class="container-controller py-2">
                                <div class="float-left">
                                    <!-- <div class="bleed-left"></div> -->
                                    <div class="user_profile_01">
                                        <span class="text-white">{{\App\Providers\AppServiceProvider::FirstLetter($owner_full_name)}}</span>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div><b>{{$owner_firstname}} {{$owner_lastname}}</b></div>
                                    <!-- <div class="pt-0"><small>Asset added {{\App\Providers\AppServiceProvider::difference_between_timestamp($asset_available->created_at)}}</small></div> -->
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </a>
            @endforeach
            @endif
            <!-- End space -->

        </div>


    </div>
</div>
@endif
@endif


@endsection