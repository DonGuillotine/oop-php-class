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


class Goodnews{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

echo "<br>";
$student = new Goodnews("GoodNewsRG", "red");
echo $student->get_name();
echo "<br>";
echo $student->get_color();
?>