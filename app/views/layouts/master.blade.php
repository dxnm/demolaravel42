<html>
    <head>
        <title>App Name - @yield('title')</title>
        {{HTML::style('css/style.css') }}
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>