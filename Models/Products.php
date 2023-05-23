<?php
include_once __DIR__ . '/Categories.php';  

class Products
{

    public $name;
    public $price;
    public $category;        //la categoria sarà un oggetto di tipo Categories
    public $img;
    public $discount;

    function __construct($_name, $_price, Categories $_category, $_img, $_discount=0)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->img = $_img;
        $this->discount=$_discount;
    }

    public function setDiscount($_discount)
    {
        if (!is_numeric($_discount)) {
            throw new Exception("Lo sconto deve essere un numero.");
        }
        
        if ($_discount < 0 || $_discount > 50) {
            throw new Exception("Lo sconto deve essere compreso tra 0 e 50.");
        }
    
        $this->discount = $_discount;
    }
    
    
    public function getDiscount() {
        return $this->discount;
    }


}

