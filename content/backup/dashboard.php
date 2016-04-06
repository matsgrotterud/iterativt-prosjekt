<!DOCTYPE html>
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
    <?php include 'assets/php/siste_nyheter.php';?>
    <section class="navigation" id="navigation">
        <div class="wrapper">
            <div class="top-banner">
                <img src="assets/img/westerdals%20-logo-small.png">
            </div>
            <ul>
                <li class="bars"><span class="menu-bars"><span class="fa fa-bars"></span><span class="fa fa-times hidden"></span></span></li>
                <li class="active"><a href="#welcome">Forside<span class="fa fa-home"></span></a></li>
                <li><a href="#browse">Tidslinje<span class="fa fa-rss"></span></a></li>
                <li><a href="#upload">Last Opp<span class="fa fa-cloud-upload"></span></a></li>
                <li><a href="#about">Om Oss<span class="fa fa-info"></span></a></li>
            </ul>
        </div>
    </section>
    <section class="dash_body" id="dash_body">
        <section class="welcome_page page open" id="welcome">
        <div class="wrapper">
            <div class="page_banner">
                <div class="top-text">
                    <h6 class="caps white">VELKOMMEN: <strong>Fjerdingen Sammlingspunkt</strong></h6>
                    <div class="border short white"></div>
                    <h1 class="white">Velkommen til</h1>
                    <h1 class="black no-marg">Fjerdingen Sammlingspunkt</h1>
                    <br>
                    <p class="white">Lorem ipsum dolor sit amet onasetuir lorem dolor amet ipsum lorem dolor dette er en dummy tekst bare som burde byttes.</p>
                </div>
            </div>
            <div class="row first no-marg">
                <a href="#browse" class="col-xs-3 no-pad links one">
                    <div class="link_info">
                        <h1>Tidslinje</h1>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </a>
                <a href="#upload" class="col-xs-3 no-pad links two">
                    <div class="link_info">
                        <h1>Last Opp</h1>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </a>
                <a href="#about" class="col-xs-3 no-pad links three">
                    <div class="link_info">
                        <h1>Om Oss</h1>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </a>
            </div>
            <div class="page_banner middle">
                <div class="top-text">
                    <h1 class="black">Siste Nytt</h1>
                    <div class="border short"></div>
                    <p class="black">Lorem ipsum dolor sit amet onasetuir lorem dolor amet ipsum lorem dolor dette er en dummy tekst bare som burde byttes.</p>
                </div>
            </div>
            <div class="row first no-marg">
                <div class="col-sm-6 col-xs-12 no-pad news big_news">
                    <span class="fa fa-plus"></span>
                    <span class="fa fa-minus hidden"></span>
                    <div class="news_info">
                        <h1 class="white"><?php getNyhet1Tittel();?></h1>
                        <h6 class="name"><strong>TYPE NYHET </strong>Av <strong><?php getNyhet1Navn();?></strong></h6>
                        <p class="white desc more"><?php getNyhet1Beskrivelse();?></p>
                    </div>
                    <span class="date"><?php getNyhet1Tidspunkt();?></span>
                </div>
                <div class="col-sm-6 col-xs-12 no-pad">
                    <div class="row no-marg">
                        
                        <div class="col-xs-6 no-pad news one">
                            <span class="fa fa-plus"></span>
                            <span class="fa fa-minus hidden"></span>
                            <div class="news_info">
                                <h4><?php getNyhet2Tittel();?></h4>
                                <h6 class="name"><strong>TYPE NYHET </strong>Av <strong><?php getNyhet2Navn();?></strong></h6>
                                <p class="desc more"><?php getNyhet2Beskrivelse();?></p>
                            </div>
                            <span class="date"><?php getNyhet2Tidspunkt();?></span>
                        </div>
                        
                        <div class="col-xs-6 no-pad news two">
                            <span class="fa fa-plus"></span>
                            <span class="fa fa-minus hidden"></span>
                            <div class="news_info">
                                <h4><?php getNyhet3Tittel();?></h4>
                                <h6 class="name"><strong>TYPE NYHET </strong>Av <strong><?php getNyhet3Navn();?></strong></h6>
                                <p class="desc more"><?php getNyhet3Beskrivelse();?></p>
                            </div>
                            <span class="date"><?php getNyhet3Tidspunkt();?></span>
                        </div>
                        
                        <div class="col-xs-6 no-pad news three">
                            <span class="fa fa-plus"></span>
                            <span class="fa fa-minus hidden"></span>
                            <div class="news_info">
                                <h4><?php getNyhet4Tittel();?></h4>
                                <h6 class="name"><strong>TYPE NYHET </strong>Av <strong><?php getNyhet4Navn();?></strong></h6>
                                <p class="desc more"><?php getNyhet4Beskrivelse();?></p>
                            </div>
                            <span class="date"><?php getNyhet4Tidspunkt();?></span>
                        </div>
                        
                        <div class="col-xs-6 no-pad news four">
                            <span class="fa fa-plus"></span>
                            <span class="fa fa-minus hidden"></span>
                            <div class="news_info">
                                <h4><?php getNyhet5Tittel();?></h4>
                                <h6 class="name"><strong>TYPE NYHET </strong>Av <strong><?php getNyhet5Navn();?></strong></h6>
                                <p class="desc more"><?php getNyhet5Beskrivelse();?></p>
                            </div>
                            <span class="date"><?php getNyhet5Tidspunkt();?></span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
        <div class="browse page" id="browse">
            <iframe src="faner/browse.html"></iframe>
        </div>
        <div class="upload page" id="upload">
            <iframe src="faner/upload.html"></iframe>
        </div>
        <div class="about page" id="about">
            <iframe src="faner/about.html"></iframe>
        </div>
    </section>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>

  </body>
</html>
