<?php
error_reporting(0);
require_once 'connection.php';

$conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);

$attributes = [
    'AUTOCOMMIT',
    'ERRMODE',
    'CASE',
    'CLIENT_VERSION',
    'CONNECTION_STATUS',
    'ORACLE_NULLS',
    'PERSISTENT',
    'PREFETCH',
    'SERVER_INFO',
    'SERVER_VERSION',
    'TIMEOUT',
];

foreach ($attributes as $val) {
    echo "PDO::ATTR_$val: ";
    echo $conn->getAttribute(constant("PDO::ATTR_$val")) . "\n";
}

?>
