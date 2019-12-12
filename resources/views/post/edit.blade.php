@extends('layouts.admin')

@section('content')
<h1>Edit Product</h1>
  <form class="" action="{{route('post.update',$post)}}" method="post">
    {{csrf_field()}}
    {{method_field('PATCH')}}
<div class="form-group">
  <label for="">Title : </label>
  <input type="text" class="form-control" name="title" placeholder="Post title" value="{{$post->title}}">
</div>
<div class="form-group">
  <label for="">Content : </label>
  <textarea type="text" class="form-control" rows="10" cols="30" name="content" placeholder="Post content" >{{$post->content}}</textarea>
  <!-- <input type="text" class="form-control" rows="5" cols="30" name="content" placeholder="Post content" value="{{$post->content}}"> -->
</div>
<div class="form-group">
  <input type="submit" class="btn btn-primary" value="Save">
</div>

</form>

<!--
<div class="container">
  <div class="card">

    <div class="panel-body">
      <form class="" action="{{route('post.update',$post)}}" method="post">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
          <label for="">Title</label>
          <br>
          <input type="text" class="form-control" name="title" placeholder="Post title" value="{{$post->title}}">
        </div>


        <div class="form-group">
          <label for="">Content</label>
          <input type="text" class="form-control" rows="5" cols="30" name="content" placeholder="Post content" value="{{$post->content}}">
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Save">
        </div>

      </form>

    </div>
  </div>
</div> -->


@endsection
