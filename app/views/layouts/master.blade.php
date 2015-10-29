<html>
    <head>
        <title>@yield('title') - Demo Laravel 4.2</title>
        {{HTML::style('css/style.css') }}
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>