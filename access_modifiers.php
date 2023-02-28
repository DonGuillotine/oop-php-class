<?php 
    class Food {
        public $name;
        protected $color;
        private $weight;
    }

    $rice = new Food();
    $rice->name = "Jollof Rice";
    $rice->color = 'Red';
    $rice->weight = '50';
?>