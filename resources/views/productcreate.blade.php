@extends('layouts.mainlayout')

@section('content')
<h1>Product page</h1>
    <h1>Page - Create Product</h1>
    {{-- 'action' =>'ProductsController', --}}
    {!! Form::open(['action' =>'ProductsController@create', 'method' => 'POST']) !!}
        <div class="form-group">
            {!!Form::label('Product name')!!}</br>
            {!!Form::text('pname')!!}</br>

            {!!Form::label('Product type')!!}</br>
            {!!Form::select('type', ['0' => 'default','1' => 'special', '2' => 'super-special'])!!}</br>

            {!!Form::label('Product description')!!}</br>
            {!!Form::textarea('pdes',null,['style' => 'resize:none'])!!}</br>

            {!!Form::label('Product price')!!}</br>
            {!!Form::text('pprice')!!}
            {!!Form::label('  THB')!!}</br>

            {{-- {!!Form::label('Create at')!!}</br>
            {!!Form::date('date', \Carbon\Carbon::now())!!}</br></br> --}}

            {!!Form::submit('Submit!')!!}
        </div>
    {!! Form::close() !!}

@endsection