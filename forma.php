<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css" >
    <title>Document</title>
    <style>
        body{
            background-image: url("Images/pexels-hasan-albari-1229861.jpg");
            background-size: cover;
            background-position: center;
            overflow-y: hidden;
        }
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
<?php include 'navBar.php';?>
<div class="container mt-5">
    <form  method="get" action="pirmas.php">
        <div class="form-group">
            <label for="formGroupExampleInput">Svoris (kg)</label>
            <input name="x" type="text" class="form-control" id="formGroupExampleInput" placeholder="kg">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Ugis (cm)</label>
            <input name="y" type="text" class="form-control" id="formGroupExampleInput2" placeholder="cm">
        </div>
        <div class="form-group">
            <input type="submit" value="Skaiciuoti" class="form-control btn btn-primary" id="formGroupExampleInput2">
        </div>
    </form>
</div>
</body>
</html>