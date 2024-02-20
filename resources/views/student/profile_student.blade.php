@extends('layouts.style_guest')

@section('content')

<div class="container py-5">
    <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>

        @if(Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->account_status) == 'inactive')
        <?php
        ?>
        @if(count($activate_account) == 0)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Active inactive account:</strong> We've sent an activation email to the email address you registered with. Click the link in the email to activate your account. <span class="text-danger"> In case you haven't received it, you can have the email resent by <a href="/activate_account"><b class="text-danger">clicking here</b></a>.</span>
        </div>
        @else
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
            <strong>Active inactive account:</strong> We've re-sent an activation email to the email address you registered with. Click the link in the email to activate your account. In case you haven't received it, please check your spam folder.
        </div>

        @endif
        @endif

    </div>
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

    @if(Session::has('PERSONAL_INFORMATION_UPDATED'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congrats!</strong> Personal information updated successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(Session::has('RESEARCH_PROJECT'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congrats!</strong> Research project added successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(Session::has('PASSWORD_NOT_CHANGED'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oops!</strong> Old Password is Invalid.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>


    @elseif(Session::has('PASSWORD_CHANGED'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congrats!</strong> Password successfully changed.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <?php
    $user_university = $universities_data->where('university_id', Illuminate\Support\Facades\Crypt::decrypt(Illuminate\Support\Facades\Auth::user()->university_id));
    $user_position = $position_data->where('position_id', Illuminate\Support\Facades\Crypt::decrypt(Illuminate\Support\Facades\Auth::user()->position_id));

    if (Illuminate\Support\Facades\Auth::user()->department_id != NULL) {
        $user_department = $department_data->where('department_id', Illuminate\Support\Facades\Crypt::decrypt(Illuminate\Support\Facades\Auth::user()->department_id));
    }

    ?>

    <div class="pt-4">
        <div class="order-card auto-fit">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4"><b>Personal information</b></h5>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Name:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            @if(Auth::user()->firstname != '-')
                            {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->firstname)}} {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->lastname)}}
                            @else
                            -
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Gender:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            @if(Auth::user()->gender != '-')
                            {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->gender)}}
                            @else
                            -
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Address:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            @if(Auth::user()->physical_address != '-')
                            {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->physical_address)}}
                            @else
                            -
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Phone number:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            @if(Auth::user()->phone_number != '-')
                            {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->phone_number)}}
                            @else
                            -
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            University:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            @if(count($user_university) == 1)
                            @foreach($user_university as $university_reference)
                            {{$university_reference->university_name}}
                            @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Department:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">

                            @if(Auth::user()->department_id != NULL)
                            @if(count($user_department) == 1)
                            @foreach($user_department as $department_reference)
                            {{$department_reference->department_name}}
                            @endforeach
                            @endif
                            @else
                            -
                            @endif

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Position:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            @if(count($user_position) == 1)
                            @foreach($user_position as $position_reference)
                            {{$position_reference->position_name}}
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary float-right my-3" data-toggle="modal" data-target="#personal_information">Modify</a>


                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4"><b>Account and Sign in</b></h5>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Email:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            {{Auth::user()->email}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Password:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            ********
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Status:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">

                            @if(Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->account_status) == 'inactive')
                            <span class="badge rounded-pill text-bg-danger">Inactive</span>
                            @else
                            <span class="badge rounded-pill text-bg-success">Active</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Member since:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            {{Auth::user()->created_at}}
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Platform:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            {{Jenssegers\Agent\Facades\Agent::platform()}}
                            <!--  @if((new \Jenssegers\Agent\Agent())->isMobile())
                            <?php
                            // dd("Hello");
                            ?>
                            @endif -->


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Browser:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            {{Jenssegers\Agent\Facades\Agent::browser()}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Browser version:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <?php $browser = Jenssegers\Agent\Facades\Agent::browser() ?>
                            {{Jenssegers\Agent\Facades\Agent::version($browser)}}

                        </div>
                    </div>
                    <a href="#" class="btn btn-primary float-right my-3" data-toggle="modal" data-target="#change_password">Change password</a>

                </div>
            </div>
        </div>
        <br />


        @if(Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->position_id) === '5')

        <div class="order-card auto-fit">
            @if(Auth::user()->firstname != '-')

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4"><b>Research project</b></h5>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Supervisor:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            @if($research_project_data == NULL)
                            -
                            @else
                            {{Illuminate\Support\Facades\Crypt::decrypt($research_project_data->supervisor_title)}} - {{Illuminate\Support\Facades\Crypt::decrypt($research_project_data->supervisor_name)}}
                            @endif
                        </div>
                    </div>

                    <?php

                    // dd($research_project_data,Illuminate\Support\Facades\Crypt::decrypt($research_project_data->supervisor_title));

                    ?>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Research title:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            @if($research_project_data == NULL)
                            -
                            @elseif ($research_project_data == "N/A")
                            N/A
                            @else

                            {{Illuminate\Support\Facades\Crypt::decrypt($research_project_data->research_focus)}}
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Supervisor confirmation:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            @if($research_project_data == NULL)
                            -
                            @else
                            @if($research_project_data->supervisor_email == "-")
                            <span class="badge rounded-pill text-bg-danger">Await</span>
                            @else
                            <span class="badge rounded-pill text-bg-success">Approve</span>
                            @endif
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Research asset category:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <?php
                            ?>
                            @if($research_project_data == NULL)
                            -
                            @else
                            {{Illuminate\Support\Facades\Crypt::decrypt($research_project_data->asset_category)}}
                            @endif
                        </div>
                    </div>

                    @if($research_project_data == NULL)
                    <a href="#" class="btn btn-primary float-right my-3" data-toggle="modal" data-target="#research_project">Modify</a>
                    @endif

                    <!-- <a href="#" class="btn btn-primary float-right my-3">Modify</a> -->
                </div>
            </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4"><b>Delete account</b></h5>
                    <div class="card-text"><span class="mr-3">It is important to note that once you delete your account, all of the information associated with it will be permanently erased and unable to be retrieved.</div>
                    <a href="#" class="btn btn-warning float-right my-3" data-toggle="modal" data-target="#delete_account">Delete account</a>
                </div>
            </div>
        </div>
        @else

        <div class="order-card auto-fit">

            @if(Auth::user()->firstname != '-')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4"><b>Research project</b></h5>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Supervisor:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            @if($research_project_data == NULL)
                            -
                            @else
                            {{Illuminate\Support\Facades\Crypt::decrypt($research_project_data->supervisor_title)}} - {{Illuminate\Support\Facades\Crypt::decrypt($research_project_data->supervisor_name)}}
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Research title:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">

                            @if($research_project_data == NULL)
                            -
                            @else
                            {{Illuminate\Support\Facades\Crypt::decrypt($research_project_data->research_focus)}}
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            Research asset category:
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">

                            @if($research_project_data == NULL)
                            -
                            @else
                            {{Illuminate\Support\Facades\Crypt::decrypt($research_project_data->asset_category)}}
                            @endif
                        </div>
                    </div>

                    @if($research_project_data == NULL)
                    <a href="#" class="btn btn-primary float-right my-3" data-toggle="modal" data-target="#research_project">Modify</a>
                    @endif

                    <!-- <a href="#" class="btn btn-primary float-right my-3">Modify</a> -->
                </div>
            </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4"><b>Delete account</b></h5>
                    <div class="card-text"><span class="mr-3">It is important to note that once you delete your account, all of the information associated with it will be permanently erased and unable to be retrieved.</div>
                    <a href="#" class="btn btn-warning float-right my-3" data-toggle="modal" data-target="#delete_account">Delete account</a>
                </div>
            </div>
        </div>
        @endif



    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="personal_information" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="personal_informationLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-bottom">
        <div class="modal-content" style="border-radius: 20px;">
            <div class="modal-header no-border">
                <h2 class=" fs-title modal-title" id="personal_informationLabel"><b>Modify personal information</b></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body no-border">
                <form id="msform" method="POST" action="/personal_information" data-netlify-recaptcha="true" data-netlify="true">
                    @csrf

                    <fieldset>
                        <div class="form-card">

                            <div class="form-group">
                                <label class="fieldlabels">Title *</label>
                                <select class="form-control" name="title" id="title" value="{{ old('gender') }}" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                    <option value="">-- Select your title --</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Prof">Prof</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="fieldlabels">Firstname *</label>
                                <input id="firstname" type="text" name="firstname" value="{{ old('firstname') }}" placeholder="Enter firstname" autofocus>
                            </div>


                            <div class="form-group">
                                <label class="fieldlabels">Surname *</label>
                                <input id="surname" type="text" name="surname" value="{{ old('surname') }}" placeholder="Enter surname" autofocus>
                            </div>

                            <div class="form-group">
                                <label class="fieldlabels">Gender *</label>
                                <select class="form-control" name="gender" id="gender" value="{{ old('gender') }}" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                    <option value="">-- Select your gender --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Non-binary">Non-binary</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="fieldlabels">Phone number *</label>
                                <input id="phone_number" type="text" name="phone_number" value="{{ old('phone_number') }}" placeholder="Enter phone number" autofocus>
                                <p style="font-size: smaller;">e.g.: 600000001</p>
                            </div>

                            <div class="form-group">
                                <!-- <label class="fieldlabels">Address</label> -->
                                <input id="address" type="hidden" name="address" value="-" placeholder="Enter address" autofocus>
                            </div>

                            <div class="form-group">
                                <label class="fieldlabels">Department *</label>
                                <select class="form-control" name="department" id="department" value="{{ old('department') }}" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                    <option value="">-- Select your department --</option>
                                    @if(count($department_data)!=0)
                                    @foreach($department_data as $department)
                                    <option value="{{$department->department_id}}">{{$department->department_name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>

                        </div>

                        <input type="button" name="next" class="next action-button" value="Submit" />
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="py-2 pb-4">

                                By clicking the 'I UNDERSTAND' button, you confirm that the PERSONAL INFORMATION you have provided is correct and accurate.
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



<!-- Modal -->
<div class="modal fade" id="research_project" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="research_projectLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-bottom">
        <div class="modal-content" style="border-radius: 20px;">
            <div class="modal-header no-border">
                <h2 class=" fs-title modal-title" id="research_projectLabel"><b>Research project</b></h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->

                <button type="button" class="close round-button" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body no-border">
                <form id="msform" method="POST" action="/research_project" data-netlify-recaptcha="true" data-netlify="true">
                    @csrf

                    <fieldset>
                        <div class="form-card">

                            <div class="form-group">
                                <label class="fieldlabels">Title</label>

                                <select class="form-control" name="title" id="title" value="{{ old('title') }}" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                    @if(Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->position_id) === '5')
                                    <option value="">-- Select your suppervisor title --</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Prof">Prof</option>
                                    @else
                                    <option value="N/A" selected>N/A</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="fieldlabels">Supervisor</label>
                            @if(Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->position_id) === '5')
                            <input id="supervisor" type="text" name="supervisor" value="{{ old('supervisor') }}" placeholder="Enter supervisor" autofocus>
                            @else
                            <input id="supervisor" type="text" name="supervisor" value="N/A" placeholder="Enter supervisor" autofocus readonly>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="fieldlabels">Supervisor email address</label>
                            @if(Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->position_id) === '5')
                            <input id="supervisor" type="email" name="supervisor_email" value="{{ old('supervisor') }}" placeholder="Enter email address" autofocus>
                            @else
                            <input id="supervisor" type="email" name="supervisor_email" value="{{Auth::user()->email}}" placeholder="Enter email address" autofocus readonly>
                            @endif
                        </div>


                        <div class="form-group">
                            <label class="fieldlabels">Research title</label>
                            @if(Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->position_id) === '5')
                            <textarea id="research_focus" type="text" name="research_focus" value="{{ old('research_focus') }}" autofocus rows="3"></textarea>
                            @else
                            <textarea id="research_focus" type="text" name="research_focus" value="N/A" autofocus rows="3" readonly>N/A</textarea>
                            @endif
                        </div>



                        <p class="fieldlabels text-dark py-3">Assets can be crucial to your current research, and having access to the right resources can make all the difference. SciAssetHub was developed to help researchers at the University of the Western Cape access the assets they need more efficiently. In order to receive notifications about assets related to specific topics, such as chemicals, reagents, and equipment, you need to select the assets that are relevant to your current research.</p>


                        <div class="float-left pt-2">



                            <label class="img-btn">
                                <input type="radio" name="topic" value="Chemical" checked>
                                <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1677178953/Eduassethub/All_images/home_image_jl917q.jpg" alt="chemical">
                                <div class="pt-2">Chemical</div>
                            </label>


                            <label class="img-btn">
                                <input type="radio" name="topic" value="Equipment">
                                <img src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1679328407/Eduassethub/All_images/Lab_wkrwh9.jpg" alt="equipment">
                                <div class="pt-2">Equipment</div>
                            </label>

                        </div>
                        <br /><br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <input type="button" name="next" class="next action-button" value="Submit" />
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="py-2 pb-4">

                                By clicking the 'I UNDERSTAND' button, you confirm that the RESEARCH PROJECT you have provided is correct and accurate.
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



