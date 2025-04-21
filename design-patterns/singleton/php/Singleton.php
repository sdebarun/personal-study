<?php

namespace Designs\php;
// singleton design pattern in php
//~ This is the Blue print singleton class - parent class. we can extend it and create other classes easily.

class Singleton {

    private static $_instances = [];  // need persistent value and parent variable in called class
    public readonly string $timestamp; // just to verify no practical importance

    protected function __construct(){
        $this->timestamp = time();
    }

    public static function instance (){
        // let's get the calling class fully qualified namespace (simply the name string)
        $cls = static::class; // support late static binding — i.e., dynamically know the class that’s calling the method 
        if(!isset(self::$_instances[$cls])){
            self::$_instances[$cls] = new static();
        }
        return self::$_instances[$cls]; //self - the base class name, where the method is written - as I want to store it in parent class property
    }


}

//% let's give it a shot

function singletonCallingFunction() {
    $cls1 = Singleton::instance();
    $cls2 = Singleton::instance();

    if($cls1 === $cls2){
        echo "$cls1->timestamp and $cls2->timestamp are same and Singleton parent class works fine\n";
    }else{
        echo "Singleton Fails \n";
    }
}


// let's call the function

singletonCallingFunction();
