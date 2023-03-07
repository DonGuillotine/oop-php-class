<?php 
    class Wakanda{
        public static function welcome(){
            echo "Welcome to Wakanda";
        }
    }

    // Class instanciation not required
    // Call static method
    Wakanda::welcome();

    class Donald{
        public static function my_name(){
            echo "Hey there I'm Donald";
        }

        public function __construct()
        {
            // A static method can be accessed from a method in the same class using the self keyword and double colon (::)
            self::my_name();
        }
    }

    new Donald();

    class YourDaysAreNumbered{
        public static function good_news(){
            echo "Your days are numbered";
        }
    }

    class Itiswell{
        public function message(){
            YourDaysAreNumbered::good_news();
        }
    }
?>