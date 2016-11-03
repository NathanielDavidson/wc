<?php 

$time = time();
$hash = md5($time . "54");
echo $hash . "<br>";
echo gettype($hash);
?>