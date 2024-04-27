<!DOCTYPE html>
<html>
<?php include 'config.php'?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>User Identity</title>
        <style>
            body{
                background-image: url('assets/image3.jpg');
                background-size: cover;
            }
            form{
            background-color: #fff;
            margin-top: 6em;
            margin-left: 10em;
            margin-right: 30em;
            padding: 30px;
            box-shadow: 5px 5px 3px 5px #888888;
        }
        </style>
    </head>
    <body>
        <div class="container justify-content-center">
            <form method="POST">
                <h1 class="text-primary">Are You Want To Be Hire?</h1><br>
                <a href="career.php"><button type="button" class="btn btn-warning" name="career">Enter Here!</button></a><br><br>
                <h1 class="text-primary">Are You Want To Hire?</h1><br>
                <a href="index.php"><button type="button" class="btn btn-warning" name="index">Enter Here!</button></a><br>
            </form>
        </div>
    </body>
</html>