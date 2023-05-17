<?php


class Accessories extends Products {
      public $caracteristics;  
      public $material;
    
    function __construct($_name, $_price, Categories $_category,$_img, $_caracteristics, $_material) {
        parent::__construct($_name, $_price, $_category, $_img);
        $this->caracteristics = $_caracteristics;
        $this->material = $_material;
    }
    
        
    
}