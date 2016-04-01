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
    <section class="browse_page" id="browse_page">
        <div class="wrapper">
            <div class="page_banner">
                <div class="top-text">
                    <h6 class="caps">VISNINGSSIDE: <strong>Fjerdingen Sammlingspunkt</strong></h6>
                    <div class="border short"></div>
                    <h1 class="black">Se hva som skjer</h1>
                    <h1 class="white no-marg">Hold deg oppdatert og delta på ting du liker</h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet onasetuir lorem dolor amet ipsum lorem dolor dette er en dummy tekst bare som burde byttes.</p>
                </div>
            </div>
            <div class="page_body">
                
            <!-- ::PHP:: -->
            <?php
                include '../assets/php/db_connection.php';
    
                $query =
                    "SELECT *
                    FROM nyheter
                    ORDER BY postid DESC
                    LIMIT 10";
        
                $result = mysqli_query($connection, $query);
        
                while ($nyhet = mysqli_fetch_array($result)) {
                    switch($nyhet['nyhetType']){
                        case 1:
                            echo'<div class="nyhet FARGE yellow">';
                            break;
                        case 2:
                            echo'<div class="nyhet FARGE red">';
                            break;
                        case 3:
                            echo'<div class="nyhet FARGE purple">';
                            break;
                        case 4:
                            echo'<div class="nyhet FARGE green">';
                            break;
                        case 5:
                            echo'<div class="nyhet FARGE blue">';
                            break;
                        default:
                            echo'<div class="nyhet FARGE yellow">';
                            break;
                    }
                    echo'<span class="fa fa-plus"></span>
                        <div class="nyhet_text">
                            <span class="title"><h1>'; echo $nyhet['tittel']; echo'</h1></span>
                            <h6 class="name">Av <strong>'; echo $nyhet['navn']; echo'</strong></h6>
                            <p class="desc more">'; echo $nyhet['beskrivelse']; echo'</p>
                        </div>
                    <span class="date">'; echo $nyhet['tidspunkt']; echo'</span>
                </div>';
                }
            
            closeConnection($connection); 
            ?>
           
            <!-- ::PHP:: -->  
                
            </div>
        </div>
    </section>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>

  </body>
</html>