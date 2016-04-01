<?php

    // This script takes in values from POST, and stores it in the database.

    include 'db_connection.php';


    $navn = $_POST['navn']; //Recieve through post
    $tittel = $_POST['tittel']; //Recieve through post
    $nyhetType = $_POST['nyhetType']; //Recieve through post
	$beskrivelse = $_POST['beskrivelse']; //Recieve through post
    $innhold = $_POST['innhold']; //Recieve through post
	
		
	// Query and send
    if($_SERVER["REQUEST_METHOD"] == "POST"){ //Only accept POST
	   $query = "
       
       INSERT INTO nyheter (`navn`, `tittel`, `nyhetType`, `beskrivelse`, `innhold`) 
       VALUES ('$navn', '$tittel', '$nyhetType', '$beskrivelse', '$innhold')";
        
	   mysqli_query($connection, $query);
        closeConnection($connection);
        //redirect user
    } else {
        //redirect user
    }
        
?>