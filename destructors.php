<?php 
class Oscar{
    public $name;
    public $glasses;

    function __construct($name)
    {
        $this->name = $name;
    }

    // PHP will automatically call this function at the end of the script.
    function __destruct()
    {
        echo "His name is {$this->name}";
    }
}

$student = new Oscar("Oscar");
?>