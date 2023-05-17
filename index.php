<?php
include_once 'Models/Products.php';
include_once 'Models/Toys.php';
include_once 'Models/Food.php';
include_once 'Models/Kennel.php';
include_once 'Models/Accessories.php';


// provo a creare un array di 10 prodotti


$prodotti=[
    new Toys('Giocattolo', 10, new Categories('cane'), 'img', 'caratteristiche', 'materiale', 'dimensioni'),
    new Accessories('Accessori', 10, new Categories('cane'), 'img', 'caratteristiche', 'materiale', 'dimensioni'),
    new Food('Cibo', 10, new Categories('cane'), 'img', 'tipo', 'caratteristiche'),
    new Kennel('Cuccia', 10, new Categories('cane'), 'img', 'caratteristiche', 'materiale', 'dimensioni'),
    new Toys('Giocattolo', 10, new Categories('cane'), 'img', 'caratteristiche', 'materiale', 'dimensioni'),
    new Accessories('Accessori', 10, new Categories('cane'), 'img', 'caratteristiche', 'materiale', 'dimensioni'),
    new Food('Cibo', 10, new Categories('gatto'), 'img', 'tipo', 'caratteristiche'),
    new Kennel('Cuccia', 10, new Categories('cane'), 'img', 'caratteristiche', 'materiale', 'dimensioni'),
    new Toys('Giocattolo', 10, new Categories('pesce'), 'img', 'caratteristiche', 'materiale', 'dimensioni')    
];

var_dump($prodotti) . '<br>';


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <title>Document</title>
</head>
<body>

<div class="wrapper">

    <header>
        <h1>Benvenuto nel nostro negozio per animali</h1>
    </header>
    
</div>
</body>
</html>