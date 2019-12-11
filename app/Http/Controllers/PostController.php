<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use DB;

class PostController extends Controller
{

  public function index()
  {
    $post = Post::orderBy('title', 'content')->paginate(5);
    return view('post.index')->with('posts', $post);
  }

  public function create()
  {
    return view('post.create');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'title' =>'required',
      'content'=>'required'
    ]);

    $p = new Post;
    $p->title = $request->input('title');
    $p->content = $request->input('content');
    // echo ($p->title);


    $p->save();
    // var_dump($p->title);
    // return view('post.post')->with('posts',$p);
    return redirect()->route('post.post');
  }

  public function post()
  {
    $post = Post::all();
    return view('post.post')->with('post', $post);
  }

  public function edit($id)
  {
    $post = Post::find($id);

    return view('post.edit', compact('post'));
  }

  public function update($id)
  {
    $post = Post::find($id);

    $post->update([
      'title' => request('title'),
      'content' => request('content'),
    ]);

    return redirect()->route('post.post');
  }

  public function destroy($id)
  {

    $post = Post::find($id);

    $post->delete();
    return redirect()->route('post.post');

  }

}
