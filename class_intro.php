<?php


class Fruit {
    // Properties
    public $name;
    public $color;

    // Functions
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        return $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
}

// $apple and $banana are instances of the Fruit class
$apple = new Fruit();
$banana = new Fruit();
$pear = new Fruit();
$color = new Fruit();

$apple->set_name('Apple');
$banana->set_name('Banana');
$pear->set_name('Pear');
$color->set_color('Yellow');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $pear->get_name();
echo "<br>";
echo $color->get_color();
echo "<br>";

// Second way of accessing properties (Outside the class)
class Money{
    public $dollars;
}

$pound = new Money();
$pound->dollars = "Naira";

// instanceof keyword checks if an object belongs to a specific class
var_dump($pound instanceof Money);
echo "<br>";

echo $pound->dollars;
















?>