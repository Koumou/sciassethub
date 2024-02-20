@extends('layouts.style_guest')

@section('content')
<div class="container py-5">

  <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-white">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Asset requested</li>
      </ol>
    </nav>
  </div>

  <?php
  $this_user_assets_added = $all_asset_available->where('user_reference', Illuminate\Support\Facades\Auth::user()->email);
  ?>



  @if($asset_requested_display_to_owner->contains('is_request_approved', '-'))
  <table>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Asset image</th>
        <th scope="col">Asset name</th>
        <th scope="col">Qty rqted</th>
        <th scope="col">Sent</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    <tbody>
      <?php
$no = 0;
      ?>

      @foreach($asset_requested_display_to_owner->where('is_request_approved', '-') as $key=>$asset_request_ref)
      <?php
      $asset_reference = $all_asset_available->where('asset_id', $asset_request_ref->asset_request_id);
      ?>

      @foreach($asset_reference as $key=>$asset_request_)

      <?PHP
      $asset_name_decrypt = Illuminate\Support\Facades\Crypt::decrypt($asset_request_->asset_name);

      $asset_requested_track = $asset_requested_display_to_owner->where('asset_request_id', $asset_request_->asset_id)
        ->where('is_request_approved', '-')
        ->unique('requester_id')
        ->all();
      ?>

      @if(count($asset_requested_track) != 0)

      <tr class="py-0 my-0" style="background-color: yellow;">

        <td data-label="#">{{++$no}}</td>

        @foreach($asset_reference as $asset_ref_)

        <td data-label="Asset image"> <img src="{{asset($asset_request_->asset_image)}}" class="asset_requested_preview"></td>

        <td data-label="Sent"><small>{{gzuncompress(Illuminate\Support\Facades\Crypt::decrypt($asset_ref_->asset_name))}}</small></td>
        @endforeach


        <td data-label="Sent"><small>{{$asset_request_ref->quantity}}</small></td>

        <td data-label="Sent"><small>{{\App\Providers\AppServiceProvider::difference_between_timestamp($asset_request_ref->created_at)}}</small></td>

        <td data-label="Action">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


            @if($asset_request_ref->is_request_approved == '-')
            <a href="/dashboard/asset_requested/update/{{$asset_request_ref->id}}/{{'accept'}}" class="btn btn-secondary btn-sm mr-2">Accept</a>
            <a href="/dashboard/asset_requested/update/{{$asset_request_ref->id}}/{{'reject'}}" class="btn btn-danger btn-sm mr-2">Reject</a>
            @else
            <button class="btn btn-secondary btn-sm mr-2" aria-disabled="true" disabled>Was {{$asset_request_ref->is_request_approved}}ed</button>

            @endif
          </div>
        </td>
      </tr>

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