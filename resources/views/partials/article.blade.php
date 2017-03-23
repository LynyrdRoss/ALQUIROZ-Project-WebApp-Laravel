<div class="blog-post">
    <h2 class="blog-post-title">
    	<a class="title-link" href="/posts/{{ $post->id }}">{{ $post->title }}</a>
    </h2>
    <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">{{ $post->user->name }}</a></p>
    	{{ $post->body }}
    	<br /><br /><hr />
</div>