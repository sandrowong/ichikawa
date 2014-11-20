<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<? echo $metaDescription; ?>">
    <meta name="keywords" content="<? echo $metaKeywords; ?>">
    <meta name="author" content="Team Alpha">
    <link rel="icon" href="img/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">    

    <title>Ichikawa Shabu Fondue &amp; Sushi<? echo $headTitle; ?></title>

    <!-- CSS, SOON I WILL COMPILE ALL INTO ONE CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Google Analytics -->
<? //include_once "googleanalytics.php"; ?>  

  </head>
  <body>

  
    <!--  HEADER 
    ================================================ -->
    <section id="home" class="container"> <!-- Nav Container -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> <!-- Navbar -->
        <div class="container"> <!-- Container -->
          <section class="navbar-header"> <!-- Hamburger Menu -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button> 
            <a class="main-logo pull-left" href="http://<? echo $_SERVER["HTTP_HOST"];?>"></a> <!-- Ichikawa Logo in CSS -->
          </section> <!-- End of Hamburger Menu -->
          <div id="navbar" class="navbar-collapse collapse"> <!-- Navbar Links -->
            <ul class="nav navbar-nav nav-custom">
              <li<? echo $homeActive;?>><a href="http://<? echo $_SERVER["HTTP_HOST"];?>/home">Home</a></li>
              <li<? echo $menuActive;?>><a href="http://<? echo $_SERVER["HTTP_HOST"];?>/menu">Menu</a></li>
              <li<? echo $aboutActive;?>><a href="http://<? echo $_SERVER["HTTP_HOST"];?>/about">About Ichikawa</a></li>
              <li<? echo $contactActive;?>><a href="http://<? echo $_SERVER["HTTP_HOST"];?>/contact">Contact us</a></li>
            </ul>
          </div> <!-- End of Navbar Links -->
        </div> <!-- End Container -->
      </nav> <!-- End of Navbar -->
    </section> <!-- End of Nav Container -->

    <section class="container-fluid mobile-nav visible-xs-block">  <!-- Mobile Blocks -->
      <div class="row">
        <a style="display:block" href="<? echo $_SERVER["PHP_SELF"];?>?l=menu"><div class="col-xs-4 mobile-fav"><i class="fa fa-cutlery"></i><br> MENU</div></a>
        <a style="display:block" href="http://www.yelp.com/biz/ichikawa-shabu-fondue-and-sushi-chino-hills" target="_blank"><div class="col-xs-4 mobile-fav"><i class="fa fa-yelp"></i><br> YELP</div></a>
        <a style="display:block" href="https://www.google.com/maps/place/Ichi+Kawa/@33.9817661,-117.7023749,17z/data=!4m7!1m4!3m3!1s0x80dccd3b4a66067f:0xff160a6060411839!2s4665+Chino+Hills+Pkwy,+Chino+Hills,+CA+91709!3b1!3m1!1s0x0000000000000000:0x78bb4af4ca93c348"><div class="col-xs-4 mobile-fav"><i class="fa fa-location-arrow"></i><br> LOCATION</div></a>
      </div>
    </section> <!-- End of Mobile Blocks -->
