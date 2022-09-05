<?php

    include_once __DIR__ . '/products';

    class Accessory extends Product{
        protected $size;
        protected $color;
        protected $animalKind;

        public function __construct ($_name, $_price, $_category, $_size, $_color, $_animalKind) {
            parent:: __construct($_name, $_price, $_category);
            $this -> size = $_size;
            $this -> color = $_color;
            $this -> animalKind = $_animalKind;
        }

        public function getSize () {
            return $this -> size;
        }

        public function getColor () {
            return $this -> color;
        }
        
        public function getAnimalKind () {
            return $this -> animalKind;
        }
    }