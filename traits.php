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
?>