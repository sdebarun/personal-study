<?php
trait Vehicle {
    public $name = "generic vehicle";
    public function fuel() {
        echo "I run on fuel";
    }

    public function sayName() {
        echo $this->name;
    }
}


class Car {

    use Vehicle;
    public function fuel() {
        echo "I run on petrol";
    }

    public function sayName() {
        $this->name = "Car";
        echo $this->name;
    }
}


(new Car)->sayName();
echo "<br/>";
echo (new Car)->name;
echo "<br/>";
(new Car)->fuel();