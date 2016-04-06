<?php

    // This script gets all rows from 'nyheter' in database table 'nyheter'

    include 'db_connection.php';

    $i = 0;

    // Dette er spørring #1.
    $query =
        "SELECT *
        FROM nyheter
        ORDER BY postid DESC
        LIMIT 5";
        
    $result = mysqli_query($connection, $query);
        
    while ($nyhet = mysqli_fetch_array($result)) {
        
        if($i == "0"){
            $GLOBALS['1tittel'] = $nyhet['tittel'];
            $GLOBALS['1navn'] = $nyhet['navn'];
            $GLOBALS['1beskrivelse'] = $nyhet['beskrivelse'];
            $GLOBALS['1tidspunkt'] = $nyhet['tidspunkt'];
        }
        
        if($i == "1"){
            $GLOBALS['2tittel'] = $nyhet['tittel'];
            $GLOBALS['2navn'] = $nyhet['navn'];
            $GLOBALS['2beskrivelse'] = $nyhet['beskrivelse'];
            $GLOBALS['2tidspunkt'] = $nyhet['tidspunkt'];
        }
        
        if($i == "2"){
            $GLOBALS['3tittel'] = $nyhet['tittel'];
            $GLOBALS['3navn'] = $nyhet['navn'];
            $GLOBALS['3beskrivelse'] = $nyhet['beskrivelse'];
            $GLOBALS['3tidspunkt'] = $nyhet['tidspunkt'];
        }
        
        if($i == "3"){
            $GLOBALS['4tittel'] = $nyhet['tittel'];
            $GLOBALS['4navn'] = $nyhet['navn'];
            $GLOBALS['4beskrivelse'] = $nyhet['beskrivelse'];
            $GLOBALS['4tidspunkt'] = $nyhet['tidspunkt'];
        }
        
        if($i == "4"){
            $GLOBALS['5tittel'] = $nyhet['tittel'];
            $GLOBALS['5navn'] = $nyhet['navn'];
            $GLOBALS['5beskrivelse'] = $nyhet['beskrivelse'];
            $GLOBALS['5tidspunkt'] = $nyhet['tidspunkt'];
        }
        
        $i += 1;
	}

    function closeConnection(){
        closeConnection($connection);
    }

    //Nyhet 1
    function getNyhet1Tittel(){
        echo $GLOBALS['1tittel'];
    }

    function getNyhet1Navn(){
        echo $GLOBALS['1navn'];
    }

    function getNyhet1Beskrivelse(){
        echo $GLOBALS['1beskrivelse'];
    }
    
    function getNyhet1Tidspunkt(){
        echo $GLOBALS['1tidspunkt'];
    }

    //Nyhet 2
    function getNyhet2Tittel(){
        echo $GLOBALS['2tittel'];
    }

    function getNyhet2Navn(){
        echo $GLOBALS['2navn'];
    }

    function getNyhet2Beskrivelse(){
        echo $GLOBALS['2beskrivelse'];
    }
    
    function getNyhet2Tidspunkt(){
        echo $GLOBALS['2tidspunkt'];
    }

    //Nyhet 3
    function getNyhet3Tittel(){
        echo $GLOBALS['3tittel'];
    }

    function getNyhet3Navn(){
        echo $GLOBALS['3navn'];
    }

    function getNyhet3Beskrivelse(){
        echo $GLOBALS['3beskrivelse'];
    }
    
    function getNyhet3Tidspunkt(){
        echo $GLOBALS['3tidspunkt'];
    }

    //Nyhet 4
    function getNyhet4Tittel(){
        echo $GLOBALS['4tittel'];
    }

    function getNyhet4Navn(){
        echo $GLOBALS['4navn'];
    }

    function getNyhet4Beskrivelse(){
        echo $GLOBALS['4beskrivelse'];
    }
    
    function getNyhet4Tidspunkt(){
        echo $GLOBALS['4tidspunkt'];
    }
 
    //Nyhet 5
    function getNyhet5Tittel(){
        echo $GLOBALS['5tittel'];
    }

    function getNyhet5Navn(){
        echo $GLOBALS['5navn'];
    }

    function getNyhet5Beskrivelse(){
        echo $GLOBALS['5beskrivelse'];
    }
    
    function getNyhet5Tidspunkt(){
        echo $GLOBALS['5tidspunkt'];
    }

?>