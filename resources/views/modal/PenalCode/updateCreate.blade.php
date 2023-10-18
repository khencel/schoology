
<div class="modal fade" id="updateCreateCase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <textarea class="tinymce-editor form-control" id="txtQuestion" name="content_case">{!!$details->details??null!!}</textarea>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="btnCreate({{$book}},{{$title}},{{$chapter??0}},{{$section??0}})" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div>

<!-- Modal -->

<div class="modal fade" id="addTrueOrFalseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <textarea class="tinymce-editor form-control" id="txtQuestionTrueOrFalse" name="content_case"></textarea>
            <div>
              <input type="radio" value="true" name="answer">True
            </div>
            <div>
              <input type="radio" value="false" name="answer">False
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="createQuestion()">Create Question</button>
        </div>
      </div>
    </div>
</div>

{{-- modal Identification  --}}

<div class="modal fade" id="addIdentificationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <textarea class="tinymce-editor form-control" id="txtQuestionIdentification" name="content_case"></textarea>
          <div class="mt-3">
            <label for="">Answer</label>
            <input type="text" class="form-control" name="answer" id="identificationAnswer">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="createQuestionIdentification()">Create Question</button>
      </div>
    </div>
  </div>
</div>

{{-- end  --}}

<script>
  var book = "{{$book->id}}"
  var title = "{{$title->id}}"
  var chapter = "{{$chapter?$chapter->id:null}}"
  var section = "{{$section?$section->id:null}}"
</script>