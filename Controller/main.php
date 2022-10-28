<?php
require('item.class.php');
require('shoppingCart.class.php');
require('freshItem.class.php');


$item = new Item("corn flakes", 500, 5);

$item->showItem();echo '<br>';

 $chewingGum = new Item("chewing gum",402, 2);
 $chewingGum->showItem();

 $freshItem = new FreshItem("lait", 303, 1, 14102022);


$shoppingCart = new ShoppingCart();
$shoppingCart->addItem($item);
$shoppingCart->addItem($chewingGum);
$shoppingCart->addItem($freshItem);
$shoppingCart->toStirng();
// echo '<br>';




?>
