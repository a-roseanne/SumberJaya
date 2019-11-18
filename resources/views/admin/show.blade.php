@extends('layouts.app')
@section('content')    
    <h3 class="mt-3">Product Details</h3>


    <h2>Admin </h2>
    
    <h5>Name : {{$products->name}}</h5>

    <h5>Price : {{$products->price}}</h5>


    <a href="/admin/products" class="btn btn-primary">Back to list</a>

@endsection

