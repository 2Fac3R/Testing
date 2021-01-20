<?php

namespace MyApp\Model;

use MyApp\Interfaces\DataInterface;

class FileHandler implements DataInterface 
{
    public function read(): string 
    {
        return "reading from a file.";
    }

    public function write(): string 
    {
        return "writing to the file.";
    }
}