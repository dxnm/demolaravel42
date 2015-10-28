<html>
    <head>
        <title>Login</title>
        <style>
            div{
                display: block;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
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
</html>
