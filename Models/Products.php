<?php
include_once __DIR__ . '/Categories.php';  //includo la classe categorie

//la classe prodotti avrà tra le variabili anche la categoria che a sua volta sarà una classe
class Products {
   public $name;
   public $price;
   public $description;
   public $image;
   public $category;        //la categoria sarà un oggetto di tipo Categories

    function __construct($_name, $_price, $_description, $_image, Categories $_category) {
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
        $this->image = $_image;
        $this->category = $_category;
    }

}



?>