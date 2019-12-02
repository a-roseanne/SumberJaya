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
            <li class="active"><a href="category.html">Bracket</a></li>
            <li><a href="category.html">Hanger</a></li>
            <li><a href="category.html">Manekin</a></li>
            <li><a href="category.html">Rack</a></li>
            <li><a href="category.html">Lainnya</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="super-container mt-5 ml-4" >
    @if(count($products) > 0)
        @foreach($products as $p)
        <div class="card, d-inline-block" style="width: 18rem; margin-right:15px; border-radius:10px">
                <img src="/storage/cover_images/{{$p->cover_image}}" class="card-img-top" width="180" height="286">
                <div class="card-body">
                  <h5 class="card-title">{{$p->name}}</h5>
                  <p class="card-text">Rp {{$p->price}}</p>
                  <a href="/products/{{$p->id}}" class="btn btn-primary">Details</a>
                </div>
              </div>
        @endforeach
        </table>
    @else
        <h5>Nothing here . . </h5>
    @endif
@endsection
</div>