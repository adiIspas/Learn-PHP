<?php
/**
 * Created by PhpStorm.
 * User: adrian.ispas
 * Date: 7/11/2016
 * Time: 4:16 PM
 */

$dsn = "mysql:dbname=isp";
$username = "root";
$password = "";

try {
    $connection = new PDO($dsn,$username,$password);
} catch(PDOException $e) {
    echo "Connection error: " . $e->getMessage();
}

try {
    $sql = "INSERT INTO members VALUES ( 8, 'derek', password('mypass'), 'Derek', 'Winter', '2008-06-25', 'm', 'crime', 'derek@example.com', 'Watching TV, motor racing' )";
    $connection->query($sql);
} catch(PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}

$id = 9;
$username = "isp";
$password = "mypass";
$firstName = "Ispas";
$lastName = "Adi";
$joinDate = "2008-06-25";
$gender = "m";
$favoriteGenre = "sciFi";
$emailAddress = "isp@example.com";
$otherInterests = "Football, reading";
$sql = "INSERT INTO members VALUES ( :id, :username, password(:password), :firstName, :lastName, :joinDate, :gender, :favoriteGenre, :emailAddress, :otherInterests )";
try {
    $st = $connection->prepare( $sql );
    $st->bindValue( ":id", $id, PDO::PARAM_INT );
    $st->bindValue( ":username", $username, PDO::PARAM_STR );
    $st->bindValue( ":password", $password, PDO::PARAM_STR );
    $st->bindValue( ":firstName", $firstName, PDO::PARAM_STR );
    $st->bindValue( ":lastName", $lastName, PDO::PARAM_STR );
    $st->bindValue( ":joinDate", $joinDate, PDO::PARAM_STR );
    $st->bindValue( ":gender", $gender, PDO::PARAM_STR );
    $st->bindValue( ":favoriteGenre", $favoriteGenre, PDO::PARAM_STR );
    $st->bindValue( ":emailAddress", $emailAddress, PDO::PARAM_STR );
    $st->bindValue( ":otherInterests", $otherInterests, PDO::PARAM_STR );
    $st->execute();
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}

$gender = "m";
$sql = "SELECT firstName, lastName FROM members WHERE gender like :gender";
try {
    $st = $connection->prepare($sql);
    $st->bindValue(":gender", $gender, PDO::PARAM_STR);
    $st->execute();

    echo "<pre>";
    $st->debugDumpParams();
    echo "</pre>";
    
    $result = $st->fetchAll();
    foreach ($result as $item) {
        echo $item["firstName"] . " " . $item["lastName"] . "<br>";
    }
} catch(PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}

?>