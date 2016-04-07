<!DOCTYPE html>
<?php
    include 'assets/php/layout.php';
    include 'assets/php/tidslinje.php';
    
    $GLOBALS['selected1'] = 0;
    $GLOBALS['selected2'] = 0;
    
    // SORTERING & LAGRING AV VALG
    if(isset($_POST['antall'])){
        $GLOBALS['selected1'] = $_POST['antall']; //Lagre valg
        setAntallNyheter($_POST['antall']);
    }
    if(isset($_POST['valgtnyhet'])){
        if($_POST['valgtnyhet'] > 0){
            $GLOBALS['selected2'] = $_POST['valgtnyhet']; //Lagre valg
            setTypeLimit($_POST['valgtnyhet']);
        }
    }


    //-------------------------------------------------
    //For Header
    startHead();
    echo'
    <title> Tidslinje - Iterativ Webprosjekt</title>';
    endhead('true');
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
                    <h6 class="caps">VISNINGSSIDE: <strong>Fjerdingen Samlingspunkt</strong></h6>
                    <div class="border short"></div>
                    <h1 class="black">Se hva som skjer</h1>
                    <h1 class="dark no-marg">Hold deg oppdatert og delta på ting du liker</h1>
                    <br>
                    <p style="font-size: 120%">Samarbeid, Vennskap, og Utveksling av idéer.</p>
                </div>
            </div>
            <div class="page_body">


            <!-- Sortering -->
            
            <form action="browse.php" method="post">
            
                <!-- Antall nyheter -->
                <select name="antall" id="type">
                    <option'.(($GLOBALS['selected1'] == 0 ? ' selected':'')).' value="" disabled>Antall Nyheter</option>
                    <option'.(($GLOBALS['selected1'] == 5 ? ' selected':'')).' value="5">5</option>
                    <option'.(($GLOBALS['selected1'] == 10 ? ' selected':'')).' value="10">10</option>
                    <option'.(($GLOBALS['selected1'] == 15 ? ' selected':'')).' value="15">15</option>
                    <option'.(($GLOBALS['selected1'] == 20 ? ' selected':'')).' value="20">20</option>
                    <option'.(($GLOBALS['selected1'] == 25 ? ' selected':'')).' value="25">25</option>
                </select>
                <!-- Antall nyheter -->
                
                <!-- Sortering, nyhetType -->
                <select name="valgtnyhet">
                    <option'.(($GLOBALS['selected2'] == 0 ? ' selected':'')).' value="0" disabled>Nyhet type</option>
                    <option value="0">Alle</option>
                    <option'.(($GLOBALS['selected2'] == 1 ? ' selected':'')).' value="1">Nyhet</option>
                    <option'.(($GLOBALS['selected2'] == 2 ? ' selected':'')).' value="2">Arrangement</option>
                    <option'.(($GLOBALS['selected2'] == 3 ? ' selected':'')).' value="3">Gladmelding</option>
                    <option'.(($GLOBALS['selected2'] == 4 ? ' selected':'')).' value="4">Viktig Melding</option>
                    <option'.(($GLOBALS['selected2'] == 5 ? ' selected':'')).' value="5">Humor</option>
                </select>
                <!-- Sortering, nyhetType -->
                
                <input type="submit" value="Oppdater" id="submit">	
                <br>
                <br>
            </form>
            
            <!-- Sortering -->';
    
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