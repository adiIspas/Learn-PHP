<?php
/**
 * Created by PhpStorm.
 * User: adrian.ispas
 * Date: 7/11/2016
 * Time: 1:53 PM
 */

echo "<center><h1>Welcome!</h1></center>";

$dsn = "mysql:dbname=isp";
$username = "root";
$password = "";
try {
    $conn = new PDO( $dsn, $username, $password );
    //$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $e ) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM fruit";
echo "<ul>";
try {
    $rows = $conn->query( $sql );
    foreach ( $rows as $row ) {
        echo "<li>A " . $row["name"] . " is " . $row["color"] . "</li>";
    }
} catch ( PDOException $e ) {
    echo "Query failed: " . $e->getMessage();
}
echo "</ul>";

echo "<hr>";

$sql = "select name from fruit";
try {
    $rows = $conn->query($sql);
    foreach ($rows as $row) {
        echo $row["name"] . "<br>";
    }
}
catch(PDOException $e) {
    echo $e->getMessage();
}

$conn = null;

?>