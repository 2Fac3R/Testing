<?php

require_once './mysqli/connection_o.php';

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
echo 'Connected successfully';

?>
