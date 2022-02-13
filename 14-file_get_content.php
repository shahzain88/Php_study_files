<!DOCTYPE html>
<html>
<head>
	<title>File get content</title>
</head>
<body>
	<h1>file_get_contents("filePath")</h1>
	<p>It will return file content as a string.</p>
	<p>echo file content of youtube.com</p>
	<?php 

			
			echo file_get_contents("https://www.youtube.com/");

	 ?>
</body>
</html>