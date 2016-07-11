<?php
/**
 * Created by PhpStorm.
 * User: adrian.ispas
 * Date: 7/11/2016
 * Time: 10:22 AM
 */

echo "<center><h1>Welcome!</h1>";

$number = rand(1,10);
session_start();
$_SESSION["correct"] = $number;

    echo "<form action='processNumber.php' method='get'>" .
            "Your number:" . "<input type='text' name='number' value=''>
          </form>";
echo "</center>";
?>