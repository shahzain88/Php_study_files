<?php 

require 'search.php';

$prods=null;

if (is_null($search_prods)) {
	$prods = [
		1 => ['name'=>'bob','prod' =>'Best game'],
		2 => ['name'=>'cdd','prod' =>'Best sport'],
		3 => ['name'=>'www','prod' =>'Best love'],
		4 => ['name'=>'cob','prod' =>'Best Time'],
		5 => ['name'=>'nop','prod' =>'Best moment']
	];

}elseif (!is_null($search_prods)) {
	$prods=$search_prods; 
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Items</title>
</head>
<body>

<?php foreach ($prods as $prod): ?>
	<h2>name: <?php echo($prod['name']) ?></h2>
	<h3>prod: <?php echo($prod['prod']) ?></h2>

<?php endforeach ?>


</body>
</html>