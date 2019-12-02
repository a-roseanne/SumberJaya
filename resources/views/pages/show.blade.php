@extends('layouts.visitor')

@section('content')    
<div class="ml-5">
    <br>
    <br>
    <h2 class="mt-5" style="color:black">Product Details</h2>

    <h3 style="color:black">Name : {{$products->name}}</h3>
    <img width="500" src="/storage/cover_images/{{$products->cover_image}}" >

    <h3 style="color:black">Price : {{$products->price}}</h3>

    <h3 style="color:black">Stock : {{$products->stock}}</h3>

    <h3 style="color:black">Description : {{$products->desc}}</h3>

    <a href="#" class="btn btn-info">Add to Cart</a>

    <a href="{{url('/products')}}" class="btn btn-primary">Back</a>

</div>

<br>
<br>
@endsection
