@extends('layouts.app')

@section('header')
    Dashboard
@endsection
@section('content')
@php
    $data = App\Models\Jurisprudence::all();
@endphp
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 mb-3 box">  
            <div class="bg-white p-2 m-1 row" style="border-radius: 12px">
                <div class="col">
                    <div class="header-3">
                        Jurisprudence
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="number text-dark">{{number_format(count($data))}}</div>
                            <div class="indicator">
                                <i class='bx bx-up-arrow-alt'></i>
                                <span class="text text-dark">Item</span>
                            </div>  
                        </div>
                        <div class="col text-end">
                            <i class='bx bxs-graduation cart mt-1' ></i>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</div>
@endsection
