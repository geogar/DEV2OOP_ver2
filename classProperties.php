<?php
    class Student {
        public $first_name; //public is an access modifier.
        public $last_name;
        public $employed = "No"; 
        
    }

    new Student; 
    $student1 = new Student; // 1st instance
    $student1->first_name = "Kakashi"; 
    $student1->last_name = "Hatake"; 

    echo "First Name: " .$student1->first_name. "<br>";
    echo "Last Name: " .$student1->last_name. "<br>";
    echo "Employment Status: " .$student1->employed. "<br><br><br>";


    $student2 = new Student; // 2nd instance
    $student2->first_name = "Itachi";
    $student2->last_name = "Uchiha"; 
    $student2->employed = "Yes";

    echo "First Name: " .$student2->first_name. "<br>";
    echo "Last Name: " .$student2->last_name. "<br>";
    echo "Employment Status: " .$student2->employed. "<br>";
    
?>