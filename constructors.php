<?php
class Car{
    public $name;
    public $brand;

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