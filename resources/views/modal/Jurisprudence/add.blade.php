<form action="{{ url('jurisprudence/store') }}" method="post">
    @csrf
    <div class="modal fade" id="addCase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Case</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body auth-modal-body">
                <input type="hidden" name="year" value="{{request('year')}}">
                <input type="hidden" name="month" value="{{request('month')}}">
                <div class="row">
                    <div class="col-md-6">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="col-md-6">
                        <label for="title">Date Case:</label>
                        <select name="day" class="form-control">
                            <option value="">Select Day</option>
                            @foreach (range(1,31) as $item)
                                <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="author">Author/Ponente:</label>
                        <input type="text" class="form-control" name="author">
                    </div>
                    <div class="col-md-6">
                        <label for="case-no">Case Number:</label>
                        <input type="text" class="form-control" name="case_no">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="content-case">Case Content:</label>
                        <textarea class="tinymce-editor form-control" name="content_case"></textarea>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="danger-button" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="success-button">Save changes</button>
            </div>
            </div>
        </div>
    </div>
</form>
