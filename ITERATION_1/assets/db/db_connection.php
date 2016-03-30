<?php		
   $server = "localhost";
   $username = "root";
   $password = "password";
   $db = "fjerdingen_db";
		
	// Create connection
	$connection = mysqli_connect($server, $username, $password, $db);

    // Check connection
	if ($connection->connect_error) {
	    die("Connection failed: " . $connection->connect_error);
        echo 'asdasd';
	}
    
    // Close connection
    function closeConnection($connection){
        mysqli_close($connection);
    }
?>
   