<?php
class Cars {
    public function carDesign() {
        echo "it is a car design ";
    }

    public function getWindows() {
        echo "cars have windows ";
    }
}

class Bike {
    public function bikeWheels() {
        echo "bike has two wheels ";
    }

    public function getColour() {
        echo "bike has multiple colours ";
    }
}

class Vehicle {
    public function design() : Cars {
        $cars = new Cars;
        $cars->carDesign();
        return $cars;
    }

    public function wheels () : Bike {
        $bike = new Bike;
        $bike->bikeWheels();
        return $bike;
    }

    public function windows() : Cars {
        $cars = new Cars;
        $cars->getWindows();
        return $cars;
    }

    public function colour()  : Bike{
        $bike = new Bike();
        $bike->getColour();
        return $bike;
    }

}



$vehicle = new Vehicle();

//since design returns Car instance we can call Car Class methods as return has already instantiated the Car class;
// so returning a class instantiate it.
$vehicle->design()->getWindows(); 