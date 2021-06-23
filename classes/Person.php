<?php
    class Person{
        public $name;
        public $age;

        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
        
        public function introduce(){
            echo "This person is $this->age years old and has a name of $this->name <br/>";
        }

    }



    
?>