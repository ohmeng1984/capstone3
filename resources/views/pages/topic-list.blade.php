    		<div class="col-md-3">
<<<<<<< HEAD
    			<h4>Topics</h4>

    			<ul class="list-group">
	    			<a href="{{route('forum')}}" class="list-group-item d-flex justify-content-between align-items-center"> All Threads
	    				<span class="badge badge-info badge-pill">{{count(App\Thread::all())}}</span>
=======
    			<h4>Tags</h4>

    			<ul class="list-group">
	    			<a href="{{route('forum')}}" class="list-group-item d-flex justify-content-between align-items-center"> All Threads
	    				<span class="badge badge-info badge-pill">14</span>
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
	    			</a>
    				@foreach($tags as $tag)
	    			<a href="{{route('forum', ['tags' => $tag->id])}}" class="list-group-item d-flex justify-content-between align-items-center">
	    				{{$tag->name}}
<<<<<<< HEAD
	    				<span class="badge badge-info badge-pill">{{App\Thread::where('tags_id', $tag->id)->count()}}</span>
=======
	    				<span class="badge badge-info badge-pill">14</span>
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
	    			</a>
	    			@endforeach
	    		</ul>
    		</div>