@extends('layouts.style_guest')

@section('content')
<div class="container py-5">
  <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-white">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard
          </a></li>
        <li class="breadcrumb-item active" aria-current="page">View space requested</li>
      </ol>
    </nav>
  </div>



  @if(count($all_space_requested_owner->where('is_request_approved', '-')) !=0)
  <table>
    <thead>
      <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">Requested check-in</th>
        <th scope="col">Requested check-out</th>
        <th scope="col">Sent</sub></th>
        <th scope="col">Feedback</th>
      </tr>
    </thead>

    <tbody>
      @foreach($all_space_requested_owner as $key=>$space_request_)

      <?php
      // dd($space_request_);

      ?>
      <tr class="py-0 my-0">
        <!-- <td data-label="#"><small>{{++$key}}</small></td> -->
        <td data-label="Requested check-in">
          <small>
            <?php echo date('F d, Y', strtotime($space_request_->date_start)) ?>
          </small>
        </td>

        <td data-label="Requested check-out	">
          <small>
            <?php echo date('F d, Y', strtotime($space_request_->date_end)) ?>
          </small>
        </td>

        <?php

        $track_size_requested = $all_available_space_->where('rent_place_id', $space_request_->space_request_id);

        ?>



        <td data-label="Sent"><small>{{\App\Providers\AppServiceProvider::difference_between_timestamp($space_request_->created_at)}}</small></td>
        <!-- <td data-label="Supervisor approval"><small>{{$space_request_->space_request_id}}</small></td> -->
        <td data-label="Feedback">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


            @if($space_request_->is_request_approved == '-')
            <a href="/dashboard/space_requested/update/{{$space_request_->id}}/Accept" class="btn btn-secondary btn-sm mr-2">Accept</a>
            <a href="/dashboard/space_requested/update/{{$space_request_->id}}/Reject" class="btn btn-danger btn-sm mr-2">Reject</a>
            @else
            <button class="btn btn-secondary btn-sm mr-2" aria-disabled="true" disabled>Was {{$space_request_->is_request_approved}}ed</button>

            @endif
          </div>
        </td>
      </tr>
      @endforeach


      <tr>
    </tbody>
  </table>

  @elseif(count($all_space_requested_requested->where('is_request_approved', '-')) !=0)
  <table>
    <thead>
      <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">Requested check-in</th>
        <th scope="col">Requested check-out</th>
        <th scope="col">CO<sup>2</sup></th>
        <th scope="col">Requested </th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    <tbody>
      @foreach($all_space_requested_requested->sortByDesc('updated_at') as $key=>$space_request_)
      <tr class="py-0 my-0">
        <!-- <td data-label="Feedback">{{++$key}}</td> -->
        <td data-label="Supervisor approval"><small>{{$space_request_->space_request_id}}</small></td>
        <td data-label="Supervisor approval">
          <small>
            <?php echo date('F d, Y', strtotime($space_request_->date_start)) ?>
          </small>
        </td>

        <td data-label="Supervisor approval">
          <small>
            <?php echo date('F d, Y', strtotime($space_request_->date_end)) ?>
          </small>
        </td>

        <?php

        $track_size_requested = $all_available_space_->where('rent_place_id', $space_request_->space_request_id);

        ?>



        <td data-label="Sent"><small>{{\App\Providers\AppServiceProvider::difference_between_timestamp($space_request_->created_at)}}</small></td>
        <td data-label="Feedback">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


            @if($space_request_->is_request_approved == '-')
            <button class="btn btn-warning btn-sm mr-2" aria-disabled="true" disabled>Waiting ...</button>
            @else
            <button class="btn btn-secondary btn-sm mr-2" aria-disabled="true" disabled>Was {{$space_request_->is_request_approved}}ed</button>
            @endif
          </div>
        </td>
      </tr>
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