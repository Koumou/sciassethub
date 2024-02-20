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



  @if(count($all_space_requested_owner) !=0)
  @if($all_space_requested_owner->contains('is_request_approved', '-'))
  <table>
    <thead>
      <tr>
        <!-- <th scope="col">Asset image</th> -->
        <!-- <th scope="col">Space ref</th> -->
        <th scope="col">Requested check-in</th>
        <th scope="col">Requested check-out</th>
        <th scope="col">Requested </th>
        <th scope="col">Feedback</th>
      </tr>
    </thead>

    <tbody>
      <?php
      dd($all_space_requested_owner);
      ?>
      @foreach($all_space_requested_owner as $space_request_)
      <tr class="py-0 my-0">
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
        <td data-label="Sent"><small>{{\App\Providers\AppServiceProvider::difference_between_timestamp($space_request_->created_at)}}</small></td>
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
      @endif


      <tr>
    </tbody>
  </table>

  @elseif(count($all_space_requested_requested) !=0)

  @if($all_space_requested_requested->contains('is_request_approved', '-'))
  <table>
    <thead>
      <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">Requested check-in</th>
        <th scope="col">Requested check-out</th>
        <th scope="col">Requested </th>
        <th scope="col">Feedback</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $waiting_list = $all_space_requested_requested->where('is_request_approved', "-");
      ?>
      @foreach($waiting_list->sortByDesc('updated_at') as $key=>$space_request_)
      <tr class="py-0 my-0">
        <!-- <td data-label="#"><small>{{++$key}}</small></td> -->
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
      @else
      <div>
        <center>
          <img img src="{{asset('empty-box.png')}}" class="m-0 pt-4" alt="Logo" width="45%">
          <div class="pt-0 p-0">Nothing found!</div class="mt-0 p-0">
        </center>
      </div>

      @endif

      <tr>
    </tbody>
  </table>
  @elseif(count($all_space_requested_owner) ==0)
  <center>
    <img img src="{{asset('empty-box.png')}}" class="m-0 pt-4" alt="Logo" width="45%">
    <div class="pt-0 p-0">Nothing found!</div class="mt-0 p-0">
  </center>
  @elseif(count($all_space_requested_requested) == 0)
  <center>
    <img img src="{{asset('empty-box.png')}}" class="m-0 pt-4" alt="Logo" width="45%">
    <div class="pt-0 p-0">Nothing found!</div class="mt-0 p-0">
  </center>
  @else
  <center>
    <img img src="{{asset('empty-box.png')}}" class="m-0 pt-4" alt="Logo" width="45%">
    <div class="pt-0 p-0">Nothing found!</div class="mt-0 p-0">
  </center>

  @endif

</div>
@endsection