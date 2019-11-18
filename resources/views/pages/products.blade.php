@extends('layouts.visitor')

@section('content')    
<h3 class="mt-3">Products</h3>

    @if(count($products) > 0)
        @foreach($products as $p)
        <div class="card, d-inline-block" style="width: 18rem; margin-right:15px; border-radius:10px">
                <img src="{{asset('img/p.jpg')}}" class="card-img-top" width="180" height="286">
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