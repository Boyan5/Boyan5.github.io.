<?php
	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "shop");
	$sql = "DELETE FROM reviewsshirt WHERE id='$_GET[id]'";
	
	if (mysqli_query($con,$sql))
		header("refresh:1; url=ReviewShirt.php");
	else
		"Not Deleted";
?>