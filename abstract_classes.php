<?php 
    abstract class Car{
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        // An abstract method is a method that is declared, but not implemented in the code.
        // the type and number of required arguments must be the same.
        // the child class may have optional arguments in addition
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


    abstract class ParentClass {
        // Abstract method with an argument
        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass {
        public function prefixName($name){
            if($name == "Donald"){
                $prefix = "Mr.";
            }
            else if($name == "Oscar"){
                $prefix = "Dr.";
            }
            else{
                $prefix = "";
            }
            return "{$prefix} {$name}" . 19;
        }
    }

    $class = new ChildClass;
    echo $class->prefixName("Donald");
    echo "<br>";
    echo $class->prefixName("Oscar");
    echo "<br>";
    echo $class->prefixName("RG");
?>