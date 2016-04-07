<?php

    $GLOBALS['i'] = 5;
    $GLOBALS['typeVisible'] = 0;
        
    function setAntallNyheter($number){
        $GLOBALS['i'] = $number;
    }
    function setTypeLimit($number2){
        $GLOBALS['typeVisible'] = $number2;
    }

    function getAlleNyheter(){
        
        include 'get_nyheter.php';
        
        while ($nyhet = mysqli_fetch_array($result)) {
            if($GLOBALS['i'] == "0"){
                break;
            } else {
                if($GLOBALS['typeVisible'] > 0){
                    if($nyhet['nyhetType'] == $GLOBALS['typeVisible']){
                        setNyhetFarge($nyhet);
                    } else {
                        continue;
                    }
                } else {
                    setNyhetFarge($nyhet);
                }
                
                echo'
                    <span class="fa fa-plus"></span>
                    <span class="fa fa-minus hidden"></span>
                    <div class="nyhet_text">
                        <span class="title" style="font-size: 200%">'.$nyhet['tittel'].'</span>
                        <h6 class="name"><strong>'.$GLOBALS['nyhetNavn'].'</strong>  Av  <strong>'.$nyhet['navn'].'</strong></h6>
                        <p class="desc more">'.$nyhet['beskrivelse'].'</p>
                        </div>
                    <span class="date">'.$nyhet['tidspunkt'].'</span>
                </div>';
            }
            $GLOBALS['i'] -= 1;
        }
        
        closeConnection($connection);
    }

    function setNyhetFarge($nyhet){
        if($nyhet['nyhetType'] == ''){
            echo'<div class="nyhet FARGE yellow">';
            $GLOBALS['nyhetNavn'] = 'Nyhet';
        }
        if($nyhet['nyhetType'] == '1'){
            echo'<div class="nyhet FARGE yellow">';
            $GLOBALS['nyhetNavn'] = 'Nyhet';
        }
        if($nyhet['nyhetType'] == '2'){
            echo'<div class="nyhet FARGE purple">';
            $GLOBALS['nyhetNavn'] = 'Arrangement';
        }
        if($nyhet['nyhetType'] == '3'){
            echo'<div class="nyhet FARGE green">';
            $GLOBALS['nyhetNavn'] = 'Gladmelding';
        }
        if($nyhet['nyhetType'] == '4'){
            echo'<div class="nyhet FARGE red">';
            $GLOBALS['nyhetNavn'] = 'Viktig Melding';
        }
        if($nyhet['nyhetType'] == '5'){
            echo'<div class="nyhet FARGE blue">';
            $GLOBALS['nyhetNavn'] = 'Humor';
        }
    }
?>