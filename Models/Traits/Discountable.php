<?php

    trait Discountable {

        protected $discount;

        public function setDiscount($discount) {

            if (!($discount < 10) && !($discount > 50)) {
                $this->discount = $discount;
            } else {
                throw new Exception("Please insert a valid discount number, between 10 and 50");
            };
        }    

        public function getDiscount() {
            return $this->discount;
        }

        public function getDiscountedPrice($fullPrice, $discount) {

            if ($discount !== 0) {
                $finalPrice = $fullPrice - ($fullPrice / 100 * $discount);
            } else {
                $finalPrice = $fullPrice;
            }

            return number_format($finalPrice, 2) . ' €';
        }

    }

?>