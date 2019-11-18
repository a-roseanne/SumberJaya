@extends('layouts.app')

@section('content')    
    <h1>Edit Product</h1>
        
            {!! Form::open(['action' => ['ProductsController@update', $products->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name :')}}
                {{Form::text('name', $products->name,
                    ['class' => 'form-control',
                    'placeholder' => 'Name'])}}
            </div>
            
            <div class="form-group">
            {{Form::label('price', 'Price : ')}}
            {{Form::number('price', $products->price,
            ['class' => 'form-control',
            'placeholder' => 'Price'])}}
            </div>

            <div class="form-group">
                    {{Form::label('description', 'Description : ')}}
                    {{Form::textarea('description', $products->desc,
                        ['class' => 'form-control',
                        'placeholder' => 'Description'])}}
            </div>
            
            {{Form::hidden('_method', 'PUT')}}

            {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    
            {!! Form::close() !!}

@endsection