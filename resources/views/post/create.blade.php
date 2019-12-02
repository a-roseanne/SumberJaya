@extends('layouts.app')

@section('content')
<div class="container">
  <form class="" action="{{route('post.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="">Title</label>
      <input type="text" name="form-control" name="title" placeholder="Post Title">
    </div>

    <div class="form-group">
      <label for="">Content</label>
      <textarea class="form-control" name="Content" rows="5" cols="80" placeholder="Post Content"></textarea>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary " value="Save">
      </div>
  </form>
</div>


@endsection