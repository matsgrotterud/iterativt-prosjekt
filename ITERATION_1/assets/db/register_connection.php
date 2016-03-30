<?php
    
    include 'db_connection.php';


    $name = $_POST['navn'];
	$username = $_POST['brukernavn'];
    $password = $_POST['passord'];
	
		
	//Create new user
	$query = "INSERT INTO `authentication` (`username`, `password`, `name`) VALUES ('$username', '$password', '$name')";
	mysqli_query($connection, $query);
	

	 // Close connection

    closeConnection($connection);
?>
