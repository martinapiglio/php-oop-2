<?php

    class Food extends Product {
        public $type;

        public function __construct(string $name, string $img, string $brand, string $description, string $category, int $price, string $type) {

            parent::__construct($name, $img, $brand, $description, $category, $price);
            $this -> type = $type;
        }
    }

?>