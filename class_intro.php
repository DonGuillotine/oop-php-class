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
}

// $apple and $banana are instances of the Fruit class
$apple = new Fruit();
$banana = new Fruit();
$pear = new Fruit();

$apple->set_name('Apple');
$banana->set_name('Banana');
$pear->set_name('Pear');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $pear->get_name();
?>