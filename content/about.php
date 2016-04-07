<!DOCTYPE html>
<?php
    include 'assets/php/layout.php';

    //-------------------------------------------------
    //For Header
    startHead();
    echo'
    <title> Om Oss - Iterativ Webprosjekt</title>';
    endhead('true');
    //End For Header
    //-------------------------------------------------


    //-------------------------------------------------
    //For Body
    startBody();
    echo'
    <section class="about_page" id="about_page">
        <div class="wrapper">
            <div class="row no-marg">
                <div class="page_banner white">
                    <div class="col-sm-6 col-xs-12 no-pad">
                        <div class="top-text">
                            <h6 class="caps">OM OSS: <strong>Fjerdingen Samlingspunkt</strong></h6>
                            <div class="border short"></div>
                            <h1 class="black">OM OSS</h1>
                            <h1 class="dark no-marg">ITERATIV WEBPROSJEKT<br>GRUPPE 32<br>EKSAMENSOPPGAVE VÅREN 2016</h1>
                            <br>
                            <h6 style="font-size: 150%">En side laget av studenter ved avdeling for Teknologi på Westerdals ACT.<br><br>Mats Grøtterud<br>Huong Duy Nguyen<br>Kristoffer Berntsen</h6>
                            <br>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>';
    getCommonScripts();
    endBody();
    //End For Body
    //-------------------------------------------------
?>