@extends('layouts.admin')

@section('content')    
    <h1>Edit Product</h1>
        
            {!! Form::open(['action' => ['ProductsController@update', $products->id], 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}
            <div class="form-group">
                    {{Form::label('name', 'Name :')}}
                    {{Form::text('name', $products->name,
                        ['class' => 'form-control',
                        'placeholder' => 'Name'])}}
            </div>
    
            <div class="form-group">
                    {{Form::label('category', 'Category : ')}}
                    {{Form::select('category', 
                    ['Bracket','Hanger', 'Manekin', 'Rak', 'Lainnya'], null, 
                    ['placeholder' => 'Product Category'])}}
            </div>
                    
            <div class="form-group">
                    {{Form::label('price', 'Price : ')}}
                    {{Form::number('price', $products->price,
                    ['class' => 'form-control',
                    'placeholder' => 'Price'])}}
            </div>
        
                <div class="form-group">
                    {{Form::label('stock', 'Stock : ')}}
                    {{Form::number('stock', $products->stock,
                         ['class' => 'form-control',
                        'placeholder' => 'Stock'])}}
                </div>
                       
    
                <div class="form-group">
                    {{Form::label('description', 'Description : ')}}
                    {{Form::textarea('description', $products->desc,
                         ['class' => 'form-control',
                        'placeholder' => 'Description'])}}
                </div>
    
                <div class="form-group" width="100">
                    {{Form::label('image', $products->cover_image)}}
                    {{Form::file('cover_image')}}
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