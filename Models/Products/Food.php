<?php

    require_once './Models/Product.php';

    class Food extends Product {
        protected $type;

        public function __construct(string $name, string $img, string $brand, string $description, Category $category, float $price, string $type) {

            parent::__construct($name, $img, $brand, $description, $category, $price);
            $this -> type = $type;
        }

        public function getFoodType() {
            return $this->type;
        }
    }

?>