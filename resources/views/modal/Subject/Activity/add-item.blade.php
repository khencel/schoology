<form action="{{ url('/subject/activity/questionnaire/store') }}" id="submitForm" method="post">
    @csrf
    <div class="modal fade" id="addItem" tabindex="-1" role="dialog" aria-labelledby="addItem" aria-hidden="true">
        <div class="modal-dialog  modal-fullscreen" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addItem">Create Item</h5>
            </div>
            <div class="modal-body auth-modal-body">
                <input type="hidden" name="activity_id" value="{{$activity_id}}">
                <div class="row">
                    <div class="col-md-4">
                        <select name="question_type" id="type_question" onchange="selectType()" class="form-control">
                            <option value="" selected hidden>Type of item</option>
                            <option value="mc">Multiple Choice</option>
                            <option value="tf">True or False</option>
                            <option value="essay">Essay</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                    <div class="col">
                        <label for="question">
                            <span class="font-text">Question:</span> 
                        </label>
                        <textarea class="tinymce-editor form-control" name="question" id="txtQuestion"></textarea>
                    </div>
                
                </div>
                {{-- snippet here--}}
                <div id="multiple-choice-cont" class="d-none">
                    @include('modal/Subject/Activity/snippet/mul')
                </div>
                <div id="true-false-cont" class="d-none">
                    @include('modal/Subject/Activity/snippet/tf')
                </div>
                <div id="essay-cont" class="d-none">
                    @include('modal/Subject/Activity/snippet/essay-inu')
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="danger-button" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="storeActivity()" class="success-button">Save Item</button>
            </div> 
            </div>
        </div>
    </div>
</form>


