<!DOCTYPE html>
<?php
    include 'assets/php/layout.php';

    //-------------------------------------------------
    //For Header
    startHead();
    echo'
    <title> Last opp - Iterativ Webprosjekt</title>';
    endhead();
    //End For Header
    //-------------------------------------------------


    //-------------------------------------------------
    //For Body
    startBody();
    echo'
    <section class="upload_page" id="upload_page">
        <div class="wrapper">
            <div class="page_banner">
                <div class="top-text">
                    <h6 class="caps">OPPLASTNINGSSIDE: <strong>Fjerdingen Sammlingspunkt</strong></h6>
                    <div class="border short"></div>
                    <h1 class="black">Del dine prosjekter</h1>
                    <h1 class="white no-marg">Åpne for muligheter</h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet onasetuir lorem dolor amet ipsum lorem dolor dette er en dummy tekst bare som burde byttes.</p>
                </div>
            </div>
            <div class="page_body">
                
                <div class="message" style="display: none">
                    <h1>Posten din er postet!</h1>
                </div>
                <form action="post_nyhet.php" method="POST">
                        <h1 class="black text-center">Skriv posten din her</h1>
                         <div class="border center"></div>
                        <input placeholder="Ditt Navn" type="text" name="navn" class="name" id="navn">

                        <input placeholder="Tittel" type="text" name="tittel" class="title" id="tittel">
                        
                        <select type="text" name="nyhetType" id="type">
                            <option value="" disabled selected>Velg type</option>
                            <option value="yellow">Nyhet</option>
                            <option value="purple">Arrangement</option>
                            <option value="green">Gladmelding</option>
                            <option value="red">Viktig melding</option>
                            <option value="blue">Humor</option>
                        </select>
                        <div class="clearfix"></div>
                        <textarea placeholder="Innhold" type="text" name="beskrivelse" style="resize: none;" id="beskrivelse"></textarea>
                    <input type="submit" value="POST" class="btn submit" id="submit">	
                </form>
            </div>
        </div>
    </section>';
    endBody();
    //End For Body
    //-------------------------------------------------
?>