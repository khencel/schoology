<form action="{{ url('/subject/questionBank/store') }}" id="formStoreQuestionBank" method="POST">
    @csrf
    <div class="modal fade" id="addQuestionBank" tabindex="-1" role="dialog" aria-labelledby="addQuestionBank" aria-hidden="true">
        <div class="modal-dialog  modal-fullscreen" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addQuestionBank">Create Question</h5>
            </div>
            <div class="modal-body auth-modal-body">
                <div class="row mb-3 mt-3">
                    <input type="hidden" value="{{$subject_id}}" name="subject_id">
                    <div class="col">
                        <label for="question">
                            <span class="font-text">Question:</span> 
                        </label>
                        <textarea class="tinymce-editor form-control" name="question" id="txtQuestion"></textarea>
                    </div>
                
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="danger-button" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="storeQuestionBank()" class="success-button">Save Item</button>
            </div> 
            </div>
        </div>
    </div>
</form>



