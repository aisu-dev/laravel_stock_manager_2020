@extends('layouts.mainlayout')
@section('content')
    <div class="container">
        <!--<h1>Page - Create Product</h1>-->
        <h1>Adding Product</h1>
        {{-- 'action' =>'ProductsController', --}}
        {!! Form::open(['action' =>'ProductsController@create', 'method' => 'POST']) !!}
            <div class="form-group">
                <strong>{!!Form::label('Product name: ')!!}</strong>
                {!!Form::text('pname')!!}</br>

                <strong>{!!Form::label('Product image link: ')!!}</strong>
                {{Form::text('pimg')}}</br>

                <strong>{!!Form::label('Product type')!!}</strong>
                {!!Form::select('type', ['1' => 'Furniture','2' => 'Clothing', '3' => 'Technology'])!!}</br>

                <strong>{!!Form::label('Product description: ')!!}</strong></br>
                {!!Form::textarea('pdes',null,['style' => 'resize:none'])!!}</br>

                <strong>{!!Form::label('Product price: ')!!}</strong>
                {!!Form::text('pprice')!!}
                {!!Form::label('  THB')!!}</br>

                <strong>{!!Form::label('Product amount: ')!!}</strong>
                {!!Form::number('pamount')!!}</br>
                {!!Form::submit('Submit!')!!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection
