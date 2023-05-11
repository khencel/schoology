<div class="modal fade" id="addSubject" tabindex="-1" role="dialog" aria-labelledby="addSubject" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addSubject">Create Subject</h5>
            
        </div>
        <div class="modal-body auth-modal-body">
            <div class="row">
                <div class="col">
                    <input type="text" id="subject_name" name="subject_name" placeholder="Enter subject here..." class="form-control">
                    <div class="text-center">
                        <span class="text-danger" role="alert">
                            <strong id="subject_name_error"></strong>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="danger-button" data-bs-dismiss="modal">Close</button>
            <button type="button" id="btnCreate" class="success-button">Create subject</button>
        </div> 
        </div>
    </div>
    </div>

