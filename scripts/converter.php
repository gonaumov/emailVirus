<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$contentOfEscapetPart = array();
$base64Part = array();

$content = file_get_contents("../files/file.htm");

if (preg_match("/unescape\('([^']+)'/", $content, $contentOfEscapetPart) === 1) { 
     $decodedStuff=rawurldecode($contentOfEscapetPart[1]);

     file_put_contents("../files/parenteses.txt", $decodedStuff);
     print "\nWe catch escaped part!\n";

     if (preg_match("/base64,([^\"]+)\"/", $decodedStuff, $base64Part) === 1) {
        file_put_contents("../files/decoded.txt", base64_decode($base64Part[1]));
        print "\nWe decode base64 part!\n";
     } else {
  	print "\nWe cannot  decode base64 part!\n";
     }
} else {
     print "\nWe cannot catch escaped part!\n";
}


?>
