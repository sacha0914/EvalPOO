<?php
 class FreshItem extends Item {
    private $bestBeforeDate;


    public function __construct($newName, $newPrice, $newWeight, $bestBeforeDate){
        parent::__construct($newName, $newPrice, $newWeight);
    }
    public function getExpirationDate(){
        return $this->bestBeforeDate;
    }



}

 
 
 ?>