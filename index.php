<?php
include_once 'Models/Products.php';
include_once 'Models/Toys.php';
include_once 'Models/Food.php';
include_once 'Models/Kennel.php';

$cane=new Categories('cane');
$gatto=new Categories('gatto');

var_dump($cane) . '<br>';
var_dump($gatto) . '<br>';

$ball=new Toys('pallina', 5, $cane, 'colorata', 'gomma', 'piccola');
var_dump($ball) . '<br>';

$crocchetta=new Food('crocchetta', 10, $cane, 'secca', 'con pollo');
var_dump($crocchetta) . '<br>';

$cuccia=new Kennel('cuccia', 50, $cane, 'con cuscino', 'plastica', 'grande');
var_dump($cuccia) . '<br>';


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
    
</body>
</html>