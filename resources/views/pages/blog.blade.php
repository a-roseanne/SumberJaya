@extends('layouts.visitor')


@section('content')

<div class="products">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section_title text-center">Posts</div>
      </div>
    </div>


    <div class="super-container mt-5 ml-4" >




    @if(count($post) > 0)
        @foreach($post as $p)
        <div class="card, d-inline" style="width: 18rem; margin-right:15px; margin-top:15px; border-radius:10px; background-color:whitesmoke">
                <div class="card-body" style="color:black">
                  <h4 class="card-title">{{$p->title}}
                  <!-- <p class="card-text" style="color:black" >{{$p->content}}</p> -->
                  <a href="/post/{{$p->id}}" class="btn btn-primary">See more..</a>
                  </h4>
                </div>
              </div>
        @endforeach
        </table>
    @else
        <h5>Nothing here . . </h5>
    @endif



</div>

@endsection
