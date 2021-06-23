<?php
    class Person{
        public $name;
        public $age;

        public function __construct($a, $b){
                $this->name = $a;
                $this->age = $b;
        }

        public function introduce(){
            return  "This person is $this->age years old and has a name of $this->name <br/>";
        }

    }

    $Person1 = new Person("Luffy", 25);
    echo $Person1->introduce();

    $Person2 = new Person("Gaara", 22);
    echo $Person2->introduce();


?>