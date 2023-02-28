<?php 
class Oscar{
    public $name;
    public $glasses;

    function __construct($name)
    {
        $this->name = $name;
    }

    function __destruct()
    {
        echo "His name is {$this->name}";
    }
}

$student = new Oscar("Oscar");
?>