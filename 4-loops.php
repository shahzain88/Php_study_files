<!DOCTYPE html>
<html>
<head>
	<title>Learn loops in PHP</title>
</head>
<body>

<!-- for loop -->
	<?php 
		$blogs = [
			['title' => 'Cute Cats','author'=>'Jhon','goods' => 30],
			['title' => 'Sky with heart shaped Cloude','author' => 'Noah','goods' => 400],
			['title' => 'green world','author' => 'Kaito','goods' => 1020]

		];


		echo "<h3>For loop</h3>";
		for( $i=0 ; $i<count($blogs); $i++){

			$title = $blogs[$i]['title'];
			$author=$blogs[$i]['author'];
			$likes=$blogs[$i]['goods']; 
			echo "
			<h4>title:</h4>
			<p>$title</p>
			<h4>author:</h4>
			<p>$author</p>
			<h6>likes:</h6>
			<p>$likes</p>
			";
		};
	 ?>
<!-- for each loop -->
	<?php 

		echo "<h3>For each loop</h3>";
		foreach($blogs as $blog){
			$title = $blog['title'];
			$author=$blog['author'];
			$likes=$blog['goods']; 
			echo "
			<h4>title:</h4>
			<p>$title</p>
			<h4>author:</h4>
			<p>$author</p>
			<h6>likes:</h6>
			<p>$likes</p>
			";
		}

	 ?>


<!-- while loop  -->
	
	<h3>While loop</h3>
	<h4>Titles:</h4>
	<ul>
		<?php
			$i=0 ;
			while ($i<count($blogs)) { ?>
				<li><?php echo $blogs[$i]['title'];?></li>
			<?php $i++;} ?>

	</ul>

	<!-- Continue and break -->

	<?php 

		foreach ($blogs as  $blog) {
			if ($blog['goods'] > 100) {
				continue;
			}

			if ($blog['goods']>1000) {
				break;
			}

			echo $blog['goods'];

		}

	 ?>

</body>
</html>