<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css"/>
</head>
<body>
	<div id ="wrapper">
		<div id = "banner">
			
		</div>
		<nav id = "navigation">
			<ul id = "nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="create.php">Add</a></li>
				<li><a href="read.php">View</a></li>
				<li><a href="about.php">About Us</a></li>

			</ul>
			
		</nav>
		<div id = "content_area">
			<?php echo $content; ?>
		</div>


		<div id = "sidebar">
		
		</div>
		<br>
		<br>
		<br>
		<br>	
		<footer>All rights reserved</footer>
	</div>

</body>
</html>