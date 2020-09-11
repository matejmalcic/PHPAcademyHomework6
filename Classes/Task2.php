<?php

namespace Classes;

class Task2
{
    private $prefix = ['get', 'set', 'has', 'uns'];
    private $data = [
        'FirstName' => 'Pero',
        'LastName' => '',
        'Contact' => '',
        'Address' => ''
    ];

    public function __call($name, $arguments)
    {
        $calledPrefix = substr($name,0,3);
        if( !in_array($calledPrefix, $this->prefix)) {
            throw new \Exception("Method prefix isn't get, set, has or uns");
        }

        return 'Prefix is good';
    }
}
