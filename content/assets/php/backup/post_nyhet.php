<?php

    // This script takes in values from POST, and stores it in the database.

    include 'db_connection.php';


    $navn = $_POST['navn']; //Recieve through post
    $nyhetType = $_POST['nyhetType']; //Recieve through post
	$beskrivelse = $_POST['beskrivelse']; //Recieve through post
    $passord = $_POST['innhold']; //Recieve through post
	
		
	// Create new user
    if($_SERVER["REQUEST_METHOD"] == "POST"){ //Only accept POST
	   $query = "
       
       INSERT INTO nyheter (`navn`, `nyhetType`, `beskrivelse`, `innhold`) 
       VALUES ('$navn', '$nyhetType', '$beskrivelse', '$passord')";
        
	   mysqli_query($connection, $query);
        closeConnection($connection);
    } else {
        //Redirect user
    }
        
?>