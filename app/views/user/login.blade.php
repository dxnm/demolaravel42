@extends('layouts.master')

@section('title', 'Login')

@section('content')
        <h1>Login</h1>
        {{ HTML::ul($errors->all()) }}
        
        {{ Form::open(array('url' => 'do_login')) }}
        <div>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}
        </div>
        <div>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        </div>
        <div>
            {{ Form::submit('login') }}
        </div>
        {{ Form::close() }}
    </body>
@stop