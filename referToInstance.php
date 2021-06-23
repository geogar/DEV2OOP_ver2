<?php
    class Person {
        public $first_name;
        public $last_name;

        public function say_hello(){
            return "Hello ". $this->first_name ." " . $this->last_name . ". <br>";
        }
    }

    $person1 = new Person;
    $person1->first_name = "Hinata";
    $person1->last_name = "Hyuga";

    echo $person1->say_hello();

    $person2 = new Person;
    $person2->first_name = "Madara";
    $person2->last_name = "Uchiha";

    echo $person2->say_hello();

    $person3 = new Person;
    $person3->first_name = "Minato";
    $person3->last_name = "Namikaze";

    echo $person3->say_hello();

?>