<?php 

	// var starts with $ sign
	$name = "Yoshinobu";
	// const variable value
	// define("name of var","value");
	define("NAME","Maliq");
	$firstName = "Zain";
	$lastName= "Syed";
	// change html tage in php!
	$h1="h" . 3;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Learn PhP</title>
</head>
<body>
	<h4> <?php echo $name ; ?> </h4>
	<h4> <?php echo NAME ; ?> </h4>
	<!-- concatinating strings -->
	<h4> <?php echo $firstName . $lastName ; ?> </h4>
	<!-- call variabls in string -->
	<h4> <?php echo  "Variabls in string => $name"; ?> </h4>
	<!-- this is not gona work -->
	<h4><?php echo '\'Variabls in string => $name\'' ?></h4>
	<!-- " in '' will work but " in "" and ' in '' will not so put backslash -->
	<h4> <?php echo 'He said to me "whooooo"'; ?> </h4>
	<h4> <?php echo "He said to me \"whooooo\""; ?> </h4>
	<!-- change html tage in php!? -->
	<<?php echo $h1; ?>>PHP made me H3</ <?php echo $h1 ?>>
	<!-- access string letter by index -->
	<h4><?php echo $name[2]?></h4>
	<!-- strlen() function for length -->
	<h4><?php echo strlen($name); ?></h4>
	<!-- strtoupper() function for upper string -->
	<h4><?php echo strtoupper($name); ?></h4>
	<!-- strtolower() function for lower string -->
	<h4><?php echo strtolower($name); ?></h4>
	<!-- to replace string use str_replace('this','to this', in this string) -->
	<h4><?php echo str_replace('this','to this','in this string'); ?></h4>



</body>
</html>