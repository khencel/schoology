<div class="row mb-2">
    <div class="col">
        <div class="text-end">
            <span class="badge bg-success">Essay</span>
        </div>
        <p class="font-text">
            <li>{!!$q->question!!}</li>
        </p>
        
        <p>
            <span class="font-text">Answer:</span>
            <span>
                {!!$q->answer!!}
            </span>
        </p>
        <div class="text-end">
            <button class="danger-button" onclick="deletequestion({{$q->id}})">Delete</button>
            <button class="success-button" onclick="editQuestion({{$q}})">Edit</button>
        </div>
        <hr>
    </div>
</div>