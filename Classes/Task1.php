<?php

namespace Classes;

class Task1
{
    private $property1;
    private $property2;

    public function __construct($property1=null, $property2=null)
    {
        $this->property1 = $property1;
        $this->property2 = $property2;
    }

    public function __set($name, $value)
    {
        if(property_exists($this,$name)){
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        return $this->$name;
    }
}