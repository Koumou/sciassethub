@extends('layouts.style_guest')

@section('content')
<div class="container py-5">

  <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-white">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard
          </a></li>
        <li class="breadcrumb-item active" aria-current="page">View asset requested</li>
      </ol>
    </nav>
  </div>

  <?php
  $this_user_assets_added = $all_asset_available->where('user_reference', Illuminate\Support\Facades\Auth::user()->email);



  
  ?>

  @if($asset_requested_by_requester->contains('is_request_approved', '-') && count($asset_requested_by_requester->where('asset_owner_ref', '-')) == 0 )
  <table>
    <thead>
      <tr>
      <th scope="col">#</th>
        <th scope="col">Asset image</th>
        <!-- <th scope="col">Asset ref</th> -->
        <th scope="col">Asset name</th>
        <th scope="col">Qty requested</th>
        <th scope="col">Requested</th>
        <!-- <th scope="col">Amt Rqted</th> -->
        <th scope="col">Feedback</th>
      </tr>
    </thead>

    <tbody>

      <?php

      ?>
      @foreach($asset_requested_by_requester as $asset_request_ref)

      <?php

      $asset_reference = $all_asset_available->where('asset_id', $asset_request_ref->asset_request_id);



      Illuminate\Support\Facades\Cache::put('asset_reference_requested', $asset_reference, $minutes = 2880);

      ?>

      @foreach($asset_reference as $asset_request_)

      <?PHP

// dd($all_asset_available,$asset_request_ref->asset_request_id,$asset_reference,$asset_request_);


      $asset_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_request_->asset_name);

      $asset_owner_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_request_->asset_name);


      $asset_requested_track = $asset_requested_by_requester->where('asset_request_id', $asset_request_->asset_id)
        ->where('is_request_approved', '-')
        ->all();

      // dd($asset_requested_track);

      ?>



      @if(count($asset_requested_track) == 1)
      @foreach($asset_requested_track as  $key=>$display_asset_requested)
      <?php

// dd($display_asset_requested);

      // $user_requested_asset = $all_users->where('email', $display_asset_requested->asset_owner_ref);
      $user_requested_asset = $all_users->where('id', $display_asset_requested->asset_request_id);

// dd($all_users,$display_asset_requested);


      ?>

      @foreach($user_requested_asset as $user_detail)

      <?php
      // dd($asset_reference);
      $user_requester_position = Illuminate\Support\Facades\Crypt::decrypt($user_detail->position_id);

      ?>

      <tr class="py-0 my-0">
      <td data-label="Asset image">{{++$key}}</td>
        <td data-label="Asset image"> <img src="{{asset($asset_request_->asset_image)}}" class="asset_requested_preview"></td>
        <!-- <td data-label="Supervisor approval"><small>{{$asset_request_->asset_reference}}</small></td> -->
        <td data-label="Asset name"><small>{{gzuncompress($asset_name_decrypt)}}</small></td>
        <td data-label="Asset name"><small>{{$display_asset_requested->quantity}}</small></td>

        <td data-label="Sent"><small>{{\App\Providers\AppServiceProvider::difference_between_timestamp($asset_request_ref->created_at)}}</small></td>


        <td data-label="Feedback">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


            @if($asset_request_ref->is_request_approved == '-')
            <button class="btn btn-warning btn-sm mr-2" aria-disabled="true" disabled>Waiting ...</button>
            @else
            <button class="btn btn-secondary btn-sm mr-2" aria-disabled="true" disabled>Was {{$asset_request_ref->is_request_approved}}ed</button>
            @endif
          </div>
        </td>
      </tr>
      @endforeach
      @endforeach
      @endif
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