<?php
    function startHead(){
        echo'
        <head>';
    }

    function endHead(){
        echo'
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
            <meta name="viewport" content="width=device-width, initial-scale=1" /> 
            <meta name="Description" content="Test tsest test" />
            <meta name="keywords" content="Test test test" />
            <meta name="author" content="Web gruppa" />
            <meta property="og:image" content="" />
            <meta property="og:title" content="" />
            <meta property="og:type" content="Website" />
            <meta property="og:description" content="testest" />
            <link rel="icon" type="image/png" href="wIcon.png">
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
        </head>';
    }

    function startBody(){
        echo'
        <body>
            <div class="navigation" id="navigation">
            <div class="wrapper">
                <div class="top-banner">
                    <img src="assets/img/westerdals%20-logo-small.png" alt="small logo">
                </div>
                <ul>
                    <li class="bars"><span class="menu-bars"><span class="fa fa-bars"></span><span class="fa fa-times hidden"></span></span></li>';
                    if (strpos($_SERVER['REQUEST_URI'], "home") !== false){
                        echo'
                        <li class="active"><a href="home.php">Forside<span class="fa fa-home"></span></a></li>
                        <li><a href="browse.php">Tidslinje<span class="fa fa-rss"></span></a></li>
                        <li><a href="upload.php">Last Opp<span class="fa fa-cloud-upload"></span></a></li>
                        <li><a href="about.php">Om Oss<span class="fa fa-info"></span></a></li>';
                    }
                    if (strpos($_SERVER['REQUEST_URI'], "browse") !== false){
                        echo'
                        <li><a href="home.php">Forside<span class="fa fa-home"></span></a></li>
                        <li class="active"><a href="browse.php">Tidslinje<span class="fa fa-rss"></span></a></li>
                        <li><a href="upload.php">Last Opp<span class="fa fa-cloud-upload"></span></a></li>
                        <li><a href="about.php">Om Oss<span class="fa fa-info"></span></a></li>';
                    }
                    if (strpos($_SERVER['REQUEST_URI'], "upload") !== false){
                        echo'
                        <li><a href="home.php">Forside<span class="fa fa-home"></span></a></li>
                        <li><a href="browse.php">Tidslinje<span class="fa fa-rss"></span></a></li>
                        <li class="active"><a href="upload.php">Last Opp<span class="fa fa-cloud-upload"></span></a></li>
                        <li><a href="about.php">Om Oss<span class="fa fa-info"></span></a></li>';
                    }
                    if (strpos($_SERVER['REQUEST_URI'], "about") !== false){
                        echo'
                        <li><a href="home.php">Forside<span class="fa fa-home"></span></a></li>
                        <li><a href="browse.php">Tidslinje<span class="fa fa-rss"></span></a></li>
                        <li><a href="upload.php">Last Opp<span class="fa fa-cloud-upload"></span></a></li>
                        <li class="active"><a href="about.php">Om Oss<span class="fa fa-info"></span></a></li>';
                    }
                    echo'
                </ul>
            </div>
            </div>
            <div class="dash_body" id="dash_body">';
    }
    
    function endBody(){
        echo'
            </div>
        </body>';
    }
    
    function getCommonScripts(){
        echo'
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>';
    }

    function getUploadScripts(){
        echo'
        <script src="assets/js/validate.js"></script>
        <script>';
            echo"
            $('select#type').change(function() {;";
                echo'
                var selectColor = $("select#type option:selected").val();
                $("textarea").removeClass().addClass(selectColor);
            });
        </script>';
    }
?>