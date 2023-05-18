<?php

trait Discount{

  private $discount; //default a zero
    
    public function setDiscount($_discount) {
        if (!is_int($_discount)){
            throw new Exception("Lo sconto deve essere un numero intero."); // Lancio dell'eccezione in caso di sconto non valido
        }
        if ($_discount < 0 || $_discount > 50 ) {
            throw new Exception("Lo sconto deve essere compreso tra 0 e 50."); // Lancio dell'eccezione in caso di sconto non valido
        }
        
        $this->discount = $_discount;
    }
    
    public function getDiscount() {
        return $this->discount;
    }
}