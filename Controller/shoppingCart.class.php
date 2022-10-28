<?php

class ShoppingCart{
  
    private static $numeroSerie;
    public static  $nbPaniers = 0;
    private  $id = 0;

      public function __construct(){
        self::$nbPaniers++;
        $this->id = self::$nbPaniers;
      }
      public function getNumeroSerie(){
        return $this->numeroSerie;
    }

    public function getId(){
        return $this->id;
    }


      public function addItem($item){
        $weight = $item->getWeight();
        if ($weight < 10000 )
        {
            $this->items[] = $item;
        } 
        else 
        {
           echo "article de plus de 10 kilos <br>";
        }
      }

      public function removeItem($item){
          $index = array_search($item, $this->items);
          if($index !== false)
          {
              unset($this->items[$index]);
              return true;
          } 
          else 
          {
            return false;
          }
      }
  
      public function getItems(){
          return $this->items;
      }
  

      public function itemCount(){
          return count($this->items);
      }

      public function TotalPrice(){
        $totalPrice = 0;
        foreach($this->items as $item){
            $totalPrice += $item->getPrice();
        }
        return $totalPrice;
    }


      public function toStirng(){
        echo '<br> ToString:  <br> ID: ' . $this->id . '<br>';
        echo 'Votre panier contient : ' . $this->itemCount() . ' article <br>';
          foreach($this->items as $item){
              $item->showItem();
              echo ',<br>';
          }
      }
  
}