<?php
    require_once "Person.php";

    class Student extends Person{
        public $teacher;

        public function __construct($name, $age, $teacher){
            $this->name = $name;
            $this->age = $age;
            $this->teacher = $teacher;
        }

        public function getTeacher(){
            return "My teacher is $this->teacher <br>";
        }
    }


?>