<?php

class A {
    static $variable = "class A var";

    public function callvarByStatic(){
        echo static::$variable;   
    }

    public function callVarBySelf(){
        echo self::$variable;
    }
}

class B extends A{
    static $variable = "Class B var";
}

(new A )->callvarByStatic();
echo PHP_EOL;
(new B)->callvarByStatic();
echo PHP_EOL;
(new B)->callVarBySelf();