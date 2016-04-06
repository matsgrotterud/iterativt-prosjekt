<?php

    // This script gets all rows from 'nyheter' in database table 'nyheter'

    include 'db_connection.php';

    // Dette er spørring #1.
    $query =
        "SELECT *
        FROM nyheter
        ORDER BY postid DESC
        LIMIT 15";
        
    $result = mysqli_query($connection, $query);

?>