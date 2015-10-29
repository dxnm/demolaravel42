@extends('layouts.master')

@section('title', 'Create user')

@section('content')
        <h1>Create user</h1>
        {{ HTML::ul($errors->all()) }}
        
        {{ Form::open(array('url' => 'user/store')) }}
        <div>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}
        </div>
        <div>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        </div>
        <div>
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email') }}
        </div>
        <div>
            {{ Form::submit('Create') }}
        </div>
        {{ Form::close() }}
    </body>
</html>
@stop