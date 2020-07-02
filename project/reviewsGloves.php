<?php
	$review = $_POST['review'];

	$conn = new mysqli('localhost','root','','shop');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		if (empty($review)) {
    echo "Fill the information boxes!";
		}
		else {
			$stmt = $conn->prepare("insert into reviewsgloves(review) values(?)");
			$stmt->bind_param("s", $review);
			$execval = $stmt->execute();
			echo $execval;
			echo "Thank you for your review!!";
			$stmt->close();
			$conn->close();
		}
	}
?>