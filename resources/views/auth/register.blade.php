@extends('layouts.style_guest')

@section('content')
<div class="container py-5">
    <div class="row py-4 d-flex align-items-center justify-content-center">
        <div class="col-lg-6 col-md-7 col-sm-12">
            <div class="card ">
                <div class="card-body">
                    <div class="col-lg-12">

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
                    </div>

                    <form id="msform" method="POST" action="{{ route('register') }}">

                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <div>
                                        <h2 class="fs-title"><b>Create account</b></h2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="fieldlabels">Email: <b class="text-danger">*</b></label>
                                    <p style="font-size: x-small;">Please use your university-issued email address (e.g., students: 'username@myuwc.ac.za', staff: 'username@uwc.ac.za').</p>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Enter email" autofocus>
                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Position: <b class="text-danger">*</b></label>
                                    <select class="form-control" name="position" id="exampleFormControlSelect1" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                        <option value="">-- Select your title or position --</option>
                                        @if(count($position_data) !=0)
                                        @foreach($position_data as $position)
                                        <option value="{{$position->position_id}}">{{$position->position_name}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <small>Error Message</small>

                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">University: <b class="text-danger">*</b></label>
                                    <select class="form-control" name="university" id="exampleFormControlSelect1" onfocus='this.size=6;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                        <option value="">-- Select your university --</option>
                                        @if(count($universities_data)!=0)
                                        @foreach($universities_data as $university)
                                        @if($university->university_name == 'University of the Western Cape')
                                        <option value="{{$university->university_id}}">{{$university->university_name}}</option>
                                        @else
                                        <option disabled>{{$university->university_name}}</option>
                                        @endif
                                        @endforeach
                                        @endif
                                        <option disabled>Other</option>

                                    </select>
                                    <small>Error Message</small>

                                </div>

                                <div class="form-group">
                                    <label class="fieldlabels">Password: <b class="text-danger">*</b></label>
                                    <p style="font-size: x-small;">Please create a password following these guidelines: minimum 8 characters, at least 1 uppercase letter, 1 lowercase letter, and 1 number.</p>
                                    <input type="password" name="password" class="@error('pwd') is-invalid @enderror" placeholder="Create Password" />
                                    <small>Error Message</small>

                                </div>
                            </div>

                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="py-2 pb-4">
                                    <div class="pb-4">
                                        <h2 class="fs-title"><b>Acknowledgement of information inserted</b></h2>
                                    </div>
                                    By clicking 'I UNDERSTAND' button, you confirm that the information you provided is correct and accurate for account creation.
                                </div>
                                <br><br>
                            </div>
                            <a href="/register"  type="submit" class="btn btn-danger float-left no-radius">Cancel</a>

                            <button type="submit" class="btn btn-secondary float-right no-radius">I UNDERSTAND</button>
                        </fieldset>
                    </form>

                </div>
            </div>

            <div class="my-4 rounded">
                <center>
                  <p style="font-size: small; padding-bottom: 0px    ">  Don't have an account? <a href="/login"><b style="color:dodgerblue;">Create account</b></a></p>
                </center>
            </div>

        </div>
    </div>
</div>



@endsection