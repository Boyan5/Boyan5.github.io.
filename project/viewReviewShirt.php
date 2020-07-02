<?php
	include 'viewReviewConnect.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="reviews.css">
</head>
<body>
<h1>Shirt Reviews</h1>
<div class="comments">
	<?php
		$sql = "SELECT * FROM reviewsshirt";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				echo "<p>";
				echo $row['review'];
				echo "<p>";
			}
			
		}
		else {
			echo "There are no reviews!";
		} 
	?>
</div>

</body>
</html>