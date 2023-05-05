<?php

    require_once './Models/Product.php';

    class Medicine extends Product {
        protected $type;
        protected $prescription;

        public function __construct(string $name, string $img, string $brand, string $description, Category $category, float $price, string $type, bool $prescription) {

            parent::__construct($name, $img, $brand, $description, $category, $price);
            $this -> type = $type;
            $this -> prescription = $prescription;
        }

        public function getType() {
            return $this->type;
        }

        public function getPrescription() {

            if($this->prescription == true) {
                return 'yes';
            } else {
                return 'no';
            };

        }
    }

?>