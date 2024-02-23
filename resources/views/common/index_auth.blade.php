@extends('layouts.style_guest')

@section('content')

<div class="container py-5">

    <div class="pt-4">
        <p>

            @if((Auth::user()->gender == '-'))
            Welcome to SciAssetHub platform 👋 !
            @else
            Good day {{strtok(Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->firstname), " ")}} 👋 !

            @endif
        </p>
    </div>

    @if(Auth::user()->gender == '-')

    <div class="pt-4">
        <p>
            We're excited to have you as a new user. To unlock your account and get started.
        </p>
        <p>
            Please click on the profile icon in the top right corner of the screen and fill in the remaining information needed.
            Alternatively, you can use the following link (<a href="profile">https://sciassethub.com/profile</a>) to access the page and complete the required information.
        </p>
        <p>
            This will help us get to know you better and ensure that you have a seamless experience on our platform.
            <br />
            Thank you for joining us and we hope you enjoy using our service.
        </p>
    </div>
    @else
    <div class="pt-4">

        @if (Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->position_id) != 5)

        <div class="order-card auto-fill">
            <?php
            //    dd($research_project_data);
            ?>


            <div class="panel panel-default card-input card">

                <div class="card-body border-0">

                    <h5 class="text-dark my-1 pt-1 pb-3 mx-0">
                        <b>Asset</b>
                    </h5>
                    <div>
                        <div>
                            View assets
                        </div>
                        <div>
                            Search for asset
                        </div>
                        <div>
                            Request asset
                        </div>
                        <div>
                            Rate and leave comments
                        </div>

                    </div>
                    <div class="pt-5 pb-3">
                        <a href="/" class="btn btn-primary btn btn-block radius">
                            {{ __('Open') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="panel panel-default card-input card">

                <div class="card-body border-0">

                    <h5 class="text-dark my-1 pt-1 pb-3 mx-0">
                        <b>Rent space</b>
                    </h5>
                    <div>
                        <div>
                            View available space
                        </div>
                        <div>
                            Search
                        </div>
                        <div>
                            Request to rent space for cells.
                        </div>
                        <br />
                    </div>
                    <div class="pt-5 pb-3">
                        <a href="/rent_space_available" class="btn btn-primary btn btn-block radius">
                            {{ __('Open') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="panel panel-default card-input card">

                <div class="card-body border-0">

                    <h5 class="text-dark my-1 pt-1 pb-3 mx-0">
                        <b>AddNow</b>
                    </h5>
                    <div>
                        <div>
                            Manage assets
                        </div>
                        <div>
                            Manage available incubator
                        </div>
                        <br />
                        <br />
                    </div>
                    <div class="pt-5 pb-3">
                        <a href="/dashboard/my_asset" class="btn btn-primary btn btn-block radius">
                            {{ __('Open') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @elseif (Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->position_id) === '5')

        @if ($research_project_data === NULL)
        <div class="pt-4">
            <p>
                You're almost there!
            </p>
            <p>
                In adherence to SciAssetHub policy, system usage is restricted to students under the supervision of academic staff at the University of the Western Cape. You are required to fill the information about your supervisor by clicking on the profile icon in the top right corner of the screen and fill in the "Research Project" section.
                Alternatively, you can use the following link (<a href="profile">https://sciassethub.com/profile</a>) to access the page and complete the required information. </p>

            <p>
                <br />
                Thank you for your patiente.
            </p>
        </div>
        @else ($research_project_data !== NULL)
        <?php


        ?>
        @if($research_project_data->supervisor_email != '-')
        <div class="order-card auto-fill">

            <div class="panel panel-default card-input card">

                <div class="card-body border-0">

                    <h5 class="text-dark my-1 pt-1 pb-3 mx-0">
                        <b>Asset</b>
                    </h5>
                    <div>
                        <div>
                            View assets
                        </div>
                        <div>
                            Search for asset
                        </div>
                        <div>
                            Request asset
                        </div>
                        <div>
                            Rate and leave comments
                        </div>

                    </div>
                    <div class="pt-5 pb-3">
                        <a href="/" class="btn btn-primary btn btn-block radius">
                            {{ __('Open') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="panel panel-default card-input card">

                <div class="card-body border-0">

                    <h5 class="text-dark my-1 pt-1 pb-3 mx-0">
                        <b>Rent space</b>
                    </h5>
                    <div>
                        <div>
                            View available space
                        </div>
                        <div>
                            Search
                        </div>
                        <div>
                            Request to rent space for cells.
                        </div>
                        <br />
                    </div>
                    <div class="pt-5 pb-3">
                        <a href="/rent_space_available" class="btn btn-primary btn btn-block radius">
                            {{ __('Open') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="pt-4">
            <p>
                You're almost there! Just one step remaining to unlock your account.
            </p>
            <p>
                In adherence to SciAssetHub policy, system usage is restricted to students under the supervision of academic staff at the University of the Western Cape. Based on the details you provided about your supervisor, an email has been sent to your supervisor for confirmation. Upon validation, your account will be unlocked.</p>

            <p>
                <br />
                Thank you for your patiente.
            </p>
        </div>
        @endif

        @endif
        @endif

    </div>
    @endif
</div>


@endsection