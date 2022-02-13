<!DOCTYPE html>
<html>
<head>
	<title>learn Boolian in ohp</title>
</head>
<body>
	<p>Boolian is true and false</p>
	<p>when you echo true it shows 1.</p>
	<p>when you echo false it will show empty string.</p>
	<!-- echoed true -->
	<h4>"<?php echo true ?>"</h4>
	<!-- echoed false -->
	<h4>"<?php echo false ?>"</h4>

	<h4><?php echo 5 >=3; ?></h4>
	<h4><?php echo 5!=4; ?></h4>
	<h4><?php echo 0==1; ?></h4>
	<h4><?php echo 1==1; ?></h4>
	<!-- loose vs strict compareson -->
		<!-- loose  ==  dose not check the type but converts it acordingly -->
	<h4><?php echo 1=="1" ?></h4>
		<!-- srict === It checks types strictly-->
	<h4><?php echo 1==="1" ?></h4>
</body>
</html>