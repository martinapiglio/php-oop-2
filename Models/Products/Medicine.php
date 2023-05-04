<?php

    class Medicine extends Product {
        public $type;
        public $prescription;

        public function __construct(string $name, string $img, string $brand, string $description, string $category, int $price, string $type, bool $prescription) {

            parent::__construct($name, $img, $brand, $description, $category, $price);
            $this -> type = $type;
            $this -> prescription = $prescription;
        }
    }

?>