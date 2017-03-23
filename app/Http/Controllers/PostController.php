<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'showById');
    }

    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

    	// $posts = Post::latest();

     //    if ($month = request('month'))
     //    {
     //        $posts->whereMonth('created_at', Carbon::parse($month)->month);
     //    }

     //    if ($year = request('year'))
     //    {
     //        $posts->whereYear('created_at', $year);
     //    }

     //    $posts = $posts->get();

        // Unless not using Service Providers
        // $archives = Post::archives();

        // return dd($archives);
    	return view('index', compact('posts'));
    }

    public function showById($id)
    {
    	$post = Post::find($id);

    	return view('show-solo', compact('post'));
    }

    public function showForm()
    {
    	return view('new-post');
    }

    // Convention to POST ADD
    public function store(Request $request) {
    	$this->validate(request(), [
    		'title' => 'required|min:2',
    		'body' => 'required|min:10'
    	]);

    	Post::create([
    		'title' => $request->title,
    		'body' => $request->body,
            'user_id' => auth()->user()->id
    	]);

        session()->flash('message', '"' . $request['title'] . '"' . ' posted succesfully!');

    	return redirect('/posts');
    }

    public function editPostForm(Request $request, $id)
    {
        $post = Post::find($id);

        return view('edit-post', compact('post'));
    }

    public function savePost(Request $request)
    {
        $post_id = $request->id;
        $title = $request->title;
        $body = $request->body;

        $post = Post::find($post_id);
        $post->title = $title;
        $post->body = $body;
        $post->save();

        session()->flash('message', 'Successfully edited post.');

        return redirect('/posts/' . $post_id);
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();

        session()->flash('message', 'Successfully deleted post.');

        return redirect()->home();
    }
}
