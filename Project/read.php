<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Product</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css"/>
</head>
<body>
	<?php include'home.php'?>

	<table class = "center" border="1">
		<tr>
			<td>No</td>
			<td>PRODUCT</td>
			<td>SIZE</td>
			<td>ISSUE</td>
			<td>PRICE</td>
			<td colspan="2">OPTION</td>

		</tr>
	
	<?php
		include'conn.php';

		$query = mysqli_query($conn,"SELECT * FROM product order by prod_id desc")or die ("Query Error");
		$No = 1;

		while($row =mysqli_fetch_array($query))
		{ 
			$pid = $row['prod_id'];
			echo"<tr>";
			echo"<td>".$No++."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['size']."</td>";
			echo"<td>". $row['issue']."</td>";
			echo"<td>".$row['price']."</td>";
			echo"<td><a href='delete.php?prod_id=$pid'>Drop</a></td>";
			echo"<td><a href='update.php?prod_id=$pid'>Edit</a></td>";
			echo"</tr>";

		}
    
	?>
	</table>
</body>
</html>