<?php 
    class Food {
        public $name;
        protected $color;
        private $weight;
    }

    $rice = new Food();
    $rice->name = "Jollof Rice";
    $rice->color = "Red";
    $rice->weight = "50";


    class Drink{
        public $name;
        public $category;
        public $brand;

        function set_name($name){
            $this->name = $name;
        }

        protected function set_category($name){
            $this->color = $name;
        }

        private function set_brand($name){
            $this->brand = $name;
        }
    }

    $tea = new Drink();
    $tea->set_name('Green Tea');
    $tea->set_category('Beverage');
    $tea->set_brand('Lipton');
?>