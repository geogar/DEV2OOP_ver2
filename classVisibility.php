<?php
    class Student{
        public $firstName = "George";
        public $lastName = "Garcia";
        public $country = 'None';

        protected $registrationId;
        private $tuition = 0.00;

        public function fullName(){
            return $this->firstName. " " . $this->lastName;
        }

        public function helloWorld(){
            return "Hello World";
        }

        protected function helloFamily(){
            return "Hello Family";
        }

        private function helloMe(){
            return "Hello Me!";
        }
        
    }

    class PartTimeStudent extends Student{

        public function helloParent(){
            return $this->helloFamily();
        }

    }

    
    
    // $student1 = new Student;
    // // $student1->firstName = "Hinata";
    // // $student1->lastName = "Hyuga";

    // echo $student1->fullName();
    // echo $student1->helloWorld();
    // echo $student1->helloFamily();
    // echo $student1->helloMe();

    // $student1->registrationId = 12345;
    // $student1->tuition = 200000;

    $partTimeStudent1 = new PartTimeStudent;
    echo $partTimeStudent1->helloParent();



    //This is a comment for changes
    

?>