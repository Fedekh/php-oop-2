<?php
include_once __DIR__ . '/Categories.php';  //includo la classe Categories
//la classe prodotti avrà tra le variabili anche la categoria che a sua volta sarà una classe
class Products {
   public $name;
   public $price;
   public $category;        //la categoria sarà un oggetto di tipo Categories
   public $img;
   private $discount = 0;   //lo sconto è privato perchè non deve essere modificato dall'esterno

    function __construct($_name, $_price, Categories $_category, $_img) {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->img = $_img;
    }

    public function setDiscount($_discount) {
        if ($_discount < 0 || $_discount > 50) {
            throw new Exception("Lo sconto deve essere compreso tra 0 e 50."); // Lancio dell'eccezione in caso di sconto non valido
        }

        $this->discount = $_discount;
    }

    public function getDiscount() {
        return $this->discount;
    }
   
}


?>