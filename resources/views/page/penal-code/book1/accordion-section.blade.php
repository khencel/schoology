<div class="accordion mt-2" id="accordion_section_{{$c->id}}">
    @forelse ($c->section as $s)
        <div class="accordion-item">
            <div class="collapsed p-3" style="line-height: 12px" type="button" data-bs-toggle="collapse" data-bs-target="#section_collapseOne_{{$s->id}}" aria-expanded="false" aria-controls="section_collapseOne_{{$s->id}}">
                <span style="font-size: 24px">
                    {{$s->name}}
                </span>
            
                <br>
                <span style="font-size: 12px">
                    {{$s->subtitle}}
                </span> 
            </div>
            <div id="section_collapseOne_{{$s->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion_section_{{$c->id}}">
                <div class="accordion-body">
                    <a href="/penal-code/books/v?cat=section&book={{$b->id}}&title={{$t->id}}&chapter={{$c->id}}&section={{$s->id}}" target=”_blank”  class="btn btn-success">View</a>
                </div>
            </div>
        </div>
    @empty
    <a href="/penal-code/books/v?cat=chapter&book={{$b->id}}&title={{$t->id}}&chapter={{$c->id}}" target=”_blank”  class="btn btn-success">View</a>
    @endforelse
    
</div>