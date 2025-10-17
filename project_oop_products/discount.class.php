<?php


include_once "products.class.php";

class Discount extends Product{

private float $discountPercentage;

public function __construct(
        int $id,
        string $description,
        float $price,
        int $stock,
        string $image,
        float $discountPercentage
    ) 
    {
         parent::__construct($id, $description, $price, $stock, $image);
         $this->discountPercentage=$discountPercentage;
         
         
         
         
         
    }







}

?>


