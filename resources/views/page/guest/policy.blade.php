@extends('landingPage')

@section('content')

<div class="container mt-5" style="position: relative">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                   <div style="width: 200px;position: absolute;left:50%;margin-left:-100px;top:-26px;font-size:30px" class="header-1 text-center">
                        Privacy Policy
                   </div>
                   <div class="text-center">
                        <p>
                            What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <img src="{{ asset('/img/guest.gif') }}" alt="">
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
