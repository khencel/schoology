@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="background-color: rgba(225,225,225,0.6) !important;backdrop-filter: blur(6px) !important;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            
                            @include('page.penal-code.tab')
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active bg-white p-5 " id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="text-end mb-4">
                                        <button class="btn btn-success" onclick="updateCreate()">Update or Create</button>
                                    </div>  
                                    
                                    
                                    <div class="">
                                        
                                        <div class="text-center">
                                            <strong class="h4">
                                                {{$book->name}}
                                            </strong>
                                            <p>
                                                {{$book->subtitle}}
                                            </p>
                                            <strong>
                                                <p>
                                                    {{$title->name}}
                                                </p>
                                            </strong>
                                            <p>
                                                {{$title->subtitle}}
                                            </p>

                                            <strong>
                                                <p>
                                                    {{$chapter->name??null}}
                                                </p>
                                            </strong>
                                            <p>
                                                {{$chapter->subtitle??null}}
                                            </p>
                                            <strong>
                                                <p>
                                                    {{$section->name??null}}
                                                </p>
                                            </strong>
                                            <p>
                                                {{$section->subtitle??null}}
                                            </p>
                                        </div>
                                        <p class="mt-5">
                                            {!!$details->details??null!!}
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade  bg-white p-5 " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    @include('page.penal-code.questionaire.true-or-false')
                                </div>
                                <div class="tab-pane fade  bg-white p-5 " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    @include('page.penal-code.questionaire.identification')
                                </div>
                                <div class="tab-pane fade  bg-white p-5 " id="enumeration" role="tabpanel" aria-labelledby="enumeration-tab">
                                    @include('page.penal-code.questionaire.enumeration')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('modal/PenalCode/updateCreate')

<script src="{{ asset('js/penalcode/app.js') }}"></script>
<script src="{{ asset('js/services.js') }}"></script>
@endsection



