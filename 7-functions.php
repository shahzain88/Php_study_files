<!DOCTYPE html>
<html>
<head>
	<title>Learn function</title>
</head>
<body>

	<!-- function -->

	<?php  

		function sayHeyTo($name="friends",$time=null){
			$time=date('Y-j-D h:i:s A');
			echo "hellow how are you $name it\'s $time";
		}
	?>

	<p><?php sayHeyTo("jhon") ?></p>

	<?php 

		$blogs = [
			['title' => 'Cute Cats','author'=>'Jhon','goods' => 30],
			['title' => 'Sky with heart shaped Cloude','author' => 'Noah','goods' => 400],
			['title' => 'big house ever','author' => 'Adam','goods' => 4]

		];

		function formatBlog($blog=['title' => 'big loi','author' => 'admin','goods' => 8]){
			// echo "The blog title \"{$blog['title']}\" was created by \"{$blog['author']}\" and it has {$blog['goods']} likes." ;
			return "The blog title \"{$blog['title']}\" was created by \"{$blog['author']}\" and it has {$blog['goods']} likes." ;
		}

	 ?>

	<?php 
		foreach ($blogs as $blog) {?>
			<p><?php echo formatBlog($blog) ?></p>
		<?php }
	?>

</body>
</html>