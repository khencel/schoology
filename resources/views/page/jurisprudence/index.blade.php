@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="background-color: rgba(225,225,225,0.6) !important;backdrop-filter: blur(6px) !important;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="header-2">Jurisprudence</span> 
                        </div>
                    </div>
                   <div class="mt-2">
                        <div class="row">
                            @foreach (range(1901,date("Y")) as $item)
                                <div class="col-1 year-cel">
                                    <a href="{{ url('jurisprudence/index/month?year='.$item) }}" class="year-href" style="text-decoration: none;color:black">
                                        <div>
                                            {{$item}}
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

