<?php


class Food extends Products{
    public $caracteristics;  
    public $material;
    public $size;
    public $expiration_date;

    function __construct($_name, $_price, Categories $_category,$_img, $_caracteristics, $_material, $_size, $_expiration_date) {
        parent::__construct($_name, $_price, $_category,$_img);
        $this->caracteristics = $_caracteristics;
        $this->material = $_material;
        $this->size = $_size;
        $this->expiration_date = $_expiration_date;
    }

   
    public function getExpirationDate(){
        return $this->expiration_date;
    }
   
}