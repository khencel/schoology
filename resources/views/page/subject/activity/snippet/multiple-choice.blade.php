<div class="row mb-2">
    <div class="col">
        <div class="text-end">
            <span class="badge bg-warning">MC</span>
        </div>
        @php
            $choices = json_decode($q->choices);
        @endphp
        
        <p class="font-text">
            <li>{!!$q->question!!}</li>
        </p>
        <ol type="A">
            <div class="row">
                <div class="col">
                    <li>{{$choices[0]}}</li>
                    <li>{{$choices[1]}}</li>
                </div>
                <div class="col">
                    <li>{{$choices[2]}}</li>
                    <li>{{$choices[3]}}</li>
                </div>
            </div>
        </ol>
        <p>
            <span class="font-text">Answer:</span><span>{{$q->answer}}</span>
        </p>
        <div class="text-end">
            <button class="danger-button" onclick="deletequestion({{$q->id}})">Delete</button>
            <button class="success-button" onclick="editQuestion({{$q}})">Edit</button>
        </div>
        <hr>
    </div>
</div>