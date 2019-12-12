@extends('layouts.admin')

@section('title')
Posts
@endsection

@section('content')
<div class="float-right">
  <a href="/admin/post/create" class="btn btn-primary">Add Post</a>
</div>

@if(count($post) > 0)
<table class="table table-hover, mt-2">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
    </tr>
  </thead>
  @foreach($post as $p)
  <tbody>
    <tr>
      <th scope="row"><a href="/post/{{$p->id}}">{{$p->title}}</a></th>
      <td >
        <p>{{$p->content}}</p>
      </td>
      <td >
        <a href="/admin/post/{{$p->id}}/edit" class="btn btn-info">Edit</a>
        <a href="/admin/post/{{$p->id}}/delete" class="btn btn-info">Delete</a>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
@else
<br>
<h4>Whoops!</h4>
<h5>No Post Found </h5>
@endif

@endsection
