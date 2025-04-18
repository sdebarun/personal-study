<?php

namespace Designs\php;
// singleton design pattern in php
//~ This is the Blue print singleton class - parent class. we can extend it and create other classes easily.

class Singleton {
    private static $_instances = 0;

    public static function instance (){
        //let's get the class fully qualified namespace (simply the name string)
        $cls = static::class; // support late static binding — i.e., dynamically know the class that’s calling the method 
        if(!(self::$_instances === 0)){
            self::$_instances = new static();
        }
        return self::$_instances; //self - the base class name, where the method is written - as I want to store it in parent class property
    }


}

// let's give it a shot

function singletonCallingFunction() {
    $cls1 = Singleton::instance();
    $cls2 = Singleton::instance();

    if($cls1 === $cls2){
        echo "Singleton parent class works fine\n";
    }else{
        echo "Singleton Fails \n";
    }
}


//let's call the function

singletonCallingFunction();
