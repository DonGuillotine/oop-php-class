<?php
    trait message_one{
        public function message_first(){
            echo "I love OOP PHP";
        }
    }

    class Welcome{
        // All Methods in the trait will be available in this clas
        use message_one;
    }

    $object = new Welcome();
    $object->message_first();

    // Using Multiple Traits
    trait quote_one{
        public function message_first(){
            echo "Never give up on PHP";
        }
    }

    trait quote_two{
        public function message_second(){
            echo "Eat and Drink PHP";
        }
    }

    class QuoteMaker{
        // All Methods in the trait will be available in this clas
        use quote_one;
    }

    class QuoteMakerSecond{
        // All Methods in the trait will be available in this clas
        use quote_one, quote_two;
    }

    $quotes = new QuoteMaker();
    $quotes->message_first();
    echo "<br>";

    $quotes_two = new QuoteMakerSecond();
    $quotes_two->message_first();
    $quotes_two->message_second();
?>