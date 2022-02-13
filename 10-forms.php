
	<!-- back end  -->
<?php 
	$names=['jhon','mike','tiler','wilium','sasuke','ahmad','abuqith','yusuf','lot','shah','zain','syed','kubota','tatsuya'];
	$nameGet=null;
	$namePost=null;
	$isFound = false;

	if($_GET){
		$nameGet=$_GET['nameget'];
		foreach($names as $name){
			if($nameGet === $name ){
				$isFound=true;
			}
		}
	}elseif ($_POST) {
		$namePost=$_POST['namePost'];
		foreach($names as $name){
			if($namePost === $name ){
				$isFound=true;
			}
		}
	}
	// echo $nameGet;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn GET and POST</title>
</head>
<body>
	<section>

			<!-- action is the file to pass the POST data to hendel -->
		<form action="10-forms.php" method="POST">
			<h2>Post method</h2>
			<h5 id=query>search length shoude be under 20 cher's</h5>
			<label id='namePost'>Search Name's: </label>
			<input type="text" name="namePost" id="namePost" maxlength=20  placeholder="namePost" required>
			<input type="submit">
		</form>

	</section>
	<article>
		
		<?php 
			if ($_POST && $isFound) {?>
				<h4>POST</h4>
				<p><?php echo "The Searched name \"$namePost\" was found in array. :)"; ?></p>	
			<?php }else{?>	
						<p><?php echo "The Searched name \"$namePost\" coud not be found. :("; ?></p>
					<?php } ?>
	</article>

</body>
</html>