<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1" /> 
		<title>Iterativt Webprosjekt</title>
		<meta name="Description" content="Test tsest test" />
		<meta name="keywords" content="Test test test" />
		<meta name="author" content="Web gruppa" />
		<meta property="og:image" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="Website" />
        <meta property="og:description" content="testest" />
		<link rel="shortcut icon" href="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/fonts/montserrat/css/montserrat.css" />
        <link rel="stylesheet" type="text/css" href="assets/fonts/arcon/css/arcon.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/app.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!--<script src="js/modernizr.js"></script>
		[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    </head>
    <body>
        
    <?php
    if(isset($_SESSION[‘loggedin’])){
        //IS AUTHENTICATED
        echo '<section class="front_page" id="front_page">
            <div class="wrapper">
                <div class="row no-marg">
                    <div class="col-sm-6 col-xs-12 no-pad">
                        <div class="top-text">
                            <h6 class="caps">VI INTRODUSERER: <strong>Fjerdingen Sammlingspunkt</strong></h6>
                            <div class="border short"></div>
                            <h1 class="black">Velkommen tilbake, X</h1>
                            <h1 class="dark no-marg">Flott sted, fint sted. Sånn er det.</h1>
                            <br>
                            <p>Lorem ipsum dolor sit amet onasetuir lorem dolor amet ipsum lorem dolor dette er en dummy tekst bare som burde byttes.</p>
                            <br>
                            <div class="buttons-inline">
                                <a href="dashboard.html" class="btn black fill">1FORTSETT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 no-pad">
                        <div class="computer-image"></div>
                    </div>
                </div>
            </div>
        </section>';
        //IS AUTHENTICATED END
                                
    } else {
        //NOT AUTHENTICATED
        echo '<section class="front_page" id="front_page">
            <div class="wrapper">
                <div class="row no-marg">
                    <div class="col-sm-6 col-xs-12 no-pad">
                        <div class="top-text">
                            <h6 class="caps">VI INTRODUSERER: <strong>Fjerdingen Sammlingspunkt</strong></h6>
                            <div class="border short"></div>
                            <h1 class="black">Velkommen.</h1>
                            <h1 class="dark no-marg">Flott sted, fint sted. Sånn er det.</h1>
                            <br>
                            <p>Lorem ipsum dolor sit amet onasetuir lorem dolor amet ipsum lorem dolor dette er en dummy tekst bare som burde byttes.</p>
                            <br>
                            <div class="buttons-inline">
                                <a href="login.php" class="btn black fill">LOGIN</a>
                                <a href="register.php" class="btn black fill">REGISTRER</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 no-pad">
                        <div class="computer-image"></div>
                    </div>
                </div>
            </div>
        </section>';
        //NOT AUTHENTICATED END
    }?>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>

  </body>
</html>
