@extends('layouts.mainlayout')

@section('content')
    <div class="container mt-5 pt-5">
        <h1>STOCK</h1>
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
                        @if(Cookie::get('_posid') == 1)
                            <a type="button" class="btn btn-outline-primary" href="product/edit/{{$products->id}}">Edit</a>  
                            <a type="button" class="btn btn-outline-danger" href="product/delete/{{ $products->id }}">Delete</a>
                        @elseif(Cookie::get('_posid') == 2)
                            You can adjust amount
                        @else
                            You don't have permission
                        @endif
                    </td>
                </tr>
                @endforeach
            @endif
        </table>
    </div>
@endsection
