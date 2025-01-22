<?php
class Product {
   
    private $name;
    private $price;
    private $description;
    private $category;
    private $stock;

   
    public function setProduct($name, $price, $description, $category, $stock) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->stock = $stock;
    }

    
    public function getProductInfo() {
        return "Product Name: $this->name\n" .
               "Price: $this->price\n" .
               "Description: $this->description\n" .
               "Category: $this->category\n" .
               "Stock: $this->stock\n";
    }
}


$product = new Product();
$product->setProduct("towel", 4$, "best towel", "bath sheets", 20);
echo $product->getProductInfo();
?>
