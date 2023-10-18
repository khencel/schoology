<div class="text-end mb-4">
    <button class="btn btn-success" onclick="$('#addTrueOrFalseModal').modal('show')">Update or Create</button>
</div>  
<div class="text-center">
    <strong class="h4">
        True or False
    </strong>
</div>
<div>
    <p>
        <ol>
            @foreach ($question_tf as $tf)
                <li>
                    {!!$tf->question!!}
                    Answer: <span class="text-capitalize"><strong>{{$tf->answer}}</strong></span>
                </li>
                <hr>
            @endforeach
        </ol>
    </p>
</div>