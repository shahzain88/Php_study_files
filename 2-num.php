<?php 

	$numInt = 2;
	$numFloute = 2.44;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Learn Nums in PHP</title>
</head>
<body>

	<h4><?php echo $numInt ; ?></h4>
	<h4><?php echo $numFloute; ?></h4>

	<!-- calculation + - / * ** -->
	<!-- () ** / * + -  -->
	<h4><?php echo 2*4*(2+3)/5; ?></h4>

	<!-- incriment decrement oparators-->
	<!-- ++ -- -->
	<h4><?php $numInt++; echo $numInt?></h4>
	<!-- echo will not run after calulation but it will run acordingly -->

	<h4><?php echo $numFloute--; ?></h4> <!-- 2.44 -->
	<h4><?php echo $numFloute; ?></h4>	<!-- 1.44 -->

	<h4><?php echo $numFloute *= 2; ?></h4>	<!-- 2.88 -->

	<!-- floor functon 四捨五入-->
	<h4> <?php echo floor($numFloute) ?> </h4> <!-- 2 -->
	<!-- ceil function 反四捨五入 -->
	<h4><?php echo ceil($numFloute) ?></h4> <!-- 3 -->
	<!-- pi 3.14......... -->
	<h4><?php echo pi()?></h4>
</body>
</html>