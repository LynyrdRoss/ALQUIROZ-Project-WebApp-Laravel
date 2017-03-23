@extends('master')

@section('content')
    <div class="col-sm-8">
        <h1>Edit Comment</h1>

        <form method="POST" action="/save-comment">
            {{ csrf_field() }}

            @include('partials.error')

            <input type="hidden" name="id" value="{{ $comment->id }}">

            <div class="form-group">
                <label for="body">Content:</label>
                <textarea class="form-control" id="body" name="body" required>{{ $comment->body }}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
            </div>
        </form>
    </div>
@endsection