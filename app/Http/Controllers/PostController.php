<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

  public function index()
  {
  $posts = Post::all();
  return view('post.index', compact('posts'));
  }

    public function create()
    {
     return view('post.create');
    }

    public function store()
    {
        Post::create([
          'title' => request('title'),
          'content'=> request('content')

        ])
    }

    public function edit($id)
    {
      $post = Post::find($id);
      return view('post.edit', compact('post'));
    }
}
