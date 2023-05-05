<?php

    class Category {

        protected $species;
        protected $icon;

        function __construct(string $species, string $icon) {
        $this->species = $species;
        $this->icon = $icon;
        }

        public function getSpecies() {
            return $this->species;
        }

        public function getIcon() {
            return $this->icon;
        }

    }

?>