@extends('layouts.admin')

@section('content')

<h1>Add Post</h1>
<div class="container">

  <form class="" action="{{route('post.store')}}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="">Title</label>
      <input class="form-control" type="text" name="title" placeholder="Post Title">
    </div>

    <div class="form-group">
      <label for="">Content</label>
      <textarea class="form-control" name="content" rows="5" cols="80" placeholder="Post Content"></textarea>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary " value="Save">
      </div>
  </form>

</div>

@endsection
