@extends('layouts.mainlayout')

@section('content')
<div class="container">
        <h1>Product Lists</h1>
        {{-- <h2>Table - Product</h2> --}}
        @if(Cookie::get('_posid') == 1)
            <a class="btn btn" style="background-color: #7D4F50; color:white; margin-bottom:10px" role="button" href="{{url('/product/create')}}" >Add product</a>
        @endif
        <div class="form-group">
            {!! Form::open(['action' => 'ProductsController@searchbyname','method' => 'GET']) !!}
                <strong>{!!Form::label('Search Product name')!!}</strong>
                {!!Form::text('search')!!}
                {!!Form::submit('Submit!')!!}
            {!! Form::close() !!}

        </div>

        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';

            if(exist){
                swal(msg, "", "success");
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
                <th>Amount</th>
                @if(Cookie::get('_posid') == 1)
                        <th>
                            Action
                        </th>
                    @elseif(Cookie::get('_posid') == 2)
                    <th>
                        Action
                    </th>
                @endif
            </tr>

            @if(isset($product))
                @foreach ($product as $products)
                <tr>
                    <td>{{ $products->id }}</td>
                    <td><img src="{{ $products->prod_img }}" width="200px" height="200px"></td>
                    <td>{{ $products->prod_name }}</td>
                    <td>
                        @if($products->prod_type==1)
                            Furniture
                        @elseif($products->prod_type==2)
                            Clothing
                        @else
                            Technology
                        @endif

                    </td>
                    <td>{{ $products->prod_descp }}</td>
                    <td>{{ $products->prod_price }} THB</td>
                    <td>{{ $products->created_at }}</td>
                    <td>{{ $products->updated_at }}</td>
                    <td>
                        @if($products->prod_amount <= 0)
                            out of amount
                        @else
                            {{$products->prod_amount}}
                        @endif

                    </td>
                    @if(Cookie::get('_posid') == 1)
                        <td>
                            <a type="button" class="btn btn-outline-primary" style="margin-bottom: 5px" href="product/edit/{{$products->id}}">Edit</a>
                            <a type="button" class="btn btn-outline-danger" href="product/delete/{{ $products->id }}">Delete</a>
                        </td>
                    @elseif(Cookie::get('_posid') == 2)
                    <td>
                        <a type="button" class="btn btn-outline-primary" style="margin-bottom: 5px" href="product/add/{{$products->id}}" onclick="return confirm('Are you sure?')">+</a>
                        <a type="button" class="btn btn-outline-danger" href="product/minus/{{$products->id}}" onclick="return confirm('Are you sure?')">-</a>
                    </td>
                    @endif

                </tr>
                @endforeach
            @endif
        </table>
    </div>
@endsection
