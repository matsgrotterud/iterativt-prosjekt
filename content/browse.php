<!DOCTYPE html>
<?php
    include 'assets/php/layout.php';
    include 'assets/php/tidslinje.php';
    
    if(isset($_POST['antall'])){
        setAntallNyheter($_POST['antall']); //Recieve through self, POST
    }

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
                    <p style="font-size: 120%">Samarbeid, Vennskap, og Utveksling av idéer.</p>
                </div>
            </div>
            <div class="page_body">

            <form action="browse.php" method="post">
                <select name="antall" id="type">
                    <option value="" disabled selected>Antall Nyheter</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                </select>
                <input type="submit" value="Oppdater" id="submit">	
                <br>
                <br>
            </form>';
    
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