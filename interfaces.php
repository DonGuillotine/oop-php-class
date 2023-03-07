<?php 
// A class that implements an interface must implement all of the interface's method
    interface Animal{
        public function makeSound();
    }

    class Cat implements Animal{
        public function makeSound()
        {
            echo " Meow ";
        }
    }

    class Dog implements Animal {
        public function makeSound()
        {
            echo " Bark ";
        }
    }

    class Cow implements Animal{
        public function makeSound()
        {
            echo " Moo ";
        }
    }

    $cat = new Cat();
    $dog = new Dog();
    $cow = new Cow();
    $animals = array($cat, $dog, $cow);

    foreach($animals as $one_animal){
        $one_animal->makeSound();
    }
?>