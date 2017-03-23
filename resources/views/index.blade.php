@extends('master')

@include('partials.nav-home')

@section('content')
	@include('partials.blog-header')
    <div class="col-sm-8 blog-main">
		@foreach ($posts as $post)
			@include('partials.article')
		@endforeach

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>

    </div>
@endsection