<!doctype html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mdb.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet">
        <title>BDE Exia</title>
    </head>

    
    <body>
        <header>
            <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </header>
        
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        
            <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
    </body>
</html>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/all.min.js"></script>