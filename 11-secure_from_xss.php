<!-- cross site scripting Attacks-->

<!DOCTYPE html>
<html>
<head>
	<title>Cross Site Scripting or Javascript in jection</title>
</head>
<body>
	<br>
	<br>
	<br>

	<h2>javascrip injection</h2>
	<p>if you pass (window.location = "http://google.com") in script html tag . <br>it will redirect to google.com</p>
<section>
	<form action="11-secure_from_xss.php" method="POST">
		<label name="user_name" id="user_name">XSS...User Name:</label>
		<input type="text" name="user_name">
		<input type="submit" name="submit" value="submit">
	</form>
</section>
<br>
<article>
	<?php 

		if(isset($_POST['submit'])){
			$user_name = $_POST['user_name'];
			// if you pass valid html in user_name it will echo it to html file 
			// js and css can be injected easyly 
			echo $user_name;
		}

	 ?>
</article>
<br>
<h2>prevent XSS attacks (js injections)</h2>
<p>Do not echo user inputs. <br>insted echo them after passing them to htmlspecialchars function. </p>
<section>
	<form action="11-secure_from_xss.php" method="POST">
		<label name="secure_user_name" id="user_name">Secured User Name:</label>
		<input type="text" name="secure_user_name">
		<input type="submit" name="secure_submit" value="secure_submit">
	</form>
</section>
<br>

<article>
	<?php 

		if(isset($_POST['secure_submit'])){
			// htmlspecialchars will change html tags to unrunabl tags as  html.
			$user_name = htmlspecialchars($_POST['secure_user_name']);
			echo $user_name;
		}

	 ?>
</article>
</body>
</html>

