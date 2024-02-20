@extends('layouts.style_guest')

@section('content')

<div class="container py-5">
    <div>
        <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/dashboard/my_asset">My asset (folder)</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add space to rent</li>
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

                        @if(Session::has('SPACE_RENT_ADDED'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congrats!</strong> Space for rent was added successfully.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                    </div>



                    <h4><b>Add space to rent information</b></h4>
                    <form id="msform" method="POST" action="{{ route('form_add_space_rent') }}" enctype="multipart/form-data" data-netlify-recaptcha="true" data-netlify="true">
                        {{ csrf_field() }}


                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">

                                <div class="py-2 pb-4">
                                    <div>
                                        <h2 class="fs-title"><b>General information related to space to rent</b></h2>
                                        <p>Please verify that all required fields have been correctly filled out.</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Type of the storage: <b class="text-danger">*</b></label>
                                    <select name="type_storage" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                        <option value="">-- Select type of the storage --</option>
                                        <option value="incubator">Incubator</option>
                                        <option value="freezer">Freezer</option>
                                        <option value="fridge">Fridge</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Storage brand name: <b class="text-danger">*</b></label>
                                    <input type="text" name="storage_brand" placeholder="Enter storage brand name ..." />
                                    <div style="font-size: x-small;">example: Samsung</div>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Building where the storage is located: <b class="text-danger">*</b></label>
                                    <select name="storage_location_building" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                        <option value="">-- Select building --</option>
                                        <option value="lifescience">Lifescience</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Access to the location: <b class="text-danger">*</b></label>
                                    <select name="access_location" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                        <option value="">-- Select access to the location --</option>
                                        <option value="required access">required access</option>
                                        <option value="no required access">no required access</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Next button -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <!-- Next button -->

                        </fieldset>

                        <!-- Value and measurement -->
                        <fieldset>
                            <div class="form-card">

                                <div class="py-2 pb-4">
                                    <div>
                                        <h2 class="fs-title"><b></b></h2>
                                        <p>Please verify that all required fields have been correctly filled out.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="fieldlabels">Temperature range (Lowest): <b class="text-danger">*</b></label>
                                    <input type="text" name="temperature_range_low" placeholder="Enter the maximum value of the equipment you currently have" />
                                    <div style="font-size: x-small;">example: -1</div>
                                </div>


                                <div class="form-group">
                                    <label class="fieldlabels">Temperature range (Highest): <b class="text-danger">*</b></label>
                                    <input type="text" name="temperature_range_high" placeholder="Enter the minimum amount that can be purchased" />
                                    <div style="font-size: x-small;">example: 2</div>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">CO<sub>2</sub> available<b class="text-danger">*</b></label>
                                    <select name="co2" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                        <option value="">-- Select option of CO2 --</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <!-- <div class="form-group">
                                    <label class="fieldlabels">Size cubic meters: <b class="text-danger">*</b></label>
                                    <textarea class="form-control" name="size" placeholder="Enter size ..." rows="2"></textarea>
                                </div> -->

                                <!-- <div class="form-group">
                                    <label class="fieldlabels">Price per unit: <b class="text-danger">*</b></label>
                                    <input type="text" name="price" placeholder="Enter the minimum amount that can be purchased" />
                                    <div class="small">example: 10</div>
                                </div> -->

                                <div class="form-group">
                                    <label class="fieldlabels">Rent duration: <b class="text-danger">*</b></label>
                                    <select name="rent_duration" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                        <option value="">-- Select rent duration --</option>
                                        <option value="1">Daily</option>
                                        <option value="7">Weekly</option>
                                        <option value="14">Biweekly</option>
                                        <option value="30">Monthly</option>
                                        <option value="60">Bimonthly</option>
                                        <option value="365">Yearly</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Rent start: <b class="text-danger">*</b></label>
                                    <?php
                                    // Calculate the minimum date (one month ahead)
                                    $minDate = date('Y-m-d', strtotime('+30 day'));

                                    $currentDate = date('Y-m-d');
                                    ?>

                                    <input type="date" name="rent_start_date" min="<?php echo $currentDate; ?>" value="<?php echo $currentDate; ?>" />
                                    <!-- <span style="font-size:small;"> We recommend that +Expiration date must be {{$currentDate}} or later</span> -->
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Rent end: <b class="text-danger">*</b></label>
                                    <?php
                                    // Calculate the minimum date (one month ahead)
                                    $minDate = date('Y-m-d', strtotime('+30 day'));

                                    // Get the current date
                                    $currentDate = date('Y-m-d');
                                    ?>

                                    <input type="date" name="rent_end_date" min="<?php echo $currentDate; ?>" value="<?php echo $currentDate; ?>" />
                                    <!-- <span style="font-size:small;"> We recommend that +Expiration date must be {{$minDate}} or later</span> -->
                                </div>

                            </div>


                            <input type="button" name="next" class="next action-button float-right" value="Next" />

                            <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        </fieldset>
                        <!-- Value and measurement -->


                        <!-- Chemical labeling -->
                        <!-- <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <div>
                                        <h2 class="fs-title"><b>Rental Terms</b></h2>
                                        <p>Please verify that all required fields have been correctly filled out.</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Lease_agreement *</label>
                                    <textarea name="lease_agreement" placeholder="Enter general use ..." rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label id="displayEquipment">Description *</label>
                                    <textarea name="description" placeholder="Enter general use ..." rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Warning hazard</label>
                                    <textarea name="warning_hazard" placeholder="Enter warning hazard ..." rows="3"></textarea>
                                </div>

                            </div>

                            <input type="button" name="next" class="next action-button float-right" value="Next" />

                            <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        </fieldset> -->
                        <!-- Chemical labeling -->


                        <!-- Asset representation -->
                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <div>
                                        <h2 class="fs-title"><b>Space representation representation</b></h2>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Please add a frontal image of the storage: <b class="text-danger">*</b></label>
                                    <input type="file" name="image_frontal">
                                </div>
                                <div class="form-group">
                                    <label class="fieldlabels">Please add an image that shows the interior of the storage: <b class="text-danger">*</b></label>
                                    <input type="file" name="image_interior">
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button float-right" value="Next" />


                            <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <div>
                                        <h2 class="fs-title"><b>Additional information</b></h2>
                                        <p>Please verify that all required fields have been correctly filled out.</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Additional information: <b class="text-danger">*</b></label>
                                    <textarea name="additional_information" placeholder="Enter additional information ..." rows="4"></textarea>
                                </div>
                            </div>

                            <input type="button" name="next" class="next action-button float-right" value="Next" />

                            <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        </fieldset>

                        <!-- Acknowledgement of Asset Submission -->
                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <div class="pb-4">
                                        <h2 class="fs-title"><b>Acknowledgement of Equipment Submission</b></h2>
                                    </div>

                                    <!-- <div class="row justify-content-center px-4"> -->
                                    By clicking on the 'I UNDERSTAND' button, you confirm that all the information and equipment you have provided are accurate.
                                    This will allow our system to promote your equipment effectively and facilitate collaboration among researchers and other users within the system. Your contribution will be a valuable addition to the community.
                                </div>
                                <br><br>
                            </div>
                            <a href="/dashboard/my_asset/category_equipment/form_add_equipment" class="btn btn-danger float-left no-radius">Cancel</a>

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
        display.textContent = "Instruction for using:" + asset_name_entered.value.toLowerCase() + " *";
    });
</script>


@endsection