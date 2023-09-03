@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="background-color: rgba(225,225,225,0.6) !important;backdrop-filter: blur(6px) !important;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="header-2">Books</span> 
                        </div>
                        
                    </div>
                    @include('page.penal-code.book1.book-one')
                </div>
            </div>
        </div>
    </div>
</div>
@include('modal/Course/add')
@include('modal/Course/showUpdate')

<script src="{{ asset('js/Course/app.js') }}"></script>
<script src="{{ asset('js/services.js') }}"></script>
@endsection



