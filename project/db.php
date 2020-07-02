<?php
	$name = $_POST['name'];
	$adr = $_POST['adr'];

	$conn = new mysqli('localhost','root','','shop');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		if (empty($name) || empty($adr)) {
    echo "Fill the information boxes!";
		}
		else {
			$stmt = $conn->prepare("insert into information(name, address) values(?, ?)");
			$stmt->bind_param("ss", $name, $adr);
			$execval = $stmt->execute();
			echo $execval;
			echo $name. ", thank you for your purchase!";
			$stmt->close();
			$conn->close();
		}
		
	}
?>