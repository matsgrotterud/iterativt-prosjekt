<?php

    include 'get_nyheter.php';

    $i = 0;

    while ($nyhet = mysqli_fetch_array($result)) {
        
        if($i == "0"){
            $GLOBALS['1tittel'] = $nyhet['tittel'];
            $GLOBALS['1navn'] = $nyhet['navn'];
            $GLOBALS['1beskrivelse'] = $nyhet['beskrivelse'];
            $GLOBALS['1tidspunkt'] = $nyhet['tidspunkt'];
            sjekkNyhetType($nyhet['nyhetType']);
            $GLOBALS['1nyhetType'] = $GLOBALS['nyhetType'];
            
        }
        
        if($i == "1"){
            $GLOBALS['2tittel'] = $nyhet['tittel'];
            $GLOBALS['2navn'] = $nyhet['navn'];
            $GLOBALS['2beskrivelse'] = $nyhet['beskrivelse'];
            $GLOBALS['2tidspunkt'] = $nyhet['tidspunkt'];
            sjekkNyhetType($nyhet['nyhetType']);
            $GLOBALS['2nyhetType'] = $nyhetType;
        }
        
        if($i == "2"){
            $GLOBALS['3tittel'] = $nyhet['tittel'];
            $GLOBALS['3navn'] = $nyhet['navn'];
            $GLOBALS['3beskrivelse'] = $nyhet['beskrivelse'];
            $GLOBALS['3tidspunkt'] = $nyhet['tidspunkt'];
            sjekkNyhetType($nyhet['nyhetType']);
            $GLOBALS['3nyhetType'] = $nyhetType;
        }
        
        if($i == "3"){
            $GLOBALS['4tittel'] = $nyhet['tittel'];
            $GLOBALS['4navn'] = $nyhet['navn'];
            $GLOBALS['4beskrivelse'] = $nyhet['beskrivelse'];
            $GLOBALS['4tidspunkt'] = $nyhet['tidspunkt'];
            sjekkNyhetType($nyhet['nyhetType']);
            $GLOBALS['4nyhetType'] = $nyhetType;
        }
        
        if($i == "4"){
            $GLOBALS['5tittel'] = $nyhet['tittel'];
            $GLOBALS['5navn'] = $nyhet['navn'];
            $GLOBALS['5beskrivelse'] = $nyhet['beskrivelse'];
            $GLOBALS['5tidspunkt'] = $nyhet['tidspunkt'];
            sjekkNyhetType($nyhet['nyhetType']);
            $GLOBALS['5nyhetType'] = $nyhetType;
        }
        
        $i += 1;
	}
    
    function sjekkNyhetType($nyhetType){
        if($nyhetType == '1'){
            $GLOBALS['nyhetType'] = 'Nyhet';
        }
        if($nyhetType == '2'){
            $GLOBALS['nyhetType'] = 'Arrangement';
        }
        if($nyhetType == '3'){
            $GLOBALS['nyhetType'] = 'Gladmelding';
        }
        if($nyhetType == '4'){
            $GLOBALS['nyhetType'] = 'Viktig Melding';
        }
        if($nyhetType == '5'){
            $GLOBALS['nyhetType'] = 'Humor';
        }
    }

    closeConnection($connection);

?>