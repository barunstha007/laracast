<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('Tasks.index', compact('posts'));

    }

    public function create()
    {

        return view('Tasks.create');

    }

    public function store()
    {
        $this->validate(request(),
        [
            'title' => 'required',
            'body'  => 'required'

        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect('/');

    }

    public function show(Post $post)
    {

        return view('Tasks.show',compact('post'));

    }
}
