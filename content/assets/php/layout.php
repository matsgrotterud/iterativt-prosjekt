<?php
    function startHead(){
        echo'
        <head>';
    }

    function endHead(){
        echo'
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
            <meta name="viewport" content="width=device-width, initial-scale=1" /> 
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
        </head>';
    }

    function startBody(){
        echo'
        <body>
            <section class="navigation" id="navigation">
            <div class="wrapper">
                <div class="top-banner">
                    <img src="assets/img/westerdals%20-logo-small.png">
                </div>
                <ul>
                    <li class="bars"><span class="menu-bars"><span class="fa fa-bars"></span><span class="fa fa-times hidden"></span></span></li>
                    <li class="active"><a href="home.php">Forside<span class="fa fa-home"></span></a></li>
                    <li><a href="browse.php">Tidslinje<span class="fa fa-rss"></span></a></li>
                    <li><a href="upload.php">Last Opp<span class="fa fa-cloud-upload"></span></a></li>
                    <li><a href="about.php">Om Oss<span class="fa fa-info"></span></a></li>
                </ul>
            </div>
            </section>
            <section class="dash_body" id="dash_body">';
    }
    
    function endBody(){
        getScripts();
        echo'
            </section>
        </body>';
    }
    
    function getScripts(){
        echo'
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>';
    }
?>