@extends('landingPage')

@section('content')
<style>
    .card{
        /* background-color: rgba(225, 225, 225, 0.7) !important; */
        backdrop-filter: blur(6px) !important;
        border-radius: 10px;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 m-5">
            <div class="text-end">
                <a href="{{  url('/jurisprudence') }}">
                    <button class="success-button mr-auto mb-2">Back</button>
                </a>
            </div>
            
            <div class="card p-4">
                <div class="card-body position-relative">
                    <img class="position-absolute" style="width:13%;left:-66px;" src="{{ '/img/teacher.gif' }}" alt="">
                    {!!$jurisprudence->content_case!!}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script src="{{ asset('js/guest/jurisprudence.js') }}"></script> --}}
@endsection
