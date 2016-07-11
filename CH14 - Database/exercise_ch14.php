<?php
/**
 * Created by PhpStorm.
 * User: adrian.ispas
 * Date: 7/11/2016
 * Time: 5:36 PM
 */

$dsn = "mysql:dbname=isp";
$username = "root";
$password = "";

try {
    $connection = new PDO($dsn,$username,$password);
} catch(PDOException $e) {
    echo "Connection error: " . $e->getMessage();
}

$order = "DESC";
$sql = "SELECT favoriteGenre, count(favoriteGenre) as popularity FROM members GROUP BY favoriteGenre ORDER BY 2 " . $order;

try {
    $st = $connection->prepare($sql);
    $st->bindValue(":order",$order,PDO::PARAM_STR);
    $st->execute();

    echo "<pre>";
    $st->debugDumpParams();
    echo "</pre>";

    $result = $st->fetchAll();

    foreach ($result as $item) {
        echo $item["favoriteGenre"] . " " . $item["popularity"] . "<br>";
    }
} catch(PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}


echo "<hr>";
?>