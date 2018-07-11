    		<div class="col-md-3">
    			<h4>Tags</h4>

    			<ul class="list-group">
	    			<a href="{{route('forum')}}" class="list-group-item d-flex justify-content-between align-items-center"> All Threads
	    				<span class="badge badge-info badge-pill">14</span>
	    			</a>
    				@foreach($tags as $tag)
	    			<a href="{{route('forum', ['tags' => $tag->id])}}" class="list-group-item d-flex justify-content-between align-items-center">
	    				{{$tag->name}}
	    				<span class="badge badge-info badge-pill">14</span>
	    			</a>
	    			@endforeach
	    		</ul>
    		</div>