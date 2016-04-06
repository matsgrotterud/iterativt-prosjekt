<?php
    function getAlleNyheter(){
        
        include 'get_nyheter.php';

        $i = 10;
        
        while ($nyhet = mysqli_fetch_array($result)) {
            if($i == "0"){
            } else {
                echo'
                <div class="nyhet FARGE red">
                    <span class="fa fa-plus"></span>
                    <span class="fa fa-minus hidden"></span>
                    <div class="nyhet_text">
                        <span class="title"><h1>'.$nyhet['tittel'].'</h1></span>
                        <h6 class="name"><strong>TYPE NYHET </strong>Av <strong>'.$nyhet['navn'].'</strong></h6>
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