<?php
/**
 * Created by PhpStorm.
 * User: adrian.ispas
 * Date: 7/11/2016
 * Time: 11:25 AM
 */

session_start();

$yourNumber = $_GET["number"];
$correctNumber = $_SESSION["correct"];

echo "<center>";
if($yourNumber == $correctNumber)
    echo "You win! :)";
elseif($yourNumber < $correctNumber)
    echo "Your number is lower than correct number.";
elseif($yourNumber > $correctNumber)
    echo "Your number is greater than correct number.";

if($yourNumber != $correctNumber)
    echo "<form action='processNumber.php' method='get'>" .
            "Your number:" . "<input type='text' name='number' value=''>
          </form>";
echo "</center>";
?>