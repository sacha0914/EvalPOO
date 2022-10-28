<?php

class Item{

    private $name;
    private $price;
    private $weight;


    public function __construct($newName, $newPrice, $newWeight){
        $this->name = $newName;
        $this->price = $newPrice;
        $this->weight = $newWeight;
    }

    public function setName($newName){
        $this->name = $newName;
    }

    public function getName(){
        return $this->name;
    }

    public function setPrice($newPrice){
        $this->price = $newPrice;
    }

    public function getPrice(){
        return $this->price;
    }
    public function setWeight($newweight){
        $this->weight = $newweight;
    }

    public function getWeight(){
        return $this->weight;
    }
    public function showItem(){
        echo $this->name;
        $price = $this->price;
        $price = substr_replace($price, '.', -2, 0);
        $price = " : ". $price . '€';
        echo $price;
        echo " : " . $this->weight . "g";
}

}
