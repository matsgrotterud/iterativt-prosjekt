<!DOCTYPE html>
<?php
    include 'assets/php/layout.php';

    //-------------------------------------------------
    //For Header
    startHead();
    echo'
    <title> Om Oss - Iterativ Webprosjekt</title>';
    endhead();
    //End For Header
    //-------------------------------------------------


    //-------------------------------------------------
    //For Body
    startBody();
    echo'
    <section class="about_page" id="about_page">
        <div class="wrapper">
            <div class="row no-marg">
                <div class="col-sm-6 col-xs-12 no-pad">
                    <div class="top-text">
                        <h6 class="caps">VI INTRODUSERER: <strong>Fjerdingen Sammlingspunkt</strong></h6>
                        <div class="border short"></div>
                        <h1 class="black">OM OSS SIDE</h1>
                        <h1 class="dark no-marg">OM OSS SIDE</h1>
                        <br>
                        <p>Lorem ipsum dolor sit amet onasetuir lorem dolor amet ipsum lorem dolor dette er en dummy tekst bare som burde byttes.</p>
                        <br>
                        <div class="buttons-inline">
                            <a href="../dashboard.html" class="btn black fill">LOGIN</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 no-pad">
                    <div class="computer-image"></div>
                </div>
            </div>
        </div>
    </section>';
    getCommonScripts();
    endBody();
    //End For Body
    //-------------------------------------------------
?>