<?php

namespace MyApp\Model;

use MyApp\Interfaces\DataInterface;

class FileHandler implements DataInterface {

    public function read() {
        return "reading from a file.";
    }

    public function write() {
        return "writing to the file.";
    }
}