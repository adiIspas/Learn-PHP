<?php
/**
 * Created by JetBrains PhpStorm.
 * User: NOI25
 * Date: 10.07.2016
 * Time: 18:36
 * To change this template use File | Settings | File Templates.
 */
echo "<h1><center>Welcome</center></h1>" . "<hr>";

$text = "Hello, world!";
echo preg_match("/world/",$text) . "<br/>";
echo preg_match( "/http\:\/\//", "http://www.google.com" ) . "<br/>";

echo preg_quote("http://www.google.com/index.php","/") . "<br/>";
echo preg_match("/".preg_quote("http://","/")."/","http://www.google.com") . "<br/>";
echo preg_match("/[a-zA-Z0-9]/","Ana are 10.") . "<br/>";
echo preg_match_all("/\d+/","In anul 1995 si anul 2016",$matches);
print_r($matches);
echo "<br/>";

echo preg_match("/A.*s/","Adi Ispas",$matches);
print_r($matches);

echo "<hr>";

$html = file_get_contents("http://www.google.com");

/*preg_match_all("/<a\s*href=['\"](.+?)['\"].*?>/i",$html,$matches);*/

preg_match_all("/<a\s*href=['\"](.+?)['\"].*?>/",$html,$matches);
echo "<h2>Linked URLs found at " . "www.google.com". ":</h2>";
echo "<ul>";
for ( $i = 0; $i < count( $matches[1] ); $i++ ) {
    echo "<li>" . $matches[1][$i]. "</li>";
}
echo "</ul>";

echo "<br/>";
$text = array(
    "His three whales are as good whales as were ever published in",
    "Wapping, at any rate; and his stump as unquestionable a stump",
    "as any you will find in the western clearings."
);
$results =  preg_grep( "/\bin\b/", $text );
echo "<pre>";
print_r( $results );
echo "</pre>";

echo "<hr>";

$text = "Author: Steinbeck, John";
// Displays "Author: John Steinbeck"
echo preg_replace( "/(\w+), (\w+)/", "$2 $1", $text );

echo "<hr>";

$text = "John Steinbeck, Franz Kafka, J.R.R. Tolkien";
//$authors = preg_split( "/,\s*|\s+ \s+/", $text );
$authors = preg_split( "/,\s+/", $text );
echo "<pre>";
print_r( $authors );
echo "</pre>";

?>