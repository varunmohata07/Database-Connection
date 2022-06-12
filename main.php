<?php
	$Email = $_POST['Email'];
    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$Address = $_POST['Address'];


	// Database connection
	$conn = new mysqli('localhost','root','','fetching_i/p_indb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO `varun`(`Email`, `firstName`, `lastName`, `Address`) VALUES (?,?,?,?)");
		$stmt->bind_param("ssss", $Email, $firstName, $lastName, $Address);
		$execval = $stmt->execute();
		echo $execval;
		echo "You will Soon Updated !!";
		$stmt->close();
		$conn->close();
	}
?>