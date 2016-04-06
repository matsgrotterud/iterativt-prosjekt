<!DOCTYPE html>
<?php
    include 'assets/php/layout.php';
    include 'assets/php/siste_nyheter.php';

    //-------------------------------------------------
    //For Header
    startHead();
    echo'
    <title> Dashboard - Iterativ Webprosjekt</title>';
    endhead();
    //End For Header
    //-------------------------------------------------


    //-------------------------------------------------
    //For Body
    startBody();
    echo'
        <section class="welcome_page page open" id="welcome">
        <div class="wrapper">
            <div class="page_banner">
                <div class="top-text">
                    <h6 class="caps white">VELKOMMEN: <strong>Fjerdingen Sammlingspunkt</strong></h6>
                    <div class="border short white"></div>
                    <h2 class="white">Velkommen til</h2>
                    <h2 class="black no-marg">Fjerdingen Sammlingspunkt</h2>
                    <br>
                    <p class="white">Lorem ipsum dolor sit amet onasetuir lorem dolor amet ipsum lorem dolor dette er en dummy tekst bare som burde byttes.</p>
                </div>
            </div>
            <div class="row first no-marg">
                <div class="col-sm-6 col-xs-12 no-pad news big_news">
                    <span class="fa fa-plus"></span>
                    <span class="fa fa-minus hidden"></span>
                    <div class="news_info">
                        <h2 class="white">'.$GLOBALS['1tittel'].'</h2>
                        <h6 class="name"><strong>'.$GLOBALS['1nyhetType'].'</strong> Av <strong>'.$GLOBALS['1navn'].'</strong></h6>
                        <p class="white desc more">'.$GLOBALS['1beskrivelse'].'</p>
                    </div>
                    <span class="date">'.$GLOBALS['1tidspunkt'].'</span>
                </div>
                <div class="col-sm-6 col-xs-12 no-pad">
                    <div class="row no-marg">
                        
                        <div class="col-xs-6 no-pad news one">
                            <span class="fa fa-plus"></span>
                            <span class="fa fa-minus hidden"></span>
                            <div class="news_info">
                                <h4>'.$GLOBALS['2tittel'].'</h4>
                                <h6 class="name"><strong>'.$GLOBALS['2nyhetType'].'</strong> Av <strong>'.$GLOBALS['2navn'].'</strong></h6>
                                <p class="desc more">'.$GLOBALS['2beskrivelse'].'</p>
                            </div>
                            <span class="date">'.$GLOBALS['2tidspunkt'].'</span>
                        </div>
                        
                        <div class="col-xs-6 no-pad news two">
                            <span class="fa fa-plus"></span>
                            <span class="fa fa-minus hidden"></span>
                            <div class="news_info">
                                <h4>'.$GLOBALS['3tittel'].'</h4>
                                <h6 class="name"><strong>'.$GLOBALS['3nyhetType'].'</strong> Av <strong>'.$GLOBALS['3navn'].'</strong></h6>
                                <p class="desc more">'.$GLOBALS['3beskrivelse'].'</p>
                            </div>
                            <span class="date">'.$GLOBALS['3tidspunkt'].'</span>
                        </div>
                        
                        <div class="col-xs-6 no-pad news three">
                            <span class="fa fa-plus"></span>
                            <span class="fa fa-minus hidden"></span>
                            <div class="news_info">
                                <h4>'.$GLOBALS['4tittel'].'</h4>
                                <h6 class="name"><strong>'.$GLOBALS['4nyhetType'].'</strong> Av <strong>'.$GLOBALS['4navn'].'</strong></h6>
                                <p class="desc more">'.$GLOBALS['4beskrivelse'].'</p>
                            </div>
                            <span class="date">'.$GLOBALS['4tidspunkt'].'</span>
                        </div>
                        
                        <div class="col-xs-6 no-pad news four">
                            <span class="fa fa-plus"></span>
                            <span class="fa fa-minus hidden"></span>
                            <div class="news_info">
                                <h4>'.$GLOBALS['5tittel'].'</h4>
                                <h6 class="name"><strong>'.$GLOBALS['5nyhetType'].'</strong> Av <strong>'.$GLOBALS['5navn'].'</strong></h6>
                                <p class="desc more">'.$GLOBALS['5beskrivelse'].'</p>
                            </div>
                            <span class="date">'.$GLOBALS['5tidspunkt'].'</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>';
    getCommonScripts();
    endBody();
    //End For Body
    //-------------------------------------------------
?>