@extends('layouts.style_guest')

@section('content')
<div class="container py-5">

  <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-white">
      <li class="breadcrumb-item"><a href="/my_student_supervision">My student</a></li>
        <li class="breadcrumb-item active" aria-current="page">Requested asset</li>
      </ol>
    </nav>
  </div>

  <?php
  $this_user_assets_added = $all_asset_available->where('user_reference', Illuminate\Support\Facades\Auth::user()->email);
  ?>




  <?php
  $student_reference_folder = $asset_requested_display_to_supervisor->where('requester_id', $dcrypted_student_reference);
  $need_approval = $student_reference_folder->where('is_request_approved', Illuminate\Support\Facades\Auth::user()->email);
  ?>


  @if(count($need_approval) != 0)

  <div class="pb-4">
    <small>
      Listed below are the assets that were requested by the students you are currently supervising. In order for the requested assets below to be shown to the asset owner, you need to approve them. If you reject the asset, it will be automatically deleted.
    </small>
  </div>

  <table>
    <thead>
      <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">Asset image</th>
        <th scope="col">Asset name</th>
        <th scope="col">Qty rqted</th>
        <th scope="col">Requested</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($need_approval as $key=>$asset_request_ref)
      <?php
      $asset_reference = $all_asset_available->where('asset_id', $asset_request_ref->asset_request_id);
      ?>

      @foreach($asset_reference as $display_asset_requested)

      <?php
      $user_requested_asset = $all_users->where('email', $asset_request_ref->requester_id);
      ?>

      @foreach($user_requested_asset as $user_detail)

      <?php

      $user_requester_position = Illuminate\Support\Facades\Crypt::decrypt($user_detail->position_id);

      $asset_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($display_asset_requested->asset_name);
      ?>

      <tr class="py-0 my-0" style="background-color: yellow;">
        <!-- <td data-label="#"><small>{{++$key}}</small></td> -->
        <td data-label="Asset image"> <img src="{{asset($display_asset_requested->asset_image)}}" class="asset_requested_preview"></td>
        <td data-label="Asset name"><small>{{gzuncompress($asset_name_decrypt)}}</small></td>
        <td data-label="Qty requested"><small>{{$asset_request_ref->quantity}}</small></td>

        @if($user_requester_position == 1)
        <td data-label="Supervisor approval"><small>Lab manager</small></td>
        @elseif($user_requester_position == 2)
        <td data-label="Supervisor approval"><small>Researcher</small></td>
        @elseif($user_requester_position == 3)
        <td data-label="Supervisor approval"><small>Staff</small></td>
        @elseif($user_requester_position == 4)
        <td data-label="Supervisor approval"><small>Student</small></td>
        @endif

        <td data-label="Sent"><small>{{\App\Providers\AppServiceProvider::difference_between_timestamp($asset_request_ref->created_at)}}</small></td>

        <td data-label="Action">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


            @if($asset_request_ref->is_request_approved == Illuminate\Support\Facades\Auth::user()->email)
            <a href="/my_student/{{$asset_request_ref->id}}/{{'proceed'}}" class="btn btn-secondary btn-sm mr-2">Approved</a>
            <a href="/my_student/{{$asset_request_ref->id}}/{{'denied'}}" class="btn btn-danger btn-sm mr-2">Reject</a>
            @else
            <button class="btn btn-secondary btn-sm mr-2" aria-disabled="true" disabled>Was {{$asset_request_ref->is_request_approved}}ed</button>
            @endif
          </div>
        </td>
      </tr>
      @endforeach
      @endforeach

      @endforeach

      <tr>
    </tbody>
  </table>

  @else
  <center>
    <img img src="{{asset('empty-box.png')}}" class="m-0 pt-4" alt="Logo" width="45%">
    <div class="pt-0 p-0">Nothing found!</div class="mt-0 p-0">
  </center>

  @endif

</div>
@endsection