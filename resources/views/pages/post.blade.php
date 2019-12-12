@extends('layouts.visitor')

@section('content')
<div class="ml-5">
  <br>
  <br>
  <!-- <a href="{{url('/post')}}" class="btn btn-primary">Back</a> -->
  <h2 class="mt-5" style="color:black">{{$post->title}}</h2>

  <h4 style="color:black ; width:80%">{{$post->content}}</h4>
  <div class="panel panel-default">
    <div class="panel-heading">
      Add Comment
    </div>

    <div class="panel-body"style="width:80%">
      <form class="form-horizontal" action="{{route('post.comment.store' , $post)}}" method="post">
        <textarea class="form-control" method="post" name="message" rows="3" cols="3" placeholder="Comment.."></textarea>
        <div class="form-group">
          <br>
          <input type="submit" class="btn btn-primary" name="" value="Comment">
        </div>
      </form>
    </div>
  </div>
  <br>







</div>

<br>
<br>
@endsection
