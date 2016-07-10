<?php
/**
 * Created by JetBrains PhpStorm.
 * User: NOI25
 * Date: 10.07.2016
 * Time: 12:15
 * To change this template use File | Settings | File Templates.
 */

echo "Hello, world!" . "<br/>";

echo "<hr>";

for($i = 1; $i < 10; $i++) {
    echo "The current number is: " . $i . "<br/>";
}

echo "<hr>";

$handle = "./input.txt";

$lines = file($handle);
foreach ( $lines as $line )
    echo $line . "<br />";

//echo "<br/>" . "The current position of pointer in file is: " . ftell($handle);

file_put_contents($handle,"Clear content of file.",FILE_APPEND);

chmod($handle,0600);

if(is_readable($handle)) {
    echo "I can read input.txt";
}
if(is_writable($handle)) {
    echo "I can write input.txt";
}
if(is_executable($handle)) {
    echo "I can execute myfile.txt";
}

echo substr( sprintf( "%o", fileperms($handle) ), -4 );

$handleTwo = "./inputCopied.txt";

copy($handle,"./inputCopied.txt");

file_put_contents($handleTwo,"MERGE",FILE_APPEND);

//rename("./initial_name.txt","./rename_file.txt");

//unlink("./rename_file.txt");

echo "<hr>";

$handleDir = opendir("./TestDir");
while($filename = readdir($handleDir)) {
    if($filename != "." && $filename != "..") {
//        if(is_dir($filename) == true)
//            echo "The file " . $filename . " is a directory.<br/>";
//        if(is_file($filename) == true)
//            echo "The file " . $filename . " is a regular file.<br/>";
        echo "Current file " . $filename . "<br/>";
    }
}
?>