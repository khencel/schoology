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
                    <div class="mt-5">
                        <div>
                            <table class="table table-hover example" id="case-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Date Case</th>
                                        <th>Case Number</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($jurisprudence as $j)
                                        <tr>
                                            <td>{{date_format(date_create($j->date_case),"M d, Y")}}</td>
                                            <td>{{$j->title}}</td>
                                            <td>{{$j->case_no}}</td>
                                            <td>{{$j->author}}</td>
                                            <td>
                                                <a href="/jurisprudence/show/{{$j->case_no}}">
                                                    <span role="button">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    @empty
                                        <tr>
                                            <td>No Record...</td>
                                        </tr>
                                    @endforelse
                                </tbody>  
                                
                            </table>
                        </div>
                    </div>
                    {{-- <div class="row justify-content-center">
                        <div class="col-3">
                            {{ $jurisprudence->links() }}
                        </div>
                    </div> --}}
                    <div class="row justify-content-end mt-5">
                        <div class="col-md-2 text-end">
                            <a href="{{ url('/jurisprudence/index/month?year='.request('year')) }}" style="text-decoration: none" class="w-100 danger-button">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modal/Jurisprudence/add')
<script src="{{ asset('js/Jurisprudence/add.js') }}"></script>
<script>
    $('#case-table').DataTable();
</script>
@endsection