<!-- Modal -->
<div class="modal fade" id="change_password" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="change_passwordLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-bottom">
        <div class="modal-content" style="border-radius: 20px;">
            <div class="modal-header no-border">
                <h2 class=" fs-title modal-title" id="change_passwordLabel"><b>Change password</b></h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->

                <button type="button" class="close round-button" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body no-border">
                <form id="msform" method="POST" action="/change_password" data-netlify-recaptcha="true" data-netlify="true">
                    @csrf

                    <fieldset>
                        <div class="form-group">
                            <label class="fieldlabels">Old password</label>
                            <input id="old_password" type="password" name="old_password" value="{{ old('old_password') }}" placeholder="Enter old password" autofocus>
                        </div>

                        <div class="form-group">
                            <label class="fieldlabels">New password</label>
                            <input id="new_password" type="password" name="new_password" value="{{ old('new_password') }}" placeholder="Enter new password" autofocus>
                        </div>


                        <input type="button" name="next" class="next action-button" value="Submit" />
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="py-2 pb-4">

                                By clicking the 'I UNDERSTAND' button, you confirm that the RESEARCH PROJECT you have provided is correct and accurate.
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


<!-- Modal -->
<div class="modal fade" id="delete_account" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="delete_accountLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-bottom">
        <div class="modal-content" style="border-radius: 20px;">
            <div class="modal-header no-border">
                <h2 class=" fs-title modal-title" id="delete_accountLabel"><b>Change password</b></h2>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->

                <button type="button" class="close round-button" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body no-border">
                You are about to delete your SciAssetHub account. It's important to consider that selecting this action will lead to the complete removal of your access to the platform, along with the deletion of all the information and data associated with your account stored on this site. This includes all records, content, and personal details (such as first name, surname, gender, phone number, department) that you may have shared or accumulated during your use of our services.
                <br />
                It's recommended that you carefully contemplate the implications of this decision. Deleting your SciAssetHub account is irreversible, and once completed, there's no way to recover the data or reinstate your access. If you have concerns about privacy, security, or future usage of the platform, we advise reviewing our terms of service and privacy policy to gain a comprehensive understanding of the actions being taken.
                <br />
                Please note that if there are any pending requests, the system will not allow you to delete your SciAssetHub account.
                <br />
                <br />

                Are you still sure you want to proceed with deleting your account?

                <br />
                <br />

                <a href="/profile" type="submit" class="btn btn-primary float-left no-radius" style="float: left!important;">No</a>

                <a href="/delete_account" type="submit" class="btn btn-danger float-right no-radius">Yes</a>

            </div>
        </div>
    </div>
</div>


@endsection