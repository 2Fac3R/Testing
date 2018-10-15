<?php
require_once "connection_p.php";

$dbname = "dvwa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT user_id, first_name, last_name FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: "      . $row["user_id"]. 
             " - Name: " . $row["first_name"].
             " "         . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>