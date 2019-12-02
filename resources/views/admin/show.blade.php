@extends('layouts.admin')
@section('content')    
    <h3 class="mt-3">Product Details</h3>
    
    <h5>Name : {{$products->name}}</h5>

    <img width="500" src="/storage/cover_images/{{$products->cover_image}}" >

    <h5>Price : {{$products->price}}</h5>

    <h5>Stock : {{$products->stock}}</h5>

    <h5>Description : {{$products->desc}}</h5>

    <a href="/admin/products/{{$products->id}}/edit" class="btn btn-info">Edit</a>

    {!!Form::open(['action' => ['ProductsController@destroy', $products->id], 
'method' => 'POST', 'class' => 'd-inline p-2']) !!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

    <a href="/admin/products" class="btn btn-primary">Back to list</a>

@endsection

