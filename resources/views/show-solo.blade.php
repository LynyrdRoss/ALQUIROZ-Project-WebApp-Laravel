@extends('master')

@include('partials.nav-none')

@section('content')
	<div class="col-sm-8 blog-main">
		<div class="blog-post">

			@if ($flash = session('message'))
        		<div class="alert alert-success flash-message" role="alert">
            		{{ $flash }}
        		</div>
			@endif

			@if ( $post->user_id  == @Auth::user()->id)
				<a href="/posts/{{ $post->id }}/delete">
					<button class="btn-sm btn-warning post-btn" data-toggle="tooltip" data-placement="top" title="Delete Post"><i class="fa fa-times"></i></button>
				</a>
				<a href="/posts/{{ $post->id }}/edit">
					<button class="btn-sm btn-primary post-btn" data-toggle="tooltip" data-placement="top" title="Edit Post"><i class="fa fa-pencil-square-o"></i></button>
				</a>
			@endif			

<!-- 			<a href="/posts/{{ $post->id }}/edit">
				<button class="btn btn-primary" style="float:right">Edit</button>
			</a> -->

			<h2>Post number: {{ $post->id }}</h2>

    		<h2 class="blog-post-title">
    			<a class="title-link" href="/posts/{{ $post->id }}">{{ $post->title }}</a>
		    </h2>

		    <!-- {{ $post->created_at->toFormattedDateString() }} -->
    		<p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">{{ $post->user->name }}</a></p>
    		{{ $post->body }}

			<hr />
			
			@include('partials.error')

			@include('partials.post-comment')
		</div>
	</div>
@endsection
