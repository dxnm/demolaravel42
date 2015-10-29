@extends('layouts.master')

@section('title', 'Edit user')

@section('content')
        <h1>Edit user</h1>
        {{ HTML::ul($errors->all()) }}
        
        {{ Form::open(array('url' => 'user/update/'.$data->id)) }}
        <div>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username',$data->username) }}
        </div>
        <div>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        </div>
        <div>
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email',$data->email) }}
        </div>
        <div>
            {{ Form::submit('Edit') }}
        </div>
        {{ Form::close() }}
    </body>
</html>
@stop