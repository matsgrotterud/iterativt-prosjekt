<?php

    // This script takes in values from POST, and stores it in the database.

    include 'db_connection.php';


    $navn = $_POST['navn']; //Recieve through post
    $tittel = $_POST['tittel']; //Recieve through post
    $beskrivelse = $_POST['beskrivelse']; //Recieve through post
	$nyhetType = $_POST['nyhetType']; //Recieve through post
	
		
	// Create new user
    if($_SERVER["REQUEST_METHOD"] == "POST"){ //Only accept POST
	   $query = "
       
       INSERT INTO nyheter (`navn`, `tittel`, `beskrivelse`, `innhold`, `nyhetType`) 
       VALUES ('$navn', '$tittel', '$beskrivelse', 'POST', '$nyhetType')";
        
	   mysqli_query($connection, $query);
        closeConnection($connection);
    } else {
        header("Location: ../../browse.php");
        exit();
    }
    header("Location: ../../browse.php");
    exit(); 
?>