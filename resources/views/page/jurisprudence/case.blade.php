@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="background-color: rgba(225,225,225,0.6) !important;backdrop-filter: blur(6px) !important;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="header-2">YEAR {{request('year')}} / Month {{ request('month') }} - PHILIPPINE JURISPRUDENCE</span> 
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="button" class="success-button" data-bs-toggle="modal" data-bs-target="#addCase">
                                Add Case
                            </button>
                        </div>
                    </div>
                    <div class="">
                        <table class="table table-hover">
                            <thead>
                                <th>Date</th>
                                <th>Case Number</th>
                                <th>Case Title</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-end mt-5">
                        <div class="col-md-1">
                            <a href="{{ url('/jurisprudence/index/month?year='.request('year')) }}" style="text-decoration: none" class="w-100 danger-button">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modal/Jurisprudence/add')
@endsection



