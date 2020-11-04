@extends('layouts.mainlayout')

@section('content')

    <div class="container mt-5 pt-5">
        <h1>Sign In</h1>
        {!! Form::open(['url'=>'/auth/signin','method'=>'POST']) !!}
            <div class="form-group">
                {!! Form::label('uname', 'Username:', ['class'=>'']) !!}
                {!! Form::text('uname', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Password', 'Password:', ['class'=>'']) !!}
                {!! Form::password('pass', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('SignIn', ['class'=>'btn btn-success form-control']) !!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection
