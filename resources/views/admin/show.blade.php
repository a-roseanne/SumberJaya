@extends('layouts.app')
@section('content')    
    <h3 class="mt-3">Product Details</h3>


    <h2>Admin </h2>
    
    <h5>{{$products->name}}</h5>

    <img width="100" src="/storage/cover_images/{{$products->cover_image}}" >

    <h5>{{$products->price}}</h5>

    
    

    <a href="/admin/products" class="btn btn-primary">Back to list</a>

@endsection

