<!DOCTYPE html>
<html>
<head>
	<title>learn IF coditions</title>
</head>
<body>

	<p>If conditons are so good at checking if the condition is true or not.</p>
	<?php 
		$blogs = [
			['title' => 'Cute Cats','author'=>'Jhon','goods' => 30],
			['title' => 'Sky with heart shaped Cloude','author' => 'Noah','goods' => 400],
			['title' => 'big house ever','author' => 'Adam','goods' => 4]

		];
	?>

	<article>
		<ul>
			<?php foreach ($blogs as $blog) { ?>
				<?php if($blog["goods"] > 100){?>
					<li><?php echo $blog['title'] . ': ' . $blog['goods'] ; ?> 100+ liks</li>
				<?php } elseif($blog['goods'] > 10){?>
					<li><?php echo $blog['title'] . ': ' . $blog['goods'] ; ?> 10+ likes</li>
				<?php }else{ ?>
					<li><?php echo $blog['title'] . ': ' . $blog['goods'] ?> less then 10 likes</li>
				<?php } ?>
			<?php } ?>
			<li>like and sub..</li>
		</ul>
	</article>

</body>
</html>