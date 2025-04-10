<?php

//~ Typical Class Property Before - 

Class aTypicalClass {
    //declare property 
    public ?string $name, $age;
    /**
     * sample documentation of function
     *
     * @param string|null $name
     * @param string|integer|float $age
     */
    function __construct(?string $name, string|int|float $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$aTypicalObject = new aTypicalClass(null, 33.4);

var_dump($aTypicalObject->name);
var_dump($aTypicalObject->age);


class aModernClass {
    function __construct(public string $name, public string|float|int $age)
    {
        $this->name = $name; 
        $this->age = $age;
    }
}

$aModernObject = new aModernClass('Modern Debarun', 33);

var_dump($aModernObject->name);
var_dump($aModernObject->age);


//#Supports in traits

/**
 * 
 */

trait aModernTrait {
    function __construct(public string $name, public ?int $age ) {
        $this->name = $name;
        $this->age = $age;
    }
}
