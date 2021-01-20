<?php

namespace MyApp\Model;

use MyApp\Interfaces\DataInterface;

class Container 
{
    protected $myDataHandler;

    public function __construct() 
    {
        // ...
    }

    public function setDataHandler(DataInterface $classHandler) 
    {
        $this->myDataHandler = $classHandler;
    }

    public function getDataHandler(): DataInterface
    {
        return $this->myDataHandler;
    }

}