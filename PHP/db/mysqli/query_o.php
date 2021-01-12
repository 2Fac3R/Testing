<?php
require_once "connection_o.php";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Create database
$sql = "CREATE DATABASE myDB";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
