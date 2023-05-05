<?php

    require_once './Models/Product.php';

    class Toy extends Product {
        protected $color;
        protected $material;

        public function __construct(string $name, string $img, string $brand, string $description, Category $category, float $price, string $color, string $material) {

            parent::__construct($name, $img, $brand, $description, $category, $price);
            $this -> color = $color;
            $this -> material = $material;
        }

        public function getColor() {
            return $this->color;
        }

        public function getMaterial() {
            return $this->material;
       }
    }

?>