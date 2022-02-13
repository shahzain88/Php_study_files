<!DOCTYPE html>
<html>
<head>
	<title>Learn Variable Scope in functions</title>
</head>
<body>

	<h1>Global scope and  not the global one </h1>

	<!-- you can get refrence in functions by saying -->
	<!-- function nameFunc(&$name){sometihing} -->

	<?php 

		function sayBye(&$name){
			$name = "Chenged";?>

			<h5>Good bye <?php echo $name;?></h5>
		<?php } ?>

	<h2>Say bye to friends</h2>
	<?php 
		$name = "jhon";
		echo sayBye($name);
	 ?>

	<?php 
		$name = "lot";
		function hello($name){
			global $name;
			$name = "solomon";
			echo "Hello $name";
		}

		hello($name);
		echo '<br>'.$name
	 ?>
	 <!-- you can not change variable in function the scope is diffrent -->
	 <?php 
	 	$name = "lot";

	 	function hellow($name){
			$name = "solomon";
			echo "Hello $name";
		}

		hellow($name);
		echo "<br>".$name;

	  ?>
</body>
</html>