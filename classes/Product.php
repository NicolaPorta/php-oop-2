<?php  

    class Product {
        public $name;
        public $price;
        public $prime;
        public $brand;
        public $shipping_cost;

        function __construct($name, $brand, $price, $prime) {
            $this->name = $name;
            $this->brand = $brand;
            $this->price = number_format($price, 2);
            $this->prime = $prime;
            $this->getShippingCost();
        }

        private function getShippingCost() {
           if ($this->prime) {
                $this->shipping_cost = "Free";
            } else $this->shipping_cost = number_format(3, 2); 
        }
    }
