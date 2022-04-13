<?php
require_once 'connection.php';

try {
    $dbname = 'dvwa';
    define('DB_USER_MAXLENGHT', 15);

    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password
    );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* Execute a prepared statement by binding PHP variables */
    $user_id = 1;
    $user = 'admin';
    $query = "
        SELECT *
          FROM users
          WHERE
              user_id = :user_id
          AND
              user = :user
    ";

    $sth = $conn->prepare($query);
    $sth->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $sth->bindParam(':user', $user, PDO::PARAM_STR, DB_USER_MAXLENGHT);
    $sth->execute();
    $data = $sth->fetchAll();

    print_r($data);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>
