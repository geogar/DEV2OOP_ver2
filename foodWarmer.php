<?php
    class FoodWarmer{
        public $brand;
        public $color;
        public $timer;
        public $price;

        public function turnOn(){
            $result = "The $this->brand Food Warmer is turned on <br>";
            return $result;
        }

        public function setTimer(){
            $result = "The timer for $this->brand Food Warmer has been set to $this->timer <br>";
            return $result;
        }

        public function heatFood(){
            $result = "The food inside $this->brand Food Warmer is already hot <br><br><br>";
            return $result;
        }
    }

    $foodWarmer1 = new FoodWarmer;
    $foodWarmer1->brand = "Panasonic";
    $foodWarmer1->color = "White";
    $foodWarmer1->timer = "5 mins";
    $foodWarmer1->price = 10000;

    echo $foodWarmer1->turnOn();
    echo $foodWarmer1->setTimer();
    echo $foodWarmer1->heatFood();


    $foodWarmer2 = new FoodWarmer;
    $foodWarmer2->brand = "Hitachi";
    $foodWarmer2->color = "black";
    $foodWarmer2->timer = "10 mins";
    $foodWarmer2->price = 9000;

    echo $foodWarmer2->turnOn();
    echo $foodWarmer2->setTimer();
    echo $foodWarmer2->heatFood();

?>