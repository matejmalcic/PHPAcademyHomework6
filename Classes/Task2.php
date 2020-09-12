<?php

namespace Classes;

class Task2
{
    private $prefix = ['get', 'set', 'has', 'uns'];
    public $data = [
        'Product' => 'Rolex',
        'Category' => 'Watch',
        'Price' => 2999.99,
        'Supply' => 12
    ];

    private function get($name)
    {
        return $this->data[$name] ?? null;
    }

    private function set($name,$argument)
    {
        $this->data[$name] = $argument;
    }

    private function has($name)
    {
        return isset($this->data[$name]) && $this->data[$name] != '';
    }

    private function uns($name)
    {
        unset($this->data[$name]);
    }


    public function __call($name, $arguments)
    {
        //splitting string before first Uppercase char and after, into array
        $strPieces = preg_split('/(?=[A-Z])/',$name, 2,PREG_SPLIT_NO_EMPTY);

        if( !in_array($strPieces[0], $this->prefix)) {
            throw new \Exception("Method prefix isn't get, set, has or uns");
        }

        switch ($strPieces[0])
        {
            case 'get':
                return $this->get($strPieces[1]);
            case 'set':
                $this->set($strPieces[1], ...$arguments);
                break;
            case 'has':
                return $this->has($strPieces[1]);
            case 'uns':
                $this->uns($strPieces[1]);
                break;
            default:
                return 'Something went wrong!';
        }
    }
}
