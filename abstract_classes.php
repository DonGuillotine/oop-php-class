<?php 
    abstract class Car{
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        abstract public function intro() : string;
    }

    // Child Classes
    class Audi extends Car{
        public function intro() : string {
            return "Choose Nigerian quality! I'm an $this->name";
        }
    }

    class Volvo extends Car {
        public function intro() : string {
            return "Proud to be Swedish! I'm a $this->name";
        }
    }

    class Toyota extends Car {
        public function intro() : string {
            return "Proud to be Japanise! I'm a $this->name";
        }
    }

    $audi = new Audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo = new Volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $toyota = new Toyota("Toyota");
    echo $toyota->intro();
    echo "<br>";
?>