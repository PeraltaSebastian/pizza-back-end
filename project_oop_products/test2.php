<?php
include_once "products.class.php";
include_once "discount.class.php";

try{

$pizza_roquefort=new Discount(700,"Pizza Roquefort",20000,200,"img/pizza_roquefort.jpg",5);

echo $pizza_roquefort->getDescription();

echo "<br>";

echo $pizza_roquefort->getDiscountPercentage();

}catch(Exception $e){

echo "Hay Error";

}	

?>