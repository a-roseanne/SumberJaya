@extends('layouts.visitor')

<div class="super_container">
@section('content')    

    <h3 class="mt-3" >Product Details</h3>

    <h5>Name : {{$products->name}}</h5>
    <img width="500" src="/storage/cover_images/{{$products->cover_image}}" >

    <h5>Price : {{$products->price}}</h5>

    <h5>Stock : {{$products->stock}}</h5>

    <h5>Description : {{$products->desc}}</h5>

@endsection
</div>
