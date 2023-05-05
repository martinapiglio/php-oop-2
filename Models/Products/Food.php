<?php

    require_once './Models/Product.php';
    require_once './Models/Traits/Discountable.php';

    class Food extends Product {
        protected $type;
        use Discountable;

        public function __construct(string $name, string $img, string $brand, string $description, Category $category, float $price, string $type, int $discount) {

            parent::__construct($name, $img, $brand, $description, $category, $price);
            $this -> type = $type;
            $this -> discount = $discount;
        }

        public function getFoodType() {
            return $this->type;
        }
    }

?>