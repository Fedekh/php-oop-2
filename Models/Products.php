<?php
include_once __DIR__ . '/Categories.php';  //includo la classe categorie

//la classe prodotti avrà tra le variabili anche la categoria che a sua volta sarà una classe
class Products {
   public $name;
   public $price;
   public $category;        //la categoria sarà un oggetto di tipo Categories
   public $img;

    function __construct($_name, $_price, Categories $_category, $_img) {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->img = $_img;
    }

}



?>