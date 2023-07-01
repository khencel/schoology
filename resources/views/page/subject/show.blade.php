@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card mb-3" style="background-color: rgba(225,225,225,0.6) !important;backdrop-filter: blur(6px) !important;">
                <div class="card-body">
                    <div class="row justify-content-end">
                        <div class="col-6 text-end ">
                            <small>
                                <span class="font-text" role="button" onclick="event.preventDefault(); window.location = '/course/index'">Course</span>
                                /
                                <span class="font-text" role="button" onclick="event.preventDefault(); window.location = '/subject/index/{{$course_id}}'">Subject</span>
                                /
                                <span class="">Activity</span>
                            </small>
                            
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <span class="header-2">Activity</span> 
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="button" class="success-button" data-bs-toggle="modal" data-bs-target="#addActivity">
                                Create Activity
                            </button>
                            
                        </div>
                    </div>
                   <div class="mt-2">
                        <div class="row">
                            <div class="col">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Title</th>
                                        <th>Item</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        @forelse ($activity as $a)
                                            <tr>
                                                <td>{{$a->title}}</td>
                                                <td>{{count($a->questionnaire)}}</td>
                                                <td>
                                                    {{-- <a href="{{ url('/subject/activity/add/activity_id='.$a->id) }}">
                                                        <span role="button" class="badge bg-info">View</span>
                                                    </a> --}}
                                                    <span role="button" class="badge bg-info" onclick="viewQuestionnaire({{$a->id}},{{$course_id}},{{$subject_id}})">View</span>
                                                    <span role="button" class="badge bg-primary" onclick="editActivity({{$a}})">Edit</span>
                                                    <span role="button" class="badge bg-danger" onclick="deleteActivity({{$a->id}})">Delete</span>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>No record...</td>
                                            </tr>
                                        @endforelse
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                   </div>
                </div>
            </div>


            <div class="card mb-3" style="background-color: rgba(225,225,225,0.6) !important;backdrop-filter: blur(6px) !important;">
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <span class="header-2">Question Bank</span> 
                        </div>
                        <div class="col-md-6 text-end">
                            
                            <button type="button" class="success-button" data-bs-toggle="modal" data-bs-target="#addQuestionBank">
                                Create Question
                            </button>
                            
                        </div>
                    </div>
                   <div class="mt-2">
                    
                        <div class="row">
                            <div class="col">
                                <table class="table table-hover" id="tbListOfQuestion">
                                    <thead>
                                        <th>Question</th>
                                        <th>Action</th>
                                    </thead>
                                   
                                </table>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
            {{-- @include('page.subject.questionaire_bank') --}}
        </div>
    </div>
</div>

@include('modal/Subject/Activity/add')
@include('modal/Subject/Activity/edit')
@include('modal/Subject/QuestionBank/add-question')
@include('modal/Subject/QuestionBank/edit-question')

<script>
    var subject_id = {{$subject_id}}
</script>
<script>
    $('#tbListOfQuestion').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ url('/subject/questionBank/index/'.$subject_id) }}",
    columns: [
        {data: 'action', name: 'action',html:true},
        {data: 'button', name: 'button',html:true},
    ]
});
</script>

<script src="{{ asset('js/Subject/Activity/app.js') }}"></script>
<script src="{{ asset('js/services.js') }}"></script>
@endsection



