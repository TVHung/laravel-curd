<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        @section('header')
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>