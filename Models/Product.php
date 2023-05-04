<?php

class Product {
    public $name;
    public $img;
    public $brand;
    public $description;
    public $category;
    public $price;

    public function __construct(string $name, string $img, string $brand, string $description, string $category, int $price) {
        $this -> name = $name;
        $this -> img = $img;
        $this -> brand = $brand;
        $this -> description = $description;
        $this -> category = $category;
        $this -> price = $price;
    }

}

?>