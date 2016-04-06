<?php
    function getAlleNyheter(){
        
        include 'get_nyheter.php';

        $i = 10;
        
        while ($nyhet = mysqli_fetch_array($result)) {
            if($i == "0"){
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
                        <span class="title"><h1>'.$nyhet['tittel'].'</h1></span>
                        <h6 class="name"><strong>'.$nyhetType.'</strong>  Av  <strong>'.$nyhet['navn'].'</strong></h6>
                        <p class="desc more">'.$nyhet['beskrivelse'].'</p>
                        </div>
                    <span class="date">'.$nyhet['tidspunkt'].'</span>
                </div>';
            }
            $i -= 1;
        }
        closeConnection($connection);
    }
?>