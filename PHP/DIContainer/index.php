<?php

error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use MyApp\Model\Container;
use MyApp\Model\DatabaseHandler;
use MyApp\Model\FileHandler;

$container = new Container();
$container->setDataHandler(new DatabaseHandler);
// $container->setdataHandler(new FileHandler);
$myDataHandler = $container->getDataHandler();

echo $myDataHandler->read();
//echo $myDataHandler->write();
