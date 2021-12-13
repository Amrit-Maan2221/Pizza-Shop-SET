<?php
 $totalPrice = 10.00;
 $toppings_pepperoni = $_REQUEST["toppings_pepperoni"];
 $toppings_mushrooms = $_REQUEST["toppings_mushrooms"];
 $toppings_green_olives = $_REQUEST["toppings_green_olives"];
 $toppings_green_peppers = $_REQUEST["toppings_green_peppers"];
 $toppings_double_cheese = $_REQUEST["toppings_double_cheese"];
 $totalPrice = $totalPrice + $toppings_pepperoni + $toppings_mushrooms + $toppings_green_peppers + $toppings_green_olives + $toppings_double_cheese;

echo $totalPrice;

 
?>