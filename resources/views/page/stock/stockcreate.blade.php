@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <h1>Product page</h1>
        <h1>Page - Create Product</h1>
        {{-- 'action' =>'ProductsController', --}}
        {!! Form::open(['action' =>'StockController@create', 'method' => 'POST']) !!}
            <div class="form-group">
                {!!Form::label('Stock amount')!!}</br>
                {!!Form::text('amount')!!}</br>
{{-- 
                {!!Form::label('Product ID')!!}</br>
                {{Form::text('')}}</br> --}}
                    
                {!!Form::submit('Submit!')!!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection