<?php
#p32

include("LIB_http.php");

$target = "http://www.schrenk.com/publications.php";
$ref = "http://www.schrenk.com";

$return_array = http_get_withheader($target, $ref);

echo "FILE CONTENTS \n";
var_dump($return_array['FILE']);

echo "ERRORS \n";
var_dump($return_array['ERROR']);

echo "STATUS \n";
var_dump($return_array['STATUS']);
?>