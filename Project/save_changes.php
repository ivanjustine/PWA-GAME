<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css"/>
</head>
<body>

</body>
</html>
<?php include'home.php'?>
<?php
if (empty($_POST['product']) || empty($_POST['size']) || empty($_POST['issue']) || empty($_POST['price']))
{
	echo "All fields are required!";
} 
else
{
	$product = $_POST['product'];
	$size = $_POST['size'];
	$issue = $_POST['issue'];
	$price = $_POST['price'];
	$product_id = $_POST['prod_id'];

//echo $product. "&".$size."&".$issue."&".$price;

//$conn = mysqli_connect("localhost","root","","onlineshop") or die("Item Not Found");
	include'conn.php';

mysqli_query($conn, "UPDATE product SET name ='$product', size ='$size', issue='$issue', price='$price' WHERE prod_id = $product_id") or die ('Query Error');

//message

echo "Item Changed";
echo "<a href = 'read.php'>Click here</a>";
}



?>