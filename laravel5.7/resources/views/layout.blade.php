<!doctype html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mdb.min.css" rel="stylesheet">
        <link href="css/style.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet">
        <title>BDE Exia</title>
    </head>

    
    <body>
        
    
        <header>
            @include('navbar')
        </header>
        
        <main>
            @yield('content')
        </main>
        
            @include('footer')
        


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mdb.min.js"></script>
        <script src="js/all.min.js"></script>
        <script src="js/baguettebox.min.js"></script>
    </body>
</html>


