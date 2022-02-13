<!DOCTYPE html>
<html>
<head>
	<title>Learn Array in php</title>
</head>
<body>
	<p>There are # type of arrays in php</p>
	<ul>
		<li>Indexd arrays</li>
		<li>associative arrays</li>
		<li>and multi dimensional arrays</li>
	</ul>

<!-- indexed arrays -->
	<?php 
		// array => []
		$peopleOne = ['jhon','maria','lot'];
	 ?>
	 <h4><?php echo $peopleOne[0]; ?></h4>
	 <?php 
	 	// diffarent way of writing array => array()
	 	$peopleTwo = array('lot','jhon','maria');
	 ?>
	 <h4><?php echo $peopleTwo[2];?></h4>

	 <!-- to echo readeble array you need a str  -->
	 <!-- to convert to readable vertion on your array or object to tuple use  print_r() function-->
	 <h4><?php print_r($peopleTwo); ?></h4>
	 <!-- to change value in array to update -->
	 <?php $peopleTwo[2]='marke'; ?>
	 <h4><?php echo $peopleTwo[2]; ?></h4> 

	 <!-- append to array a value -->
	 <?php 

	 	// because there is no index given it will push the value given to the end of the array
	 	$peopleTwo[]='maria';
	 	// to push the array by function array_push(ARRAY,VALUE)
	 	array_push($peopleTwo,'noah');
	 ?>
	 <h4><?php print_r($peopleTwo); ?></h4>
	 <!-- to count all value in array count(ARRAY)-->
	 <h4><?php  echo count($peopleTwo);?></h4>

	 <!-- to add two array to one array use array_merge(ARRAY_1,ARRAY_2) -->

	 <h4><?php print_r(  array_merge($peopleOne,$peopleTwo) ) ; ?></h4>

<!-- associative arrays -->
	
	<?php 
		// object in JS dicts in python
		// [key=>value, ....]
		$peopleJhon=['name'=>'jhon','age'=>20,'location'=>'London'];
		// other way to do the same thing
		$peopleNoah= array('name'=>'Noah','age'=>30,'location'=>'Turky');
	 ?>
	 <h4>name: <?php echo $peopleJhon['name'] ;?></h4>
	 <h4>age: <?php echo $peopleNoah['age']; ?></h4>

	 <!-- append to assoc arrays -->
	 <?php $peopleJhon['gender']='male'; ?>
	 <h4>gender: <?php echo $peopleJhon['gender']; ?></h4>
	 <!-- change value of assoc array -->
	 <?php $peopleJhon['age']=21; ?>
	 <h4>new_age: <?php echo $peopleJhon['age']; ?></h4>

	 <!-- count assoc array  -->
	 <h4><?php echo count($peopleJhon) ?></h4>
	 <!-- merge the array Jhon and Noah -->

	 <h4><?php print_r(  array_merge($peopleJhon,$peopleNoah)  ) ?></h4> <!--the last value of the same key will be 
	 																								saved so Jhon[Key]=> Noah[value]-->
<!-- multi dimensional arrays -->

	<!-- just array in array -->
	<?php 
		$blogs = [
			['title' => 'Cute Cats','author'=>'Jhon','goods' => 30],
			['title' => 'Sky with heart shaped Cloude','author' => 'Noah','goods' => 400]
		];
	 ?>
	 <h4><?php echo $blogs[0]['title']?></h4>
	 <!-- to append a new array to multi dimensional array -->
	 <?php $blogs[]= ['title' => 'Shops in New York','author' => 'maria','goods' => 10] ?>
	 <h4><?php print_r( $blogs[2] ) ?></h4>

	 <!-- Delete the last pushed or appended array say pop -->
	 <!-- works allover in index , associative and multi array -->
	 <h4><?php print_r( array_pop($blogs) ) ?></h4>
</body>
</html>