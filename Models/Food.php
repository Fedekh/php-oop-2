<?php

include_once __DIR__ . '/Products.php';

class Food extends Products{
    public $type;
    public $caracteristics;  

    function __construct($_name, $_price, Categories $_category,$_img, $_type, $_caracteristics) {
        parent::__construct($_name, $_price, $_category,$_img);
        $this->type = $_type;
        $this->caracteristics = $_caracteristics;
    }
           
    

    
}