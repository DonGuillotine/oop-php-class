<?php
class SimpleInterest{
    public static $value = 50000;
}

echo SimpleInterest::$value;


class Pi{
    public static $value = 3.142;
    public function staticValue()
    {
        // A static property can be accessed from a method in the same class using the self keyword and double colon (::)
        return self::$value;
    }
}

$pi = new Pi();
echo "<br>";
echo $pi->staticValue();


class Money{
    public static $value = 900;
}

class Naira extends Money{
    public function useless(){
        // To call a static property from a child class, use the parent keyword inside the child class
        return parent::$value;
    }
}
?>