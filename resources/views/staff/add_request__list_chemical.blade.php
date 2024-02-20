@extends('layouts.style_guest')

@section('content')
<div class="container py-5">
    <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/dashboard/my_asset">My asset (folder)</a></li>
                <li class="breadcrumb-item active" aria-current="page">View my asset (chemical)</li>
            </ol>
        </nav>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 px-0 mx-0">
        <div class="col-lg-12 col-md-12 col-sm-12 p-0 py-2">
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

            @if(Session::has('EQUIPMENT_MODIFIED'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congrats!</strong> Chemical was updated successfully.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

        </div>
        <a href="/dashboard/my_asset/category_equipment/form_add_chemical" class="btn btn-secondary no-radius float-right">
            {{ __('Add asset') }}
        </a>
    </div>

    <section class="container py-0 mx-0 px-0">
        <div class="row align-items-center py-2 pb-4 px-0">
            <div class="col-lg-6 col-md-6 col-sm-6 px-0">
                <h6><b><small><b>All your assets (chemical)</b></small></b></h6>
            </div>
        </div>

        @if(count($all_asset_available) != 0)

        <?php
        $all_equipment_asset_available = $all_asset_available->where('user_reference', Illuminate\Support\Facades\Auth::user()->email);

        $decryptedRentSpaces = $all_equipment_asset_available->map(function ($rentSpace) {
            $rentSpace->asset_category = gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($rentSpace->asset_category));

            return $rentSpace;
        });

        $extract_equipment = $decryptedRentSpaces->where('asset_category', "Chemical");

        ?>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 px-0">
                <div class="panel panel-default card-input">
                    <div class="card-body ml-4 border-0">
                        <button class="btn btn-default" type="button" data-toggle="dropdown">
                            <i class="fa fa-folder-open mr-4" style="font-size:24px"></i> <b>Chemical > View</b>
                        </button>
                    </div>
                </div>
                <div class="panel panel-default card-input ">
                    <div class="card-body border-0">
                        <a href="/dashboard/my_asset/category_equipment" class="no-decoration text-decoration:none text-decoration-*">
                            <button class="btn btn-default" type="button" >
                                <i class="fa fa-folder mr-4" style="font-size:24px"></i> <b>Equipment > View</b>
                            </button> </a>
                    </div>
                </div>


            </div>
            <div class="col-lg-9 col-md-3 col-sm-12 px-0">

                <div class="order-card auto-fill-customize">
                    @foreach($extract_equipment as $asset_avail)
                    <?php
                    $asset_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->asset_name);
                    $asset_min_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->min_value);
                    $asset_max_value_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->max_value);
                    $asset_unit_measurement_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->unit_measurement);
                    $asset_asset_category_decrypt = $asset_avail->asset_category;
                    $asset_chemical_formula_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->chemical_formula);
                    $owner_firstname = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->firstname);
                    $owner_lastname = Illuminate\Support\Facades\Crypt::decrypt($asset_avail->lastname);
                    $owner_full_name = $owner_firstname . " " . $owner_lastname;
                    ?>
                    @if(gzuncompress($asset_max_value_decrypt) >= gzuncompress($asset_min_value_decrypt))
                    <div class="panel panel-default card-input card">

                        <div class="card-body border-0">
                            <div class="panel-heading pb-2 myGallery">
                                <div class="item">

                                    <img src="{{asset($asset_avail->asset_image)}}" class="asset_avaiable">
                                </div>
                            </div>
                            <p class="text-dark my-1 py-1 mx-0">
                            <b class="pr-4">{{Str::limit(gzuncompress($asset_name_decrypt), 15, ' ...')}}</b>
                                @if($asset_avail->ar_demo != 'no')
                                <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1691847793/Sciassethub/img/AR_j7bpeu.png" width="20">
                                @endif
                            <p>
                                <button type="button" class="btn btn-link text-muted p-0 text-decoration-none" data-toggle="tooltip" data-placement="top" title="{{gzuncompress($asset_chemical_formula_decrypt)}}">
                                    <small><i class="fa fa-eye pr-1"></i> Chemical formula</small>
                                </button>
                            </p>
                            </p>
                            <div>
                                <small class="pb-3 mb-3">
                                Quantity in storage: {{gzuncompress($asset_max_value_decrypt)}} {{ucfirst(gzuncompress($asset_unit_measurement_decrypt))}}
                                </small>
                                <br />
                                <div>
                                    <div class="pt-0"><small>Asset added
                                            {{\App\Providers\AppServiceProvider::difference_between_timestamp($asset_avail->created_at)}}</small>
                                    </div>
                                    </p>
                                </div>
                            </div>

                            @if($asset_avail->user_reference != Auth::user()->email)
                            <div>
                                <a href="all_asset_available/asset_preview/{{$asset_avail->asset_reference}}" class="btn btn-secondary btn btn-block no-radius">
                                    <?php
                                    $asset_preview = ['assets_display' => $all_equipment_asset_available];
                                    Illuminate\Support\Facades\Cache::put('asset_reference', $asset_preview, $minutes = 2880);

                                    ?>
                                    {{ __('Request asset') }}
                                </a>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 py-1">

                                    <!-- <a data-id="{{$asset_avail->id}}" data-toggle="modal" data-target="#delete_account"   class="open-AddBookDialog pointer">open <i class="fa fa-edit"></i></a> -->
                                    <button class="btn btn-secondary btn btn-block no-radius open-AddBookDialog" data-id="{{$asset_avail->asset_reference}}" data-toggle="modal" data-target="#delete_account" class="open-AddBookDialog pointer">Modify</button>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    @endif

                    @endforeach
                </div>
            </div>

        </div>

        @endif

    </section>


    <!-- Modal -->
    <div class="modal fade" id="delete_account" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="delete_accountLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-bottom">
            <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-header no-border">
                    <h2 class=" fs-title modal-title" id="delete_accountLabel"><b>Update</b></h2>
                    <button type="button" class="close round-button" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body no-border">
                    <!-- <p>You are about to update the information.</p> -->
                    <div class="col-lg-12 col-md-12 col-sm-12 p-0">
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

                        @if(Session::has('EQUIPMENT_MODIFIED'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congrats!</strong> Equipment was updated successfully.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                    </div>

                    <form id="msform" method="POST" data-netlify-recaptcha="true" data-netlify="true">
                        @csrf
                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <p>Dear {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->title)}}. {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->lastname)}},</p>
                                    <p>You have 5 assets that have been requested by individuals within the University of the Western Cape. The system has temporarily placed the requested quantity on hold, adjusting the currently displayed quantity.
                                        <br />
                                        <br />

                                        By clicking the 'I UNDERSTAND' button, you confirm that the SYSTEM SHOULD AMEND THE INFORMATION BASED ON THE INPUT YOU ARE ABOUT TO INSERT.
                                </div>
                                <br><br>
                            </div>
                            <input type="button" name="next" class="next btn btn-danger  action-button" value="I UNDERSTAND" />

                        </fieldset>


                        <fieldset>
                            <div class="form-card">


                                <div class="form-group">
                                    <label class="fieldlabels">Maximun quantity or number of the equipment: <b class="text-danger">*</b></label>
                                    <input type="text" name="chemical_max" placeholder="Enter the maximum value of the equipment you currently have" />
                                    <div class="small">example: 600</div>
                                </div>


                                <div class="form-group">
                                    <label class="fieldlabels">Minimum quantity or number of the equipment: <b class="text-danger">*</b></label>
                                    <input type="text" name="chemical_min" placeholder="Enter the minimum amount that can be purchased" />
                                    <div class="small">example: 30</div>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">General use: <b class="text-danger">*</b></label>
                                    <textarea name="general_use" placeholder="Enter general use ..." rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Instruction for using the asset: <b class="text-danger">*</b></label>
                                    <textarea name="instruction" placeholder="Enter general use ..." rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Warning hazard: <b class="text-danger">*</b></label>
                                    <textarea name="warning_hazard" placeholder="Enter warning hazard ..." rows="3"></textarea>
                                </div>

                            </div>
                            <input type="button" name="next" class="next btn btn-danger float-right action-button" value="Next" />
                            <input type="button" name="previous" class="previous float-left action-button" value="Previous" />

                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">

                                    By clicking the 'I UNDERSTAND' button, you confirm that the PERSONAL INFORMATION you
                                    have provided is correct and accurate.
                                </div>
                                <br><br>
                            </div>
                            <button type="submit" class="btn btn-danger float-left no-radius">Cancel</button>

                            <button type="submit" class="btn btn-success float-right no-radius">I UNDERSTAND</button>
                        </fieldset>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("body").tooltip({
                selector: '[data-toggle=tooltip]'
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".open-AddBookDialog").click(function() {
                //   $('#bookId').text($(this).data('id'));


                var bookIdValue = $(this).data('id');
                $('#bookId').val(bookIdValue);

                var form = document.getElementById("msform");
                form.action = "/dashboard/my_asset/category_equipment/form_modify_chemical/" + bookIdValue;


                $('#addBookDialog').modal('show');
            });
        });
    </script>
</div>

</div>



@endsection