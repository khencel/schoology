@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="background-color: rgba(225,225,225,0.6) !important;backdrop-filter: blur(6px) !important;">
                <div class="card-body">
                    <div class="row justify-content-end">
                        <div class="col-6 text-end ">
                            <small>
                                <span class="font-text">Course</span>
                                /
                                <span class="">Subject</span>
                            </small>
                            
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <span class="header-2">Activity</span> 
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="button" class="danger-button" data-bs-toggle="modal" data-bs-target="#addItem">
                                Create Item
                            </button>
                        </div>
                    </div>
                    <div class="row">                        
                        <div class="col-md-4">
                            
                            <input type="text" class="form-control" value="{{$activity->title}}" readonly placeholder="Title activity">
                        </div>
                    </div>
                    
                    
                    
                   <div class="mt-5">
                    <ol type="1">
                        @foreach ($questionnaire as $q)
                            @if ($q->question_type == "mc")
                                @include('/page/subject/activity/snippet/multiple-choice')
                            @endif
                            @if ($q->question_type == "tf")
                                @include('/page/subject/activity/snippet/true-or-false')
                            @endif
                            @if ($q->question_type == "essay")
                                @include('/page/subject/activity/snippet/essay-inumeration')
                            @endif
                        @endforeach
                    </ol>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('modal/Subject/Activity/add-item')

<script src="{{ asset('js/Subject/Activity/app.js') }}"></script>
<script src="{{ asset('js/services.js') }}"></script>

@endsection



