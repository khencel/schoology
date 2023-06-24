
<div class="modal fade" id="editQuestionBank" tabindex="-1" role="dialog" aria-labelledby="editQuestionBank" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editQuestionBank">Update Question</h5>
        </div>
        <div class="modal-body auth-modal-body">
            <div class="row mb-3 mt-3">
                <input type="hidden" value="{{$subject_id}}" name="subject_id">
                <input type="hidden" value="" id="question_bank_id">
                <div class="col">
                    <label for="question">
                        <span class="font-text">Question:</span> 
                    </label>
                    <textarea class="form-control tinymce-editor " name="txtEditQuestionBank" id="txtEditQuestionBank"></textarea>
                </div>
            
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="danger-button" data-bs-dismiss="modal">Close</button>
            <button type="button" onclick="updateQuestionBank()" class="success-button">Update Question Bank</button>
        </div> 
        </div>
    </div>
</div>




