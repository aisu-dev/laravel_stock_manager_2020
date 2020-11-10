@extends('layouts.mainlayout')
@section('title', 'Sign up')
@section('content')
    <div class="container">
        <h1>Sign Up</h1>
        {!! Form::open(['url'=>'/auth/signup']) !!}
            <div class="form-group">
                {!! Form::label('uname', 'Username:', ['class'=>'']) !!}
                {!! Form::text('uname', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Password', 'Password:', ['class'=>'']) !!}
                {!! Form::password('pass', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('address', 'Address:', ['class'=>'']) !!}
                {!! Form::text('address', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('phone', 'Phone:', ['class'=>'']) !!}
                {!! Form::text('phone', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('dob', 'Date of Birth:', ['class'=>'']) !!}
                {!! Form::date('dob', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('SignUp', ['class'=>'btn btn-success form-control']) !!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection
