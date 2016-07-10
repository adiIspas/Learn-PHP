<?php
/**
 * Created by JetBrains PhpStorm.
 * User: NOI25
 * Date: 10.07.2016
 * Time: 16:48
 * To change this template use File | Settings | File Templates.
 */

echo "Current time: " . time();

echo "<hr>";

$t = strtotime( "February 15th 2004, 9:30am +0000" );
echo $t;

echo "<hr>";

$currentTime = time();
$convertedTime = getdate($currentTime);

print_r($convertedTime);
echo "<br/>";

echo $convertedTime["mday"] . " " . $convertedTime["month"] . " " . $convertedTime["year"];

echo "<hr>";

print_r( $_SERVER );


?>