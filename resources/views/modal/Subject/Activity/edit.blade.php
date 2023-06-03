<div class="modal fade" id="editActivity" tabindex="-1" role="dialog" aria-labelledby="editActivity" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editActivity">Edit Activity</h5>
            
        </div>
        <div class="modal-body auth-modal-body">
            <div class="row">
                <div class="col">
                    <input type="text" id="activity_title_edit" name="activity_title_edit" placeholder="Enter activity title here..." class="form-control">
                    <div class="text-center">
                        <span class="text-danger" role="alert">
                            <strong id="activity_title_edit_error"></strong>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="danger-button" data-bs-dismiss="modal">Close</button>
            <button type="button" onclick="btnEdit({{$subject_id}})" class="success-button">Save changes</button>
        </div> 
        </div>
    </div>
    </div>

