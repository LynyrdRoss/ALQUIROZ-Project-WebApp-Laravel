<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['only' => 'store']);
	}

    // Convention to POST ADD
    public function store(Post $post)
    {
    	$this->validate(request(), ['body' => 'min:5|max:1000']);

    	Comment::create([
    		'body' => request('body'),
    		'post_id' => $post->id,
            'user_id' => auth()->user()->id
    	]);

        session()->flash('message', 'Comment added, ' . \Auth::user()->name);

    	return back();
    }

    public function editCommentForm(Request $request, $id)
    {
        $comment = Comment::find($id);

        return view('edit-comment', compact('comment'));
    }

    public function saveComment(Request $request)
    {
        $body = $request->body;
        $comment_id = $request->id;

        $comment = Comment::find($comment_id);
        $comment->body = $body;
        $comment->save();

        return redirect('/posts/' . $comment->post_id);
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        session()->flash('message', 'Successfully deleted comment.');

        return back();
    }
}
