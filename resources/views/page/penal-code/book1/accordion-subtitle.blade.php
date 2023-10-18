<div class="accordion mt-2" id="accordion_subtitle_{{$b->id}}">
    @foreach ($b->title as $t)
        <div class="accordion-item">
            <div class="collapsed p-3" style="line-height: 12px" type="button" data-bs-toggle="collapse" data-bs-target="#subtitle_collapseOne_{{$t->id}}" aria-expanded="false" aria-controls="subtitle_collapseOne_{{$t->id}}">
                <span style="font-size: 24px">
                    {{$t->name}}
                </span>
            
                <br>
                <span style="font-size: 12px">
                   {{$t->subtitle}}
                </span> 
            </div>
            <div id="subtitle_collapseOne_{{$t->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion_subtitle_{{$b->id}}">
                <div class="accordion-body">
                    @include('page.penal-code.book1.accordion-chapter')
                </div>
            </div>
        </div>
    @endforeach
</div>