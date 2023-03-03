<?php

class Goodbye{
    const MESSAGE = "Thank for joining Kodex!";
}

//  '::' is known as the scope resolution operator
echo Goodbye::MESSAGE;
echo "<br>";

class Welcome{
    const WELCOME_MESSAGE = "Welcome to Kodex Limited 💪🏿";

    public function come_inside(){
        echo self::WELCOME_MESSAGE;
    }
}

$welcome = new Welcome();
$welcome->come_inside();
?>
