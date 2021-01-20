<?php

namespace MyApp\Model;

use MyApp\Interfaces\DataInterface;

class DatabaseHandler implements DataInterface {
 
    public function read() {
        return "reading from database.";
    }

    public function write() {
        return "writing to the database.";
    }
}