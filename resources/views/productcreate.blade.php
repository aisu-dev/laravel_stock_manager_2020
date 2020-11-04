@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <h1>Product page</h1>
        <h1>Page - Create Product</h1>
        {{-- 'action' =>'ProductsController', --}}
        {!! Form::open(['action' =>'ProductsController@create', 'method' => 'POST']) !!}
            <div class="form-group">
                {!!Form::label('Product name')!!}</br>
                {!!Form::text('pname')!!}</br>

                {!!Form::label('Product image link')!!}</br>
                {{Form::text('pimg')}}</br>

                {!!Form::label('Product type')!!}</br>
                {!!Form::select('type', ['1' => 'Furniture','2' => 'Clothing', '3' => 'Technology'])!!}</br>

                {!!Form::label('Product description')!!}</br>
                {!!Form::textarea('pdes',null,['style' => 'resize:none'])!!}</br>

                {!!Form::label('Product price')!!}</br>
                {!!Form::text('pprice')!!}
                {!!Form::label('  THB')!!}</br>
                    
                {!!Form::submit('Submit!')!!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection