<div class="modal fade" id="showUpdate" tabindex="-1" role="dialog" aria-labelledby="showUpdate" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="showUpdate">Update Subject</h5>
            
        </div>
        <div class="modal-body auth-modal-body">
            <div class="row">
                <div class="col">
                    <input type="text" id="course_name_show" name="course_name_show" placeholder="Enter subject here..." class="form-control">
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
            <button type="button" onclick="btnUpdate()" class="success-button">Update subject</button>
        </div> 
        </div>
    </div>
    </div>

