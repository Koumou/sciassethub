@extends('layouts.style_guest')

@section('content')
<div class="container py-5">

    <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">My asset (folder)</li>
            </ol>
        </nav>
    </div>

    <div class="order-card auto-fill pt-2">

        <div class="panel panel-default card-input">
            <div class="card-body border-0 px-0">
                <div class="panel-heading">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            <i class="fa fa-folder mr-4" style="font-size:24px"></i> <b>Chemical</b>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/dashboard/my_asset/category_equipment/form_add_chemical"><i class="fa fa-plus mr-3"></i>Add</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/dashboard/my_asset/category_chemical"><i class="fa fa-eye mr-3"></i>View</a>
                            <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-snowflake mr-3"></i>Froze folder</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default card-input">
            <div class="card-body border-0 px-0">
                <div class="panel-heading">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            <i class="fa fa-folder mr-4" style="font-size:24px"></i> <b>Equipment</b>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/dashboard/my_asset/category_equipment/form_add_equipment"><i class="fa fa-plus mr-3"></i>Add</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/dashboard/my_asset/category_equipment"><i class="fa fa-eye mr-3"></i>View</a>
                            <!-- <a class="dropdown-item" href="#"><i class="fa fa-snowflake mr-3"></i>Froze folder</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="panel panel-default card-input">
            <div class="card-body border-0 px-0">
                <div class="panel-heading">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            <i class="fa fa-folder mr-4" style="font-size:24px"></i> <b>Space to rent</b>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/dashboard/my_asset/category_equipment/form_add_space_rent"><i class="fa fa-plus mr-3"></i>Add</a>
                            <!-- <a class="dropdown-item" href="#"><i class="fa fa-eye mr-3"></i>View</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-snowflake mr-3"></i>Froze folder</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection