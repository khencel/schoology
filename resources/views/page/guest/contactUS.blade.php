@extends('landingPage')

@section('content')

<div class="container mt-5" style="position: relative">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                   <div style="width: 180px;position: absolute;left:50%;margin-left:-90px;top:-26px;font-size:30px" class="header-1 text-center">
                        Contact Us
                   </div>
                   <div class="mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div>
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div>
                                    <label for="email">Email Address:</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="mt-3 mb-5">
                                    <textarea placeholder="Comment here..." class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('/img/guest.gif') }}" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
