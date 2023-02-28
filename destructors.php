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
echo "<br>";

class Donald{
    public $name;
    public $role;

    function __construct($name, $role)
    {
        $this->name = $name;
        $this->role = $role;
    }

    function __destruct()
    {
        echo "Hello, my name is {$this->name} and my role is a {$this->role}";
    }
}

echo "<br>";
$staff = new Donald("Donald", "Backend Instructor");
?>