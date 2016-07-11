<?php
/**
 * Created by PhpStorm.
 * User: adrian.ispas
 * Date: 7/11/2016
 * Time: 2:17 PM
 */

$dsn = "mysql:dbname=isp";
$username = "root";
$password = "";

try {
    $connection = new PDO($dsn,$username,$password);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$query = "SELECT * FROM members WHERE age <= 25";
try {
    $rows = $connection->query($query);
    echo "ID | First Name | Last Name | Age | Join date <br>";
    foreach ($rows as $row) {
        echo $row["id"] . "   " . $row["firstName"] . "   " . $row["lastName"] . "   " . $row["age"] . "   " . $row["joinDate"] . "<br>";
    }
} catch(PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}

?>