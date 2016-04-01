<?php

    // This script gets all rows from 'nyheter' in database table 'nyheter'

    include 'db_connection.php';
    
    $query =
        "SELECT *
        FROM nyheter
        ORDER BY postid DESC
        LIMIT 10";
        
    $result = mysqli_query($connection, $query);
        
    while ($nyhet = mysqli_fetch_array($result)) {
		echo $nyhet['navn']." ";
        echo $nyhet['tidspunkt']."<br/>";
	}

    closeConnection($connection);
?>