@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <input type="hidden" name="course_id" id="course_id" value="{{$course_id}}">
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
                            <span class="header-2">Subject</span> 
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="button" class="success-button" data-bs-toggle="modal" data-bs-target="#addSubject">
                                Create subject
                            </button>
                        </div>
                    </div>
                   <div class="mt-2">
                        <div class="row">
                            @forelse ($subjects as $s)
                                <div class="col-md-3">
                                    <div class="row bg-white list-cont p-3" role="button" style="margin:1px">
                                        <div class="col-9 text-center" style="border-right:1px solid gray;">
                                            <img src="{{ url('/img/books.png') }}" class="img-fluid" alt="">
                                            <strong class="font-text">
                                                {{$s->subject_name}}
                                            </strong>
                                        </div>
                                        <div class="col-3 text-end">
                                            <div>
                                                <i class="fa-solid fa-eye bg-info p-1 w-100" style="border-radius:2px"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-circle-info bg-primary p-1 w-100 text-white" style="border-radius:2px"></i>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-trash bg-danger p-1 w-100 text-white" style="border-radius:2px"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                No Record...
                            @endforelse
                            
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modal/Subject/add')
<script src="{{ asset('js/Subject/app.js') }}"></script>
@endsection



