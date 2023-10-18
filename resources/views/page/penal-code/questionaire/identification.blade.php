<div class="text-end mb-4">
    <button class="btn btn-success" onclick="$('#addIdentificationModal').modal('show')">Update or Create</button>
</div>  
<div class="text-center">
    <strong class="h4">
        Identification
    </strong>
</div>
<div>
    <p>
        <ol>
            @foreach ($question_identification as $i)
                <li>
                    {!!$i->question!!}
                    Answer: <span class="text-capitalize"><strong>{{$i->answer}}</strong></span>
                </li>
            @endforeach
        </ol>
    </p>
</div>