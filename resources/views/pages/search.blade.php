@extends('layouts.visitor')


@section('content')

<div class="products">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section_title text-center">Products</div>
      </div>
    </div>

    <div class="row page_nav_row">
      <div class="col ">
        <div class="page_nav">
          <ul class="d-flex flex-row align-items-start justify-content-center">
            <li class="active"><a href="#">Bracket</a></li>
            <li><a href="#">Hanger</a></li>
            <li><a href="#">Manekin</a></li>
            <li><a href="#">Rack</a></li>
            <li><a href="#">Lainnya</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="super-container mt-5 ml-4" >
      
	@include('inc.message')
    @if(count($products) > 0)
        @foreach($products as $p)
        <div class="card, d-inline-block" style="width: 18rem; margin-right:15px; margin-top:15px; border-radius:10px; background-color:whitesmoke">
                <img src="/storage/cover_images/{{$p->cover_image}}" class="card-img-top" width="180" height="286">
                <div class="card-body" style="color:black">
                  <h4 class="card-title">{{$p->name}}</h4>
                  <p class="card-text" style="color:black" >Rp {{$p->price}}</p>
                  <a href="/add-to-cart/{{$p->id}}" class="btn btn-info">Add to Cart</a>
                  <a href="/products/{{$p->id}}" class="btn btn-primary">Details</a>
                </div>
              </div>
        @endforeach
        </table>
    @else
        <h5>Nothing here . . </h5>
    @endif
</div>

@endsection