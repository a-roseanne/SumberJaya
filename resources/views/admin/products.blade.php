@extends('layouts.admin')

@section('title')
Products    
@endsection

@section('content')    
    <div class="float-right">
    <a href="/admin/products/create" class="btn btn-primary">Add Product</a>
    </div>
    
    @if(count($products) > 0)
        <table class="table table-hover, mt-2">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Image</th>
                <th scope="col">Stock</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
        @foreach($products as $p)
        
            <tbody>
                <tr>
                <th scope="row"><a href="/admin/products/{{$p->id}}">{{$p->name}}</a></th>
                  <td>{{$p->price}}</td>
                  <td>
                      @if ($p->category== 0)
                        <p>Manekin</p> 
                      @elseif ($p->category == 1)
                        <p>Bracket</p> 
                      @elseif ($p->category == 2)
                        <p>Rak</p>
                      @else
                        <p>Lain - Lain</p>
                      @endif
                  </td>
                  <td>
                    <img height="100" src="/storage/cover_images/{{$p->cover_image}}" >
                  </td>
                  <td>{{$p->stock}}</td>
                <td>
                  <a href="/admin/products/{{$p->id}}/edit" class="btn btn-info">Edit</a>

                  {!!Form::open(['action' => ['ProductsController@destroy', $p->id], 
            'method' => 'POST', 'class' => 'd-inline p-2']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
                </td>

                </tr>
            </tbody>
            
                
        @endforeach
        </table>
        {{$products->links()}}
    @else
        <br>
        <h4>Whoops!</h4>
        <h5>No Product Found </h5>
    @endif

@endsection

