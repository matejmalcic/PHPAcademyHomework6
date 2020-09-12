<?php

namespace Classes;

class Task2
{
    private $prefix = ['get', 'set', 'has', 'uns'];
    private $data = [
        'FirstName' => 'Pero',
        'LastName' => '',
        'Contact' => 'das',
        'Address' => '42232'
    ];

    private function get($name)
    {
        return $this->data[substr($name,3)] ?? null;
    }

    private function set($name,$argument)
    {
        $this->data[substr($name,3)] = $argument;
    }

    private function has($name)
    {
        return $this->data[substr($name,3)] != '' ? 'true' : 'false';
    }

    private function uns($name)
    {
        unset($this->data[substr($name,3)]);
    }


    public function __call($name, $arguments)
    {
        $calledPrefix = substr($name,0,3);

        if( !in_array($calledPrefix, $this->prefix)) {
            throw new \Exception("Method prefix isn't get, set, has or uns");
        }

        switch ($calledPrefix)
        {
            case 'get':
                return $this->get($name);
                //break;
            case 'set':
                $this->set($name, ...$arguments);
                break;
            case 'has':
                return $this->has($name);
                //break;
            case 'uns':
                $this->uns($name);
                break;
            default:
                return 'Something went wrong!';
        }
    }
}
