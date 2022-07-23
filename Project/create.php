<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Page</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css"/>
</head>
<body>

	<?php
	 include 'home.php'
	 ?>
<div class = "add">
<fieldset>
	<legend>Add Product</legend>
	<form action="save.php" method="POST">
		<label>Product:</label><input type="text" name="product" required = "">
	<hr/>
		<label>Size:</label><input type="text" name="size" required = "">
	<hr/>
		<label>Issue:</label><input type="text" name="issue" required = "">
	<hr/>
		<label>Price:</label><input type="text" name="price" required = "">
	<hr/>
	<input type="Submit" value="save">
	</form>
</fieldset>
</div>

	

</body>
</html>
