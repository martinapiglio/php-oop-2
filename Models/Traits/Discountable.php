<?php

    trait Discountable {

        protected $discount;
    
        public function getDiscount() {
            return $this->discount;
        }

        public function getDiscountedPrice($fullPrice, $discount) {

            if ($discount !== 0) {
                $finalPrice = $fullPrice - ($fullPrice / 100 * $discount);
            } else {
                $finalPrice = $fullPrice;
            }

            return number_format($finalPrice, 2);
        }

    }

?>