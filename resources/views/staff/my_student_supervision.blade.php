@extends('layouts.style_guest')

@section('content')
<div class="container py-5">

    <div class="col-lg-12 col-md-12 col-sm-12 py-2 px-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item active" aria-current="page">My student</li>
            </ol>
        </nav>

        @if(count($research_project_category) != 0)

        <div class="pb-4">
            <small>
                Listed below are the assets that were requested by the students you are currently supervising. In order for the requested assets below to be shown to the asset owner, you need to approve them. If you reject the asset, it will be automatically deleted.
            </small>
        </div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Student email</th>
                    <th scope="col">Research focus</th>
                    <th scope="col">Research asset category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($research_project_category as $key => $research_project_categories)
                @if($research_project_categories->student_reference != $research_project_categories->should_be_approved_by)
                <tr class="py-0 my-0">
                 
                    <td data-label="Student reference">
                        {{$research_project_categories->student_reference}}
                    </td>
                    <td data-label="Research focus">
                        {{Illuminate\Support\Facades\Crypt::decrypt($research_project_categories->research_focus)}}
                    </td>
                    <td data-label="Research asset category">
                        {{Illuminate\Support\Facades\Crypt::decrypt($research_project_categories->asset_category)}}
                    </td>
                    @if($research_project_categories->supervisor_email == '-')
                    <td data-label="Action">
                        <center>
                            <a href="/supervisor_confirmation/{{Illuminate\Support\Facades\Crypt::encryptString($research_project_categories->should_be_approved_by)}}/{{Illuminate\Support\Facades\Crypt::encryptString($research_project_categories->student_reference)}}" class="btn btn-sm btn-primary">Action</a>
                        </center>
                    </td>
                    @else
                    <td data-label="Action">

                        <?php
                        $student_reference_folder = $asset_requested_display_to_supervisor->where('requester_id', $research_project_categories->student_reference);
                        $need_approval = $student_reference_folder->where('is_request_approved', Illuminate\Support\Facades\Auth::user()->email);
                        ?>

                        <center>
                            @if(count($need_approval) == 0)
                            <span  class="btn btn-sm btn-primary" disabled>No action needed</span>
                            @else
                            <a href="/my_student/{{Illuminate\Support\Facades\Crypt::encryptString($research_project_categories->student_reference)}}" class="btn btn-sm btn-secondary">Requested <b class="text-white">({{count($need_approval)}})</b> >></a>
                            @endif
                        </center>

                    </td>
                    @endif
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

        @else
        <center>
            <img src="{{asset('empty-box.png')}}" class="m-0 pt-4" alt="Logo" width="45%">
            <div class="pt-0 p-0">Nothing found!</div>
        </center>
        @endif
    </div>

</div>
@endsection