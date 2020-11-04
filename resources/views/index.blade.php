@extends('layouts.mainlayout')

@section('content')
<div class="container">
        <h1>Page - Product Lists</h1>
        <h2>Table - Product</h2>
        <a class="btn btn-primary" role="button" href="{{url('/product/create')}}">Add product</a>

        <div class="form-group">
            {!! Form::open(['action' => 'ProductsController@searchbyname','method' => 'GET']) !!}
                {!!Form::label('Search Product name')!!}</br>
                {!!Form::text('search')!!}</br>
                {!!Form::submit('Submit!')!!}
            {!! Form::close() !!}

            {{-- <a type="button" class="btn btn-outline-dark" role="button" href="{{url('product/1')}}">Furniture</a>
            <a type="button" class="btn btn-outline-dark" role="button" href="{{url('product/2')}}">Clothing</a>
            <a type="button" class="btn btn-outline-dark" role="button" href="{{url('product/3')}}">Technology</a> --}}

        </div>

        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
            alert(msg);
            }
        </script>

        <table>
            <tr>
                <th>#</th>
                <th>Product Image</th>
                <th>Product name</th>
                <th>Product type</th>
                <th>Product description</th>
                <th>Product price</th>
                <th>Created at</th>
                <th>Last updated</th>
            </tr>
            
            
            @if(isset($product))
                @foreach ($product as $products)
                <tr>
                    <td>{{ $products->id }}</td>
                    <td><img src="{{ $products->prod_img }}" width="300px" height="300px"></td>

                    <td>{{ $products->prod_name }}</td>
                    <td>{{ $products->prod_type }}</td>
                    <td>{{ $products->prod_descp }}</td>
                    <td>{{ $products->prod_price }} THB</td>
                    <td>{{ $products->created_at }}</td>
                    <td>{{ $products->updated_at }}</td>
                    <td>
                        <a type="button" class="btn btn-outline-primary" href="product/edit/{{$products->id}}">Edit</a>  
                        <a role="button" class="btn btn-outline-danger" href="product/delete/{{ $products->id }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            @endif
        </table>
    </div>
@endsection