@extends('layouts.mainlayout')

@section('content')
    <h1>Page - Product Lists</h1>
    <h2>Table - Product</h2>
    <a id="create" class="btn btn-primary" role="button" href="{{url('/product/create')}}">Add product</a>
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
                <td>{{ $products->prod_name }}</td>
                <td>{{ $products->prod_type }}</td>
                <td>{{ $products->prod_descp }}</td>
                <td>{{ $products->prod_price }} THB</td>
                <td>{{ $products->created_at }}</td>
                <td>{{ $products->updated_at }}</td>
                <td>
                    <a type="button" class="btn btn-outline-primary"href="product/edit/{{$products->id}}">Edit</a>  
                    <a role="button" class="btn btn-outline-danger" href="delete/{{ $products->id }}">Delete</a>
                </td>
            </tr>
            @endforeach
        @endif
        
    </table>
@endsection