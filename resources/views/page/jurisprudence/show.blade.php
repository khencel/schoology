@extends('layouts.app')


@section('content')
<form action="{{ url('/jurisprudence/update/'.$jurisprudence->id) }}" id="submitForm" method="post">
@csrf
@method('PUT')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="background-color: rgba(225,225,225,0.6) !important;backdrop-filter: blur(6px) !important;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="header-2">{{$jurisprudence->title}}</span> 
                        </div>
                        <div class="col-md-6 text-end">
                            <input type="hidden" value="{{request('year')}}" name="year">
                            <input type="hidden" value="{{request('month')}}" name="month">
                            <button type="button" id="btnUpdate" class="success-button">
                                Update
                            </button>
                            <button type="button" onclick="deleteRecord({{$jurisprudence->id}})" class="danger-button">
                                Delete
                            </button>
                        </div>
                    </div>
                    
                   <div class="row mt-5">
                        <div class="col-md-5">
                            <input type="text" name="title" placeholder="Title Case" value="{{$jurisprudence->title}}" class="form-control">
                        </div>
                        <div class="col">
                            <input type="date" name="date_case" placeholder="Date Case" value="{{$jurisprudence->date_case}}" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="author" placeholder="Author/Ponente" value="{{$jurisprudence->author}}" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="case_no" placeholder="Case Number" value="{{$jurisprudence->case_no}}" class="form-control">
                        </div>
                   </div>
                    <div class="row mt-3">
                            <div class="col">
                                <textarea class="tinymce-editor form-control" name="content_case">{{$jurisprudence->content_case}}</textarea>
                            </div>
                    </div>
                    <div class="row justify-content-end mt-5">
                        <div class="col-md-3 text-end">
                            <a href="{{ url()->previous() }}" style="text-decoration: none" class="danger-button">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<script src="{{ asset('js/Jurisprudence/app.js') }}"></script>
@endsection







