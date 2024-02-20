@extends('layouts.style_guest')

@section('content')
<div class="container py-5">

  <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-white">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">History</li>
      </ol>
    </nav>
  </div>

  <?php
  $this_user_assets_added = $asset_requested_display->where('is_request_approved', '-');
  $space_requested_requested_current_user = $all_space_requested_requested->where('requester_id', Illuminate\Support\Facades\Auth::user()->email);
  $all_space_requested_requested_current_user_ = $all_space_requested_requested->where('is_request_approved', '-');

  // dd($this_user_assets_added,$space_requested_requested_current_user,$all_space_requested_requested_current_user_);
  ?>


  @if(count($asset_requested_display) == count($this_user_assets_added) && count($all_space_requested_requested_current_user_) == count($space_requested_requested_current_user))

  <center>
    <img img src="{{asset('empty-box.png')}}" class="m-0 pt-4" alt="Logo" width="45%">
    <div class="pt-0 p-0">Nothing found!</div class="mt-0 p-0">
  </center>

  @elseif(count($space_requested_requested_current_user) == 0)
  <center>
    <img img src="{{asset('empty-box.png')}}" class="m-0 pt-4" alt="Logo" width="45%">
    <div class="pt-0 p-0">Nothing found!</div class="mt-0 p-0">
  </center>
  @else
  @if ($asset_requested_display->filter(function ($item) {
    return $item->is_request_approved === 'accept' || $item->is_request_approved === 'reject';
})->count() !== 0) 

  <div class="py-2">
    <h6><b><small><b>All the asset history</b></small></b></h6>
  </div>


  <table>
    <thead>
      <tr>
      <tr>
      <th scope="col">Asset Image</th>
        <th scope="col">Asset name</th>
        <th scope="col">Qty requested</th>
        <th scope="col">Feedback</th>
        <th scope="col">Received</th>

      </tr>
    </thead>
    <tbody>
      @foreach($asset_requested_display->sortByDesc('updated_at') as $asset_request_ref)

      <?php
      $asset_reference = $all_asset_available->where('asset_id', $asset_request_ref->asset_request_id);
      ?>

      @foreach($asset_reference as $asset_request_)

      <?PHP
      $asset_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_request_->asset_name);
      $asset_owner_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_request_->asset_name);
      $asset_requested_track = $asset_requested_by_requester->where('asset_request_id', $asset_request_->asset_id)
        ->where('is_request_approved', '!=', '-')
        ->all();
      ?>

      @if(count($asset_requested_track) == 1)
      @foreach($asset_requested_track as $display_asset_requested)
      <?php
      $user_requested_asset = $all_users->where('email', $display_asset_requested->asset_owner_ref);
      ?>

      @foreach($user_requested_asset as $user_detail)

      <?php
      $user_requester_position = Illuminate\Support\Facades\Crypt::decrypt($user_detail->position_id);
      ?>

      <tr class="py-0 my-0">
        <td data-label="Asset image"> <img src="{{asset($asset_request_->asset_image)}}" class="asset_requested_preview"></td>
        <!-- <td data-label="Asset ref"><small>{{$asset_request_->asset_reference}}</small></td> -->
        <td data-label="Asset name"><small>{{gzuncompress($asset_name_decrypt)}}</small></td>
        <td data-label="Qty requested"><small>{{$display_asset_requested->quantity}}</small></td>
        <td data-label="Feedback">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            @if($asset_request_ref->is_request_approved == '-')
            <button class="btn btn-warning btn-sm mr-2" aria-disabled="true" disabled>Waiting ...</button>
            @else
            <button class="btn btn-secondary btn-sm mr-2" aria-disabled="true" disabled>Was {{$asset_request_ref->is_request_approved}}ed</button>
            @endif
          </div>
        </td>
        <td data-label="Feedback received"><small>{{\App\Providers\AppServiceProvider::difference_between_timestamp($asset_request_ref->updated_at)}}</small></td>
      </tr>
      @endforeach
      @endforeach
      @endif
      @endforeach
      @endforeach

      <tr>
    </tbody>
  </table>@endif



  @if ($space_requested_requested_current_user->filter(function ($item) {
    return $item->is_request_approved === 'Accept' || $item->is_request_approved === 'Reject';
})->count() != 0) 
  <div class="py-2">
    <h6><b><small><b>All the space history</b></small></b></h6>
  </div>

  <table>
    <thead>
      <tr>
      <!-- <th scope="col">#</th> -->
        <th scope="col">Space image</th>
        <th scope="col">Storage brand</th>
        <th scope="col">Temperature range</th>
        <th scope="col">Feedback</th>
        <th scope="col">Received</th>

      </tr>
    </thead>
    <tbody>
      @foreach($space_requested_requested_current_user as $key=>$space_request_ref)

      <?php
      $space_reference = $all_available_space_->where('rent_place_id', $space_request_ref->space_request_id);
      ?>


      @foreach ($space_reference as $space_index)

      <tr class="py-0 my-0">
        <td data-label="Space image"> <img src="{{asset($space_index->frontal_img)}}" class="asset_requested_preview"></td>

        <td data-label="Asset ref"><small>{{gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($space_index->type_storage))}} brand: {{gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($space_index->storage_brand))}}</small></td>
        <td data-label="Asset ref"><small>{{gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($space_index->temperature_range_l))}} ~ {{gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($space_index->temperature_range_h))}}</small></td>


        <td data-label="Feedback">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            @if($space_request_ref->is_request_approved == '-')
            <button class="btn btn-warning btn-sm mr-2" aria-disabled="true" disabled>Waiting ...</button>
            @else
            <button class="btn btn-secondary btn-sm mr-2" aria-disabled="true" disabled>Was {{$space_request_ref->is_request_approved}}ed</button>
            @endif
          </div>
        </td>
        <td data-label="Feedback received"><small>{{\App\Providers\AppServiceProvider::difference_between_timestamp($space_request_ref->updated_at)}}</small></td>

      </tr>

      @endforeach
      @endforeach

      <tr>
    </tbody>
  </table>
  @endif
  @endif
</div>
@endsection