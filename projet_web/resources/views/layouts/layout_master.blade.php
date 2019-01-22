<!doctype html>
<html lang=fr>
<head>

    <title>@yield('titre')</title>

    <meta charset="UTF-8">



</head>
    <body>
    @section('navbar')
        <div class="container">
                @yield('content')
        </div>
    @section('footer')
    </body>
</html>