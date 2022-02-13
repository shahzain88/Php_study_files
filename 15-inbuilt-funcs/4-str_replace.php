<?php 

$str = $_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
echo $str."<br>";
echo   $_SERVER["SCRIPT_NAME"]."<br>";


$file = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $file);

$file = $break[count($break) - 1];
echo $file."<br>";
$str = str_replace($file, "", $str);
echo $str;

 ?>