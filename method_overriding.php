<?php
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

        // Override the constructor
        public function __construct($name, $location, $age)
        {
            $this->name = $name;
            $this->location = $location;
            $this->age = $age;
        }

        // Override the location method
        public function location(){
            echo "{$this->name} is located at {$this->location} and we are {$this->age} years old";
        }
    }

    $nawe = new Nawe("Kodex", "Awka", 90);
    $nawe->location();
    echo "<br>"

    // The Final Keyword
    final class Laptop {
        // some code
    }

    class Phone extends Laptop{
        // some code
    }
?>