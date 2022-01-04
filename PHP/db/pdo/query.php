<?php
require_once "connection.php";

try {
    
    $con = new Connection();
    $dbh = $con->connect();
    $sql = "
        CREATE TABLE COMPANY(
            ID         INT      PRIMARY KEY     NOT NULL,
            NAME       TEXT     NOT NULL,
            AGE        INT      NOT NULL,
            ADDRESS    CHAR(50),
            SALARY     REAL
        );
     ";
    // use exec() because no results are returned
    echo $dbh->exec($sql) 
        ? "Database created successfully" 
        : print_r($dbh->errorInfo())
    ;
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
