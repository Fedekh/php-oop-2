<?php

include_once __DIR__ . '/Products.php';

class Toys extends Products {
      public $caracteristics;  
      public $material;
      public $size;
    
    function __construct($_name, $_price, $_category, $_caracteristics, $_material, $_size) {
        parent::__construct($_name, $_price, $_category);
        $this->caracteristics = $_caracteristics;
        $this->material = $_material;
        $this->size = $_size;
    }
    
        
    
}