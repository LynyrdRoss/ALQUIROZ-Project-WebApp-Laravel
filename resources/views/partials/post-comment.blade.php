<div class="card">
	<div class="card-block">
		<form method="POST" action="/posts/{{ $post->id }}/comments">
			{{ csrf_field() }}

			<div class="form-group">
				<textarea name="body" class="form-control" placeholder="Write a comment . . ."></textarea>
			</div>
		
			<div class="form-group">
				<button type="submit" class="btn btn-primary comment-btn"><i class="fa fa fa-comments fa-lg"></i>&nbsp;&nbsp; Add Comment</button>
			</div>
		</form>
	</div>
</div>

<hr />

<div class="comments">
	<ul class="list-group">
		@foreach ($post->comments as $comment)
			<li class="list-group-item comment-box">
				<input type="hidden" value="{{ $comment->id }}" name="comment-id">

				{{ $comment->body }}

				@if ($comment->user_id == @Auth::user()->id)
				
					<i class="fa fa-caret-down fa-lg edit-caret" data-toggle="dropdown"></i>
					<ul class="dropdown-menu caret-tooltip">
						<li id="edit-caret" class="center caret-list"><a href="/posts/edit-comment/{{ $comment->id }}">EDIT</a></li>
						<li class="center caret-list"><a href="/posts/comment/{{ $comment->id }}">DELETE</a></li>
					</ul>

<!-- 					<form style="display: none" method="post" id="form" action="/edit-comment">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{ $comment->id }}">
						<input class="edit-comment" type="text" name="newbody" value="">
						<input type="submit">
					</form> -->

				@endif

				<div class="comment-time">
					{{ $comment->created_at->diffForHumans() }} by <a href="#">{{ $comment->user->name }}</a>
				</div>
			</li>
		@endforeach
	</ul>
</div>