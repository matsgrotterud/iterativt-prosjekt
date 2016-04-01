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
		<link rel="shortcut icon" href="favicon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/fonts/montserrat/css/montserrat.css" />
        <link rel="stylesheet" type="text/css" href="../assets/fonts/arcon/css/arcon.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/app.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <!--<script src="js/modernizr.js"></script>
		[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body>
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
                <div class="page_banner">
                    <div class="fa fa-plus">
                        <h6 class="caps">OPPRETT: <strong>NYHET</strong></h6>
                        <div class="border short"></div>
                        
                        <!-- Form -->
                        <form action="post_nyhet.php" method="POST">
                                    <label>
                                        Ditt navn:
                                        <br>
                                        <input type="text" name="navn">
                                    </label>
                                    <br>
                                    <label>
                                        Brukernavn:
                                        <br>
                                        <input type="text" name="brukernavn">
                                    </label>
                                    <br>
                                    <label>
                                        Passord:
                                        <br>
                                        <input type="text" name="passord">
                                    </label>
                                    <br>
                                    <br>
                                    <input class="btn black fill" type="submit" value="SEND">	
                                </form>
                            <form action="post_nyhet.php" method="POST">
                                <label>
                                    Ditt navn:
                                    <br>
                                    <input type="text" name="navn">
                                </label>
                                <br>
                                <label>
                                    Tittel:
                                    <br>
                                    <input type="text" name="tittel">
                                </label>
                                <br>
                                <label>
                                    Beskrivelse:
                                    <br>
                                    <input type="text" name="beskrivelse">
                                </label>
                                <br>
                                <label>
                                    Innhold:
                                    <br>
                                    <input type="text" name="innhold">
                                </label>
                                <br>
                                <label>
                                    Type:
                                    <br>
                                    <input type="text" name="nyhetType">
                                </label>
                                <br>
                                <br>
                                <input type="submit" value="SEND">	
                            </form>
                        <form action="post_nyhet.php" method="POST">
                            <input type="text" name="nyhetType">
                            <input type="submit" name="submitted" value="submit">
                        </form>
                        <!-- END Form -->
                        
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>

  </body>
</html>
