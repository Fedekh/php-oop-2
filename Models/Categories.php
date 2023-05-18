<?php
class Categories{
    public $category;
    public $icon;
    
    function __construct($_category, $_icon) { //in questo caso o cane o gatto 
        $this->category = $_category;
        $this->icon = $_icon;
    }
}


