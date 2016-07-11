<?php
/**
 * Created by PhpStorm.
 * User: adrian.ispas
 * Date: 7/11/2016
 * Time: 8:47 AM
 */

if(isset($_GET["name"]) && !empty($_GET["name"]))
    echo "Hello, " . $_GET["name"] . "! :)" . "<br/>";
else
    echo "I don't know your name ..." . "<br/>";

if(isset($_GET["message"]) && !empty($_GET["message"]))
    echo "Your message is: " . $_GET["message"] . "<br/>";
else
    echo "You not have a message." . "<br/>";
echo "<hr>";

?>