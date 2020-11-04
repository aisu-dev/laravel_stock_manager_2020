@extends('layout.layout')

@section('content')

    <div class="container">
        <div class="form-group">
            <a href="/signup"><button class="btn btn-primary form-control">SINGUP</button></a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resp as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->emp_name}}</td>
                        <td>{{$item->emp_phone}}</td>
                        <td>
                            @if ($item->pos_id==1)
                                ADMIN
                            @else
                                NORMAL
                            @endif
                        </td>
                        <td>
                            <a href="{{url('/admin/edit',$item->id)}}"><button class="btn btn-info" >EDIT</button></a>
                            <a href="{{url('/admin/delete',$item->id)}}"><button class="btn btn-danger" >DELETE</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
