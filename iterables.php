<?php
// The iterable keyword can be used as a data type of a function argument
    function printIterable(iterable $myIterable){
        foreach($myIterable as $item){
            echo $item;
        }
    }

    // An iterable is any value which can be looped through with a foreach() loop.
    $array_students = ["Spunky", "Oscar", "GoodNews"];
    printIterable($array_students);

// The iterable keyword can be used as the return type of a function
    function getIterable():iterable{
        return ["Apple", "Banana", "Kiwi"];
    }

    $myIterable = getIterable();
    foreach($myIterable as $item){
        echo $item;
    }
?>