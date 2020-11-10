@extends('layouts.mainlayout')
@section('title', 'Edit Product')
@section('content')
<div class="container">

    {{-- <h1>Product page</h1> --}}
        <h1>Edit Product</h1>
        @if(isset($product))
            @foreach ($product as $products)
                {!! Form::open(['action' =>['ProductsController@update',$products->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    <strong>{!!Form::label('Product image')!!}</strong></br>
                    <img src="{{ $products->prod_img }}" alt="image" width="200px" height="200px"></br>
                    <strong>{!!Form::label('Product image link: ')!!}</strong>
                    {!!Form::text('pimg',$products->prod_img)!!}</br>

                    <strong>{!!Form::label('Product name: ')!!}</strong>
                    {!!Form::text('pname',$products->prod_name)!!}</br>

                    <strong>{!!Form::label('Product type: ')!!}</strong>
                    {!!Form::select('type', ['1' => 'Furniture','2' => 'Clothing', '3' => 'Technology'], $products->prod_type)!!}</br>

                    <strong>{!!Form::label('Product description:')!!}</strong></br>
                    {!!Form::textarea('pdes',$products->prod_descp,['style' => 'resize:none', 'key'=>'das'])!!}</br>

                    <strong>{!!Form::label('Product price: ')!!}</strong>
                    {!!Form::text('pprice',$products->prod_price)!!}
                    {!!Form::label('  THB')!!}</br>

                    <strong>{!!Form::label('Product price: ')!!}</strong>
                    {!!Form::number('pamount',$products->prod_amount)!!}</br>

                    {!!Form::submit('Save')!!}
                </div>
                {!! Form::close() !!}
            @endforeach
        @endif

    {{-- 'action' =>'ProductsController', --}}
</div>

@endsection
