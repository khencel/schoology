<div class="accordion mt-2" id="accordion_chapter_{{$t->id}}">
    @forelse ($t->chapter as $c)
        <div class="accordion-item">
            <div class="collapsed p-3" style="line-height: 12px" type="button" data-bs-toggle="collapse" data-bs-target="#chapter_collapseOne_{{$c->id}}" aria-expanded="false" aria-controls="chapter_collapseOne_{{$c->id}}">
                <span style="font-size: 24px">
                    {{$c->name}}
                </span>
            
                <br>
                <span style="font-size: 12px">
                    {{$c->subtitle}}
                </span> 
            </div>
            <div id="chapter_collapseOne_{{$c->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion_chapter_{{$t->id}}">
                <div class="accordion-body">
                    @include('page.penal-code.book1.accordion-section')
                </div>
            </div>
        </div>
    @empty
        <a href="/penal-code/books/v?cat=title&book={{$b->id}}&title={{$t->id}}&type=null" target=”_blank”  class="btn btn-success">View</a>
    @endforelse
</div>