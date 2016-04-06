<!DOCTYPE html>
<?php
    include 'assets/php/layout.php';
    include 'assets/php/tidslinje.php';

    //-------------------------------------------------
    //For Header
    startHead();
    echo'
    <title> Tidslinje - Iterativ Webprosjekt</title>';
    endhead();
    //End For Header
    //-------------------------------------------------


    //-------------------------------------------------
    //For Body
    startBody();
    echo'
    <section class="browse_page" id="browse_page">
        <div class="wrapper">
            <div class="page_banner">
                <div class="top-text">
                    <h6 class="caps">VISNINGSSIDE: <strong>Fjerdingen Sammlingspunkt</strong></h6>
                    <div class="border short"></div>
                    <h1 class="black">Se hva som skjer</h1>
                    <h1 class="dark no-marg">Hold deg oppdatert og delta på ting du liker</h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet onasetuir lorem dolor amet ipsum lorem dolor dette er en dummy tekst bare som burde byttes.</p>
                </div>
            </div>
            <div class="page_body">';
    
    getAlleNyheter();
    
    echo'
            </div>
        </div>
    </section>';
    getCommonScripts();
    endBody();
    //End For Body
    //-------------------------------------------------
?>