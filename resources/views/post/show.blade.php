@extends('layouts.admin')
@section('content')
    <h3 class="mt-3">Post Details</h3>

    <h5> Title : {{$post->title}}</h5>

    <h5>Content : {{$post->content}}</h5>

    <a href="/admin/products/{{$products->id}}/edit" class="btn btn-info">Edit</a>

    {!!Form::open(['action' => ['PostController@destroy', $post->id],
'method' => 'POST', 'class' => 'd-inline p-2']) !!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

    <a href="/post" class="btn btn-primary">Back to list</a>

@endsection
