<?php

namespace MyApp\Model;

use MyApp\Interfaces\DataInterface;

class DatabaseHandler implements DataInterface 
{
    public function read(): string 
    {
        return "reading from database.";
    }

    public function write(): string
    {
        return "writing to the database.";
    }
}