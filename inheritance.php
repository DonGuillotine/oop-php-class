<?php
    class Friut{
        public $name;
        public $color;

        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }

    class Orange extends Friut{
        public function message(){
            echo "Am I fruit or a Vegetable? ";
        }
    }

    $orange = new Orange("Orange", "red");
    $orange->message();
    $orange->intro();
?>