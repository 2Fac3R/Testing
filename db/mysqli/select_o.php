<?php
require_once "connection_o.php";

$dbname = "dvwa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT user_id, first_name, last_name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: "      . $row["user_id"]. 
             " - Name: " . $row["first_name"].
             " "         . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>