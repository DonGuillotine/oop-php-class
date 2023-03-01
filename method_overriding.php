<?php

use Nawe as GlobalNawe;

      class Kodex {
        public $name;
        public $location;

        public function __construct($name, $location){
            $this->name = $name;
            $this->location = $location;
        }

        public function location(){
            echo "{$this->name} is located at {$this->location}";
        }
    }

    class Nawe extends Kodex{
        public $age;

        public function __construct($name, $location, $age)
        {
            $this->name = $name;
            $this->location = $location;
            $this->age = $age;
        }

        public function location(){
            echo "{$this->name} is located at {$this->location} and we are {$this->age} years old";
        }
    }

    $nawe = new Nawe("Kodex", "Awka", 90);
    $name->location();
?>