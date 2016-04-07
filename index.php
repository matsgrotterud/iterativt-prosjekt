<!DOCTYPE html>
<?php
    include 'content/assets/php/layout.php';

    //-------------------------------------------------
    //For Header
    startHead();
    echo'
    <title> Last opp - Iterativ Webprosjekt</title>';
    endhead(false);
    //End For Header
    //-------------------------------------------------

    echo'
    <body>
        <div class="front_page" id="front_page">
            <div class="wrapper">
                <div class="row no-marg">
                    <div class="col-sm-6 col-xs-12 no-pad">
                        <div class="top-text">
                            <h6 class="caps">VI INTRODUSERER: <strong>Fjerdingen Sammlingspunkt</strong></h6>
                            <div class="border short"></div>
                            <h1 class="black">Samarbeid, Vennskap, og Utveksling av idéer.</h1>
                            <h1 class="dark no-marg">Iterativt Webprosjekt</h1>
                            <br>
                            <p style="font-size: 130%">Hjemmesiden for alle fra avdeling for Teknologi.</p>
                            <br>
                            <a href="content/home.php" class="btn black fill">FORTSETT</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 no-pad">
                        <div class="computer-image"></div>
                    </div>
                </div>
            </div>';
    endBody();                    
?>