@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="background-color: rgba(225,225,225,0.6) !important;backdrop-filter: blur(6px) !important;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="header-2">YEAR {{request('year')}} - PHILIPPINE JURISPRUDENCE</span> 
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($month as $m)
                            <div class="col-md-3 year-cel p-0">
                                <a href="{{ url('/jurisprudence/index/month/case?year='.request('year').'&month='.$m) }}" class="year-href" style="text-decoration: none;color:black">
                                    <div class=" p-2">
                                        {{$m}}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="row justify-content-end mt-5">
                        <div class="col-md-1">
                            <a href="{{ url('/jurisprudence/index') }}" style="text-decoration: none" class="w-100 danger-button">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
