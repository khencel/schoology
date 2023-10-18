
<div class="accordion mt-2" id="accordionExample">
    <div class="accordion-item">
        @foreach ($book as $b)
            <div class="collapsed p-3" style="line-height: 12px;border-bottom:1px solid black" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_{{$b->id}}" aria-expanded="false" aria-controls="collapseOne_{{$b->id}}">
                <span style="font-size: 24px">
                    {{$b->name}}
                </span>
            
                <br>
                <span style="font-size: 12px">
                    {{$b->subtitle}}
                </span> 
            </div>
            <div id="collapseOne_{{$b->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('page.penal-code.book1.accordion-subtitle')
                </div>
            </div>
        @endforeach
    </div>
</div>
