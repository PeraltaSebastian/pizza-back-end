<?php

include_once ("products.class.php");

try{

$pizza_jamon=new Product(12,"Jamon y Morron",19000,"img/jamon_y_morron.jpg",100);

echo "Descripción de la pizza :" . $pizza_jamon->getDescription();
echo "<br>";
echo "El precio de la pizza: ". $pizza_jamon->getPrice();	
echo "<br>";
echo "El stock es de: ". $pizza_jamon->getStock();
$pizza_jamon->setStock(130);
echo "<br>";
echo "El nuevo Stock es : ".$pizza_jamon->getStock();
echo "<br>";
$pizza_jamon->reduceStock(10);
echo "El nuevo stock es de: ". $pizza_jamon->getStock();


}catch(exception $e){
echo "Error del producto...";
}



?>