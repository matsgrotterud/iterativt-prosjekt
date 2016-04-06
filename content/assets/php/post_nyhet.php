<?php

    // This script takes in values from POST, and stores it in the database.

    include 'db_connection.php';


    $navn = $_POST['navn']; //Recieve through post
    $tittel = $_POST['tittel']; //Recieve through post
    $beskrivelse = $_POST['beskrivelse']; //Recieve through post

    if($_POST['nyhetType'] == 'yellow'){
        $postNyhetType = '1';
    }

    if($_POST['nyhetType'] == 'purple'){
        $postNyhetType = '2';
    }

    if($_POST['nyhetType'] == 'green'){
        $postNyhetType = '3';
    }

    if($_POST['nyhetType'] == 'red'){
        $postNyhetType = '4';
    }

    if($_POST['nyhetType'] == 'blue'){
        $postNyhetType = '5';
    }

	$nyhetType = $_POST['nyhetType']; //Recieve through post
	
		
	// Create new user
    if($_SERVER["REQUEST_METHOD"] == "POST"){ //Only accept POST
	   $query = "
       
       INSERT INTO nyheter (`navn`, `tittel`, `beskrivelse`, `innhold`, `nyhetType`) 
       VALUES ('$navn', '$tittel', '$beskrivelse', 'POST', '$postNyhetType')";
        
	   mysqli_query($connection, $query);
        closeConnection($connection);
    } else {
        header("Location: ../../browse.php");
        exit();
    }
    header("Location: ../../browse.php");
    exit(); 
?>