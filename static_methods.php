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
            // Static methods can also be called from methods in other classes, must be public
            YourDaysAreNumbered::good_news();
        }
    }

    $it_is_well = new Itiswell();
    $it_is_well->message();


    class domain{
        protected static function getWebsiteName(){
            return "w3schools.com";
        }
    }

    class domainW3 extends domain{
        public $websiteName;
        public function __construct()
        {
            // To call a static method from a child class, use the parent keyword inside the child class.
            $this->websiteName = parent::getWebsiteName();
        }
    }

    $domainW3 = new domainW3();
    echo $domainW3->websiteName;
?>