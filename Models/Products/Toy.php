<?php

    class Toy extends Product {
        public $color;
        public $material;

        public function __construct(string $name, string $img, string $brand, string $description, string $category, int $price, string $color, string $material) {

            parent::__construct($name, $img, $brand, $description, $category, $price);
            $this -> color = $color;
            $this -> material = $material;
        }
    }

?>