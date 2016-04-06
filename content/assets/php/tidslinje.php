<?php

    $GLOBALS['i'] = 5;
        
    function setAntallNyheter($number){
        $GLOBALS['i'] = $number;
    }

    function getAlleNyheter(){
        
        include 'get_nyheter.php';
        
        while ($nyhet = mysqli_fetch_array($result)) {
            if($GLOBALS['i'] == "0"){
                break;
            } else {
                if($nyhet['nyhetType'] == ''){
                    echo'<div class="nyhet FARGE yellow">';
                    $nyhetType = 'Nyhet';
                }
                if($nyhet['nyhetType'] == '1'){
                    echo'<div class="nyhet FARGE yellow">';
                    $nyhetType = 'Nyhet';
                }
                if($nyhet['nyhetType'] == '2'){
                    echo'<div class="nyhet FARGE purple">';
                    $nyhetType = 'Arrangement';
                }
                if($nyhet['nyhetType'] == '3'){
                    echo'<div class="nyhet FARGE green">';
                    $nyhetType = 'Gladmelding';
                }
                if($nyhet['nyhetType'] == '4'){
                    echo'<div class="nyhet FARGE red">';
                    $nyhetType = 'Viktig Melding';
                }
                if($nyhet['nyhetType'] == '5'){
                    echo'<div class="nyhet FARGE blue">';
                    $nyhetType = 'Humor';
                }
                
                echo'
                    <span class="fa fa-plus"></span>
                    <span class="fa fa-minus hidden"></span>
                    <div class="nyhet_text">
                        <span class="title" style="font-size: 200%">'.$nyhet['tittel'].'</span>
                        <h6 class="name"><strong>'.$nyhetType.'</strong>  Av  <strong>'.$nyhet['navn'].'</strong></h6>
                        <p class="desc more">'.$nyhet['beskrivelse'].'</p>
                        </div>
                    <span class="date">'.$nyhet['tidspunkt'].'</span>
                </div>';
            }
            $GLOBALS['i'] -= 1;
        }
        closeConnection($connection);
    }
?>