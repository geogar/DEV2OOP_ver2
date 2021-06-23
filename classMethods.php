<?php
    class Person {
        public $first_name;
        public $last_name;

        public function say_hello(){
            return "Hello World";
        }
    }

    $person1 = new Person;
    $person1->first_name = "Jiraya";
    $person1->last_name = "Uzumaki";

    echo $person1->first_name . " " . $person1->last_name ."<br>";

    echo $person1->say_hello();
?>