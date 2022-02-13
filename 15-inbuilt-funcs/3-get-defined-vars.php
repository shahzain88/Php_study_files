<?php 

$php_var = "vvvaavv / value";
echo "<pre>";
$file_vars = get_defined_vars();
print_r($file_vars);
echo "</pre>";

echo $file_vars["php_var"];

 ?>