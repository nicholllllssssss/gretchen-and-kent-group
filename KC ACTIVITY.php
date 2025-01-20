<?php
class Product {
    // Define properties
    private $name;
    private $price;
    private $description;
    private $category;
    private $stock;

    // Method to set product details
    public function setProduct($name, $price, $description, $category, $stock) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->stock = $stock;
    }

    // Method to get product information
    public function getProductInfo() {
        return "Product Name: $this->name\n" .
               "Price: $this->price\n" .
               "Description: $this->description\n" .
               "Category: $this->category\n" .
               "Stock: $this->stock\n";
    }
}

// Create an object of Product
$product = new Product();
$product->setProduct("towel", 4$, "best towel", "bath sheets", 20);
echo $product->getProductInfo();
?>
