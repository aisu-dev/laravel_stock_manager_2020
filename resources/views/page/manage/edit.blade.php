@extends('layouts.mainlayout')
@section('title', 'Edit Profile')
@section('content')
    <div class="container">
        <h1>Edit Profile</h1>
        {!! Form::open(['url'=>'/emp/edit/store','method'=>'post']) !!}
        {!! Form::hidden('id',$data->id) !!}
        <div class="form-group">
            {!! Form::label('uname', 'Username:', ['class'=>'']) !!}
            {!! Form::text('uname', $data->emp_name, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('address', 'Address:', ['class'=>'']) !!}
            {!! Form::text('address', $data->emp_address, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone', 'Phone:', ['class'=>'']) !!}
            {!! Form::text('phone', $data->emp_phone, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dob', 'Date of Birth:', ['class'=>'']) !!}
            {!! Form::date('dob', $data->emp_dob, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update', ['class'=>'btn btn-success form-control']) !!}
        </div>


        {!! Form::close() !!}
    </div>

@endsection
