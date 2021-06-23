<?php
   require_once "classes/Student.php";
   
    $person1_name = "Shuhei";
    $person1_age = 25;
    $person1_teacher = "George";

    $person2_name = "Jena";
    $person2_age = 20;
    $person2_teacher = "George";



    $Person1 = new Student($person1_name, $person1_age, $person1_teacher); // instance of a class

    $Person1->introduce();// Abstraction
    $Person1->getTeacher();

    $Person2 = new Student($person2_name, $person2_age, $person2_teacher); // instance of a class

    $Person2->introduce();// Abstraction
    $Person2->getTeacher();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    
</body>
</html>