<?php

class Product {
    public $name;
    public $img;
    public $brand;
    public $description;
    public $categories;
    public $price;

    public function __construct(string $name, string $img, string $brand, string $description, array $categories, int $price) {
        $this -> name = $name;
        $this -> img = $img;
        $this -> brand = $brand;
        $this -> description = $description;
        $this -> categories = $categories;
        $this -> price = $price;
    }

}

?>