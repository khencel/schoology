@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="background-color: rgba(225,225,225,0.6) !important;backdrop-filter: blur(6px) !important;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="header-2">Course</span> 
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="button" class="success-button" data-bs-toggle="modal" data-bs-target="#addCourse">
                                Create Course
                            </button>
                        </div>
                    </div>
                   <div class="mt-2">
                        <div class="row">
                            @forelse ($courses as $c)
                                <div class="col-md-3 mb-3 box">
                                    <div class="bg-white p-2" role="button" style="border-radius: 12px">
                                        <div class="header-3">
                                            {{$c->course_name}}
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="number">{{number_format(1231)}}</div>
                                                <div class="indicator">
                                                    <i class='bx bx-up-arrow-alt'></i>
                                                    <span class="text">Subject</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <i class='bx bxs-graduation cart' ></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div>No Record...</div>
                            @endforelse
                           
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modal/Course/add')
<script src="{{ asset('js/Course/app.js') }}"></script>
@endsection



