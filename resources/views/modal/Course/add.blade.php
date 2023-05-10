<div class="modal fade" id="addCourse" tabindex="-1" role="dialog" aria-labelledby="addCourse" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addCourse">Create Course</h5>
            
        </div>
        <div class="modal-body auth-modal-body">
            <div class="row">
                <div class="col">
                    <input type="text" id="course_name" name="course_name" placeholder="Enter course here..." class="form-control">
                    <div class="text-center">
                        <span class="text-danger" role="alert">
                            <strong id="course_name_error"></strong>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="danger-button" data-bs-dismiss="modal">Close</button>
            <button type="button" id="btnCreate" class="success-button">Save changes</button>
        </div> 
        </div>
    </div>
    </div>

