<?php
class SimpleInterest{
    public static $value = 50000;
}

echo SimpleInterest::$value;


class Pi{
    public static $value = 3.142;
    public function staticValue()
    {
        return self::$value;
    }
}

$pi = new Pi();
echo $pi->staticValue();
?>