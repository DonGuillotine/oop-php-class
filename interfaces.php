<?php 
// A class that implements an interface must implement all of the interface's method
    interface Animal{
        public function makeSound();
    }

    class Cat implements Animal{
        public function makeSound()
        {
            echo "Meow";
        }
    }

    $animal = new Cat();
    $animal->makeSound();
?>