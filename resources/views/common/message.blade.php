@extends('layouts.style_guest')

@section('content')
<div class="container py-5">

  <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-white">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Message</li>
      </ol>
    </nav>
  </div>

  <?php
  $this_user_assets_added = $all_asset_available->where('user_reference', Illuminate\Support\Facades\Auth::user()->email);


  // dd($all_asset_available, Illuminate\Support\Facades\Auth::user()->email, $this_user_assets_added);
  ?>

  @if(count($all_message) != 0)
  <table>
    <thead>
      <tr>
        <th scope="col" class="ellipsis">Sent on</th>
        <th scope="col" class="ellipsis">Sender</th>
        <th scope="col" class="ellipsis">Subject</th>
      </tr>
    </thead>
    <tbody>
      @foreach($all_message as $messages)
      <tr class="py-0 my-0">
        <td class="ellipsis" data-label="Sent on"><small>{{$messages->created_at}} ({{\App\Providers\AppServiceProvider::difference_between_timestamp($messages->created_at)}})</small></td>
        <td class="ellipsis" data-label="Sender"><small>{{$messages->sender}}</small></td>
        <td class="ellipsis" data-label="Subject"><small>{{$messages->subject}}</small></td>
        <?php
        $paraph = explode("n_", $messages->content);
        ?>
        <td class="ellipsis"><small><a data-toggle="modal" data-target="#message_display" data-id="{{$messages->subject}}" data-id2a="{{$paraph[0]}}" data-id2b="{{$paraph[1]}}" data-id2c="{{$paraph[2]}}" data-id3="{{$messages->created_at}} ({{\App\Providers\AppServiceProvider::difference_between_timestamp($messages->created_at)}})" title="{{$paraph[0]}}{{$paraph[1]}}{{$paraph[2]}}" class="open-AddBookDialog pointer">open <i class="fa fa-angle-double-right"></i></a>
          </small></td>
        <div class="modal fade border-0 no-border" id="message_display" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="message_displayLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="message_displayLabel"><b id="bookId"></b></h5>
                <button type="button" class="close round-button" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>

              </div>
              <div class="modal-body pb-4">
                <p class="p3-4"><small class="float-right" id="bookId3"></small></p>
                <div id="bookId2a"></div>
                <div id="bookId2b"></div>
                <div id="bookId2c"></div>

              </div>
            </div>
          </div>
        </div>
      </tr>

      @endforeach

      <tr>
    </tbody>
  </table>
  @else
  <center>
    <img img src="{{asset('no-messages.png')}}" class="m-0 pt-4" alt="Logo" width="45%">
    <div class="pt-0 p-0">No Messages here yet!</div class="mt-0 p-0">
  </center>


  @endif

</div>

<script>
  $(document).ready(function() {
    $(".open-AddBookDialog").click(function() {
      $('#bookId').text($(this).data('id'));
      $('#bookId2a').text($(this).data('id2a'));
      $('#bookId2b').text($(this).data('id2b'));
      $('#bookId2c').text($(this).data('id2c'));

      $('#bookId3').text($(this).data('id3'));
      $('#addBookDialog').modal('show');
    });
  });
</script>
@endsection