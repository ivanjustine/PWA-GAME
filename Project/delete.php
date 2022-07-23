<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Page</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css"/>
</head>
<body>

</body>
</html>
<?php
include 'home.php';
$pid = $_GET['prod_id'];
include 'conn.php';

mysqli_query($conn,"DELETE FROM product WHERE prod_id = $pid") or die ('Query Error');
echo "Item Removed";
echo "<a href= 'read.php'>Click here</a>"
?>