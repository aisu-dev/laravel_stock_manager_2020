@extends('layouts.mainlayout')
@section('title', 'Edit Account')
@section('content')
    <div class="container">
        <h1>Edit account</h1>
        {!! Form::open( ['url'=>'/admin/edit/store','method'=>'post']) !!}
        {!! Form::hidden('id',$data->id) !!}
        <div class="form-group">
            {!! Form::label('uname', 'Username:', ['class'=>'']) !!}
            {!! Form::text('uname', $data->emp_name, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('upassword', 'Password:', ['class'=>'']) !!}
            {!! Form::text('upassword', $data->emp_password, ['class'=>'form-control']) !!}
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
            {!! Form::label('pos', 'Position:', ['class'=>'']) !!}
            {!! Form::select('pos', [1=>'ADMIN',2=>'NORMAL'], $data->pos_id, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update', ['class'=>'btn btn-success form-control']) !!}
        </div>


        {!! Form::close() !!}
    </div>

@endsection
