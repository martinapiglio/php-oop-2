<?php

    require_once __DIR__ . "/Category.php";
    class Product {
        public $name;
        public $img;
        public $brand;
        public $description;
        protected $category;
        protected $price;

        public function __construct(string $name, string $img, string $brand, string $description, Category $category, float $price) {
            $this -> name = $name;
            $this -> img = $img;
            $this -> brand = $brand;
            $this -> description = $description;
            $this -> category = $category;
            $this -> price = $price;
        }

        public function getPrice() {
            return number_format($this->price, 2) . ' €';
        }

        public function getCategory() {
            return $this->category;
        }
    }

?>