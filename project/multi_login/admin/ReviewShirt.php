<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="admin.css">
</head>
<body>
<h1>Shirt Reviews</h1>
<table id="table-review">
	<tr>
		<th id="table-head">Review</th>
		<th id="table-head">Delete</th>
	</tr>
	<?php	
		$con = mysqli_connect("localhost", "root", "");
		mysqli_select_db($con, "shop");
		$sql = "SELECT * FROM reviewsshirt";
		$records = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($records)){
			echo "<tr>";
			echo "<td>".$row['review']."</td>";
			echo "<td><a href=deleteReviewShirt.php?id=".$row['id'].">Delete</a></td>";
		}
	?>
</table>	
		
</body>
</html>