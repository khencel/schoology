<div class="modal fade" id="addActivity" tabindex="-1" role="dialog" aria-labelledby="addActivity" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addActivity">Create Activity</h5>
            
        </div>
        <div class="modal-body auth-modal-body">
            <div class="row">
                <div class="col">
                    <input type="text" id="activity_title" name="activity_title" placeholder="Enter activity title here..." class="form-control">
                    <div class="text-center">
                        <span class="text-danger" role="alert">
                            <strong id="activity_title_error"></strong>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="danger-button" data-bs-dismiss="modal">Close</button>
            <button type="button" onclick="btnCreate({{$subject_id}})" class="success-button">Save changes</button>
        </div> 
        </div>
    </div>
    </div>

