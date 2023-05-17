<?php
include_once __DIR__ . '/Models/Products.php';
include_once __DIR__ . '/Models/Toys.php';
include_once __DIR__ . '/Models/Categories.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Kennel.php';
include_once __DIR__ . '/Models/Accessories.php';
include_once __DIR__ . '/Models/Database.php';

// provo a creare un array di 10 prodotti


// var_dump($products) . '<br>';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body class="text-white">

    <div class="wrapper container text-center">

        <?php
        include_once __DIR__ . '/Layout/Header.php';
        include_once __DIR__ . '/Layout/Main.php'


        ?>

    </div>
</body>

</html>