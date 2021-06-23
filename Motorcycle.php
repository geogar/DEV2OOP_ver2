<?php
    class Motorcycle{
        public $brand;
        public $model;
        public $year;
        public $wieght_kg;

        public function name(){
            return "This is a $this->brand $this->model made in year $this->year <br>";
        }

        public function weight_lbs(){
            $weight_in_lbs = $this->wieght_kg * 2.2046226218;
            return "$this->brand $this->model is $this->wieght_kg in kilograms and $weight_in_lbs in pounds <br>";
        }


    }

    $motorcycle1 = new Motorcycle;
    $motorcycle1->brand = "Honda";
    $motorcycle1->model = "CBR";
    $motorcycle1->year = "2021";
    $motorcycle1->wieght_kg = "150";

    echo $motorcycle1->name();
    echo $motorcycle1->weight_lbs();
?>