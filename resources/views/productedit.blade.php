@extends('layouts.mainlayout')

@section('content')
<div class="container">

    <h1>Product page</h1>
        <h1>Page - Edit Product</h1>
        @if(isset($product))
            @foreach ($product as $products)
                {!! Form::open(['action' =>['ProductsController@update',$products->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {!!Form::label('Product image')!!}</br>
                    <img src="{{ $products->prod_img }}" alt="image" width="300px" height="300px"></br>
                    {!!Form::label('Product image link')!!}</br>
                    {!!Form::text('pimg',$products->prod_img)!!}</br>

                    {!!Form::label('Product name')!!}</br>
                    {!!Form::text('pname',$products->prod_name)!!}</br>

                    {!!Form::label('Product type')!!}</br>
                    {!!Form::select('type', ['1' => 'Furniture','2' => 'Clothing', '3' => 'Technology'], $products->prod_type)!!}</br>

                    {!!Form::label('Product description')!!}</br>
                    {!!Form::textarea('pdes',$products->prod_descp,['style' => 'resize:none', 'key'=>'das'])!!}</br>

                    {!!Form::label('Product price')!!}</br>
                    {!!Form::text('pprice',$products->prod_price)!!}
                    {!!Form::label('  THB')!!}</br>

                    {!!Form::submit('Submit!')!!}
                </div>
                {!! Form::close() !!}
            @endforeach
        @endif

    {{-- 'action' =>'ProductsController', --}}
</div>

@endsection