<?php


class Food extends Products{
    public $type;
    public $caracteristics;  

    function __construct($_name, $_price, Categories $_category,$_img, $_type, $_caracteristics) {
        parent::__construct($_name, $_price, $_category,$_img);
        $this->type = $_type;
        $this->caracteristics = $_caracteristics;
    }
           
    public function getAllFields(){
       $fields = [
        'name' => $this->name,
        'price' => $this->price,
        'category' => $this->category,
        'image' => $this->img,
        'type' => $this->type,
        'caracteristics' => $this->caracteristics
       ];
       return $fields;
       

       }   
}