@extends('layouts.style_guest')

@section('content')

<div class="container py-5">
    <div>
        <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/dashboard/my_asset">My asset (folder)</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Chemical</li>
                </ol>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div>
                <div>

                    <div class="col-lg-12 col-md-12 col-sm-12 p-0 py-4">
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

                        @if(Session::has('EQUIPMENT_ADDED'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congrats!</strong> Chemical was added successfully.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>

                    <h4><b>Add chemical information</b></h4>
                    <form id="msform" method="POST" action="{{ route('add_chemical') }}" enctype="multipart/form-data" data-netlify-recaptcha="true" data-netlify="true">
                        {{ csrf_field() }}


                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <!-- fieldsets -->

                        <!-- General information related to assets -->
                        <fieldset>
                            <div class="form-card">

                                <div class="py-2 pb-4">
                                    <div>
                                        <h2 class="fs-title"><b>General information related to chemical</b></h2>
                                        <p>Please verify that all required fields have been correctly filled out.</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Chemical name: <b class="text-danger">*</b></label>
                                    <input type="text" name="chemical_name" placeholder="Enter chemical name" />
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Chemical expire date: <b class="text-danger">*</b></label>
                                    <?php
                                    // Calculate the minimum date (one month ahead)
                                    $minDate = date('Y-m-d', strtotime('+30 day'));

                                    // Get the current date
                                    $currentDate = date('Y-m-d');
                                    ?>

                                    <input type="date" name="exp_date" min="<?php echo $minDate; ?>" value="<?php echo $minDate; ?>" />
                                    <div style="font-size: x-small;">We recommend that +Expiration date must be {{$minDate}} or later.</div>
                                </div>


                                <div class="form-group">
                                    <label class="fieldlabels">Asset category: <b class="text-danger">*</b></label>
                                    <select name="asset_category" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                        <!-- <option value="" disabled>-- Select chemical category --</option> -->
                                        <option value="chemical" selected>Chemical</option>
                                        <option disabled>Equipment</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Chemical current location: <b class="text-danger">*</b></label>
                                    <select name="chemical_current_location" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                        <option value="Bellville" selected>Bellville</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Next button -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <!-- Next button -->

                        </fieldset>
                        <!-- General information related to assets -->

                        <!-- Value and measurement -->
                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <div>
                                        <h2 class="fs-title"><b>Quantity and measurement</b></h2>
                                        <p>Please verify that all required fields have been correctly filled out.</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Maximun quantity or number of the chemical: <b class="text-danger">*</b></label>
                                    <input type="text" name="chemical_max" placeholder="Enter the maximum value of the chemical you currently have" />
                                    <p style="font-size: x-small;">example: 600</p>
                                </div>


                                <div class="form-group">
                                    <label class="fieldlabels">Minimum quanityt or number of the chemical: <b class="text-danger">*</b></label>
                                    <input type="text" name="chemical_min" placeholder="Enter the minimum amount that can be purchased" />
                                    <p style="font-size: x-small;">example: 30</p>

                                </div>


                                <div class="form-group">
                                    <label class="fieldlabels">Units of measurement: <b class="text-danger">*</b></label>

                                    <select name="measurement" id="exampleFormControlSelect1" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                        <option value="">-- Select chemical units of measurement --</option>
                                        <option value="k">kilo</option>
                                        <option value="l">litre</option>
                                        <option value="ml">millilitre</option>
                                        <option value="g">gram</option>
                                        <option value="kg">kilogram</option>
                                    </select>
                                </div>

                            </div>


                            <input type="button" name="next" class="next action-button float-right" value="Next" />

                            <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        </fieldset>
                        <!-- Value and measurement -->

                        <!-- Chemical labeling -->
                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <div>
                                        <h2 class="fs-title"><b>Chemical labeling</b></h2>
                                        <p>Please verify that all required fields have been correctly filled out.</p>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <label class="fieldlabels">Chemical expiration date *</label>
                                    <input type="date" name="asset_exp" />
                                </div> -->

                                <div class="form-group">
                                    <label class="fieldlabels">Chemical formula: <b class="text-danger">*</b></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="chemical_formula" placeholder="Enter chemical formula ..." rows="2"></textarea>
                                    <p style="font-size: x-small;">example: Ethanol, Formaldehyde solution 37%</p>

                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">General use: <b class="text-danger">*</b></label>
                                    <textarea class="form-control" name="general_use" placeholder="Enter general use ..." rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Instruction for using the chemical: <b class="text-danger">*</b></label>
                                    <textarea class="form-control" name="instruction" placeholder="Enter general use ..." rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Warning hazard: <b class="text-danger">*</b></label>
                                    <textarea class="form-control" name="warning_hazard" placeholder="Enter warning hazard ..." rows="3"></textarea>
                                </div>


                            </div>

                            <input type="button" name="next" class="next action-button float-right" value="Next" />

                            <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        </fieldset>
                        <!-- Chemical labeling -->


                        <!-- Asset representation -->
                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <div>
                                        <h2 class="fs-title"><b>Chemical representation</b></h2>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Please select or add a chemical representation: <b class="text-danger">*</b></label>
                                    <input type="file" name="image_attached">
                                </div>

                                <!-- <div class="form-group">
                                    <label class="fieldlabels">Would you like an 360 view to be added to your chemical? (optional)</label>
                                    <p>
                                        <input type="radio" id="yes_360" name="three_d" value="yes">
                                        <label for="yes_360">Yes</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="no_360" name="three_d" value="no" checked>
                                        <label for="no_360">No</label>
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Would you like an AR demo to be added to your chemical? (optional)</label>
                                    <p>
                                        <input type="radio" id="yes_ar" name="ar" value="yes">
                                        <label for="yes_ar">Yes</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="no_ar" name="ar" value="no" checked>
                                        <label for="no_ar">No</label>
                                    </p>
                                </div> -->


                                <div class="form-group">
                                    <label class="fieldlabels">Does the chemical include training? <b class="text-danger">*</b></label>
                                    <p>
                                        <input type="radio" id="yes_asset" name="equipment_training" value="yes">
                                        <label for="yes_asset">Yes</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="no_asset" name="equipment_training" value="no" checked>
                                        <label for="no_asset">No</label>
                                    </p>
                                </div>

                            </div>
                            <!-- <input type="button" name="next" class="next action-button float-right" value="Submit" /> -->
                            <input type="button" name="next" class="next action-button float-right" value="Next" />


                            <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        </fieldset>
                        <!-- Asset representation -->


                        <!-- Acknowledgement of Asset Submission -->
                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <div class="pb-4">
                                        <h2 class="fs-title"><b>Acknowledgement of Chemical Submission</b></h2>
                                    </div>

                                    <!-- <div class="row justify-content-center px-4"> -->
                                    By clicking on the 'I UNDERSTAND' button, you confirm that all the information and chemical you have provided are accurate.
                                    This will allow our system to promote your chemical effectively and facilitate collaboration among researchers and other users within the system. Your contribution will be a valuable addition to the community.
                                </div>
                                <br><br>
                            </div>
                            <a href="/dashboard/my_asset/category_equipment/form_add_chemical" class="btn btn-danger float-left no-radius">Cancel</a>

                            <button type="submit" class="btn btn-success float-right no-radius">I UNDERSTAND</button>
                        </fieldset>
                        <!-- Acknowledgement of Asset Submission -->

                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


<!-- </div> -->
</div>

<script>
    var asset_name_entered = document.getElementsByName("equipment_name")[0];
    var display = document.getElementById("displayEquipment");

    asset_name_entered.addEventListener("input", function() {
        display.textContent = "Instruction for using: " + asset_name_entered.value.toLowerCase() + "*";
    });
</script>


@endsection