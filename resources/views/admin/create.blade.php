@extends('layouts.app')

@section('content')    
    <h1>Add Product</h1>
        
            {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name :')}}
                {{Form::text('name', '',
                    ['class' => 'form-control',
                    'placeholder' => 'Name'])}}
            </div>
            
            <div class="form-group">
            {{Form::label('price', 'Price : ')}}
            {{Form::number('price', '',
            ['class' => 'form-control',
            'placeholder' => 'Price'])}}
            </div>

            <div class="form-group">
                    {{Form::label('description', 'Description : ')}}
                    {{Form::textarea('description', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Description'])}}
            </div>
    
            {{Form::submit('Add', ['class'=>'btn btn-primary'])}}
    
            {!! Form::close() !!}
            
            
{{-- 
            <div class="form-group">
            {{Form::label('stock', 'Stock : ')}}
            {{Form::number('stock', '',
            ['class' => 'form-control',
            'placeholder' => 'Stock'])}}
            </div>
            {!! Form::close() !!}

            <div class="form-group">
            {{Form::label('category', 'Category : ')}}
            {{Form::select('category', ['Manekin', 'Bracket', 'Rak', 'Lainnya'], null, ['placeholder' => 'Product Category'])}}
            </div>
            {!! Form::close() !!}

            <div class="form-group">
            {{Form::label('image', 'Image : ')}}
            {{Form::file('image')}};
            </div>
            {!! Form::close() !!} --}}

            
@endsection

