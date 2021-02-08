<?php  

    require_once __DIR__ . "/Product.php";

    class Notebook extends Product {

        public $display_dimension;
        public $system;
        public $RAM;

        function __construct($name, $brand, $price, $prime, $system, $RAM, $display_dimension) {
            parent::__construct($name, $brand, $price, $prime);
            $this->system = $system;
            $this->RAM = $RAM;
            $this->display_dimension = $display_dimension;
        }

        public function getGift() {
            if ($this->system == "Ubuntu 20.04") {
                return "Mouse wireless included";
            } else {
                $this->price = $this->price - 1.00;
                return "Final price: ". number_format($this->price, 2). "€";
            }
        }
    }