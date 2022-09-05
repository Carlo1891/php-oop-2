<?php
    include_once __DIR__ . '/products.php';

    class Food extends Product {
        protected $ingredientsList;
        protected $expirateDate;

        public function __construct ($_name, $_price, $_category, $_ingredientsList, $_expirateDate) {
            parent:: __construct($_name, $_price, $_category);
            $this -> ingredientsList = $_ingredientsList;
            $this -> expirateDate = $_expirateDate;
        }

        public function getIngredientsList () {
            return $this -> ingredientsList;
        }

        public function getExpirateDate () {
            return $this -> expirateDate;
        }
    }
