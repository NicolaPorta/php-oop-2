<?php 

    require_once __DIR__ . "/Product.php";

    class Smartphone extends Product {

        public $display_dimension;
        public $SoC;
        public $oS;
        public $insurance;

        function __construct($name, $brand, $price, $prime, $oS, $SoC, $display_dimension) {
            parent::__construct($name, $brand, $price, $prime);
            $this->oS = $oS;
            $this->SoC = $SoC;
            $this->display_dimension = $display_dimension;
            $this->getInsurance();
        }

        private function getInsurance() {
            if ($this->oS == "IoS") {
                $this->insurance = "Included (1 year)";
            } else $this->insurance = "Excluded";
        }
    }