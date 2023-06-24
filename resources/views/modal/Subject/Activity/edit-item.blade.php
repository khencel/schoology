<form action="{{ url('/subject/activity/questionnaire/update') }}" id="editSubmitForm" method="post">
    @csrf
    <div class="modal fade" id="editItem" tabindex="-1" role="dialog" aria-labelledby="editItem" aria-hidden="true">
        <div class="modal-dialog  modal-fullscreen" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editItem">Edit Item</h5>
            </div>
            <div class="modal-body auth-modal-body">
                <input type="hidden" id="question_id" name="question_id">
                <div class="row">
                    <div class="col-md-4">
                        <select name="question_type" id="type_question_edit" onchange="selectType()" class="form-control ">
                            <option value="" selected hidden>Type of item</option>
                            <option value="mc">Multiple Choice</option>
                            <option value="tf">True or False</option>
                            <option value="essay">Essay</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                    <div class="col">
                        <div class="card p-2" >
                            <label for="question">
                                <span class="font-text">Question:</span> 
                            </label>
                            <textarea class=" form-control" name="question" id="txtQuestion_edit">
                            
                            </textarea>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card p-2" >
                            <label for="question">
                                <span class="font-text">Question Bank:</span> 
                            </label>
                            <div style="height:400px;overflow-y:auto" class="mt-2">
                                @foreach ($question_bank as $q)
                                    <div class="p-2">
                                        {!!$q->question!!}
                                    </div>
                                    <span role="button" class="float-end" onclick="getQuestionBankEdit({{$q}})"><i class="fa-solid fa-square-check fa-2x"></i></span>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                
                </div>
                {{-- snippet here--}}
                <div class="d-none multiple-choice-cont">
                    @include('modal/Subject/Activity/snippet/mul')
                </div>
                <div class="d-none true-false-cont">
                    @include('modal/Subject/Activity/snippet/tf')
                </div>
                <div class="d-none essay-cont">
                    @include('modal/Subject/Activity/snippet/essay-inu_edit')
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="danger-button" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="updateQuestion()" class="success-button">Save Item</button>
            </div> 
            </div>
        </div>
    </div>
</form>


