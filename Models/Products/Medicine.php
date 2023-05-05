<?php

    require_once './Models/Product.php';
    require_once './Models/Traits/Discountable.php';

    class Medicine extends Product {
        protected $type;
        protected $prescription;
        use Discountable;

        public function __construct(string $name, string $img, string $brand, string $description, Category $category, float $price, string $type, bool $prescription, int $discount) {

            parent::__construct($name, $img, $brand, $description, $category, $price);
            $this -> type = $type;
            $this -> prescription = $prescription;
            $this -> discount = $discount;
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