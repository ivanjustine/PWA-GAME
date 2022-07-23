<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Page</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css"/>
</head>
<body>
	<?php include'home.php'?>
	<?php
		$pid = $_GET['prod_id'];
		include 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM product WHERE prod_id = $pid") or die ('QUERY ERROR');
		$row = mysqli_fetch_array($query) or die ('FETCH ERROR');
	?>
<fieldset>
	<legend>Edit Form</legend>
	<form action="save_changes.php" method="POST">
		<input type="hidden" name="prod_id"value = "<?php echo $row ['prod_id'];?>">
		<label>Product:</label><input type="text" name="product" value = "<?php echo $row ['name']?>" required = "" >
	<hr/>
		<label>Size:</label><input type="text" name="size" value = "<?php echo $row ['size']?>" required = "">
	<hr/>
		<label>Issue:</label><input type="text" name="issue" value = "<?php echo $row ['issue']?>" required = "">
	<hr/>
		<label>Price:</label><input type="text" name="price" value = "<?php echo $row ['price']?>" required = "">
	<hr/>
	<input type="Submit" value="save changes">
	</form>
</fieldset>
</body>
</html>
