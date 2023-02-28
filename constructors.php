<?php
class Car{
    public $name;
    public $brand;

    // PHP will automatically call this function when you create an object from a class
    function __construct($name)
    {
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$benz = new Car("Mercedes Benz");
echo $benz->get_name();



?>