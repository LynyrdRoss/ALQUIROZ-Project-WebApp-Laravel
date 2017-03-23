@extends('master')

@section('content')
    <div class="col-sm-8">
        <h1>Edit post</h1>

        <form method="POST" action="/save-post">
            {{ csrf_field() }}

            @include('partials.error')

            <input type="hidden" name="id" value="{{ $post->id }}">

            <div class="form-group">
                <label for="name">Title:</label>
                <input type="text" class="form-control" value="{{ $post->title }}" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="body">Content:</label>
                <textarea class="form-control" id="body" name="body" required>{{ $post->body }}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
            </div>
        </form>
    </div>
@endsection