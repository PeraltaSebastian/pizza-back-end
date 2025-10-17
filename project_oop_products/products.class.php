
<?php
class Product{

private int $id;
private string $description;
private float $price;
private string $image;
private int $stock;

public function __construct(int $id,string $description,float $price,string $image,int $stock){ //se autoinvocacuando se lo necesite
  $this->id=$id; //a la propiedad declarada en linea 6 le asigno el parametro id de la linea 4
  $this->description=$description;
  $this->price=$price;
  $this->image=$image;
  $this->stock=$stock;
}

public function getDescription():string{ //estos métodos se llaman getters
  return $this->description;
}

public function getPrice():float{ 
	return $this->price;
}

public function getStock():int{ 
	return $this->stock;
}  

public function setStock(int $stock): void
{
   if ($stock < 0) {
        throw new InvalidArgumentException("El stock no puede ser negativo"); //si menor lanza el mensaje 
   }
   $this->stock = $stock; //sino asigna el stock
}


// Métodos de negocio

public function hasStock(int $quantity):bool
{

return $this->stock>$quantity;
}

public function reduceStock(int $quantity): void {
if (!$this->hasStock($quantity)) {
            throw new RuntimeException("Stock insuficiente. Disponible: {$this->stock}");
}
  $this->stock -= $quantity; // $this->stock=$this->stock-$quantity
}

public function addStock(int $quantity): void {
  if ($quantity <= 0) {
            throw new InvalidArgumentException("La cantidad debe ser positiva");
        }


}

}
?>


