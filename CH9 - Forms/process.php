<?php
/**
 * Created by PhpStorm.
 * User: adrian.ispas
 * Date: 7/11/2016
 * Time: 10:04 AM
 */

echo "Thank you for your upload, " . $_GET["name"] . "!<br/>";
//echo $_FILES["photo"]["name"];

print_r($_FILES["photo"]);
//["name"] . "/>";
?>