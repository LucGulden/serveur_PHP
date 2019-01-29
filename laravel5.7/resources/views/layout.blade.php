<!doctype html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.3.1.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mdb.min.css" rel="stylesheet">
        <link href="css/style.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-html5-1.5.4/b-print-1.5.4/r-2.2.2/datatables.min.css"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-html5-1.5.4/b-print-1.5.4/r-2.2.2/datatables.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/table.js') }}"></script>
        <title>BDE Exia</title>
        <style>
            .success
                {
                    text-align: center;
                    font-family: verdana;
                }
        </style>
    </head>

    
    <body>
        
    
        <header>
            @include('navbar')
        </header>
        
        <main>
            @yield('content')
        </main>
        
            @include('footer')
        


        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mdb.min.js"></script>
        <script src="js/all.min.js"></script>
        <script src="js/baguettebox.min.js"></script>
    </body>
</html>


