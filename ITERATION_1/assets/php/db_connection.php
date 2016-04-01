<?php

    //This script creates a connection to a database at $connection.
    //Should be included when querying to database.

   $server = "mysql.nith.no";
   $port = "3306";
   $username = "nguhuo15";
   $password = "nguhuo15";
   $db = "nguhuo15";
		
	// Create connection
	$connection = mysqli_connect($server, $username, $password, $db, $port);

    // Check connection
	if ($connection->connect_error) {
	    die("Connection failed: " . $connection->connect_error);
	}
    
    // Close connection
    // Call when db connection is no longer needed
    // Takes in 1 connection, including connection created on include.
    function closeConnection($connection){
        mysqli_close($connection);
    }
?>
   