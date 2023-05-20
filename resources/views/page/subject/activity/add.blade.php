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
                            <span class="header-2">Activity Title</span> 
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="button" class="success-button" data-bs-toggle="modal" data-bs-target="#addItem">
                                Create Item
                            </button>
                        </div>
                    </div>
                   <div class="mt-5">
                    <ol type="1">
                        <div class="row mb-2">
                            <div class="col">
                                <div class="text-end">
                                    <span class="badge bg-warning">MC</span>
                                </div>
                                <p class="font-text">
                                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus numquam illum magnam placeat ab. Pariatur eligendi qui laborum consequatur distinctio inventore rem nostrum, eaque est quae quod expedita minima ex!</li>
                                </p>
                                <ol type="A">
                                    <div class="row">
                                        <div class="col">
                                            <li>Coffee</li>
                                            <li>Tea</li>
                                        </div>
                                        <div class="col">
                                            <li>Coffee</li>
                                            <li>Tea</li>
                                        </div>
                                    </div>
                                </ol>
                                <p>
                                    <span class="font-text">Answer:</span><span>B</span>
                                </p>
                                <div class="text-end">
                                    <button class="danger-button">Delete</button>
                                    <button class="success-button">Edit</button>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <div class="text-end">
                                    <span class="badge bg-primary">TF</span>
                                </div>
                                <p class="font-text">
                                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus numquam illum magnam placeat ab. Pariatur eligendi qui laborum consequatur distinctio inventore rem nostrum, eaque est quae quod expedita minima ex!</li>
                                </p>
                                
                                <p>
                                    <span class="font-text">Answer:</span><span>True</span>
                                </p>
                                <div class="text-end">
                                    <button class="danger-button">Delete</button>
                                    <button class="success-button">Edit</button>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <div class="text-end">
                                    <span class="badge bg-success">Essay</span>
                                </div>
                                <p class="font-text">
                                    <li> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus numquam illum magnam placeat ab. Pariatur eligendi qui laborum consequatur distinctio inventore rem nostrum, eaque est quae quod expedita minima ex!</li>
                                </p>
                                
                                <p>
                                    <span class="font-text">Answer:</span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nobis, earum doloremque nesciunt officiis beatae asperiores, molestiae deleniti a at totam rem perferendis vitae adipisci, aperiam repudiandae nulla eius tempore?
                                    </span>
                                </p>
                                <div class="text-end">
                                    <button class="danger-button">Delete</button>
                                    <button class="success-button">Edit</button>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </ol>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('modal/Subject/Activity/add-item')
@endsection



