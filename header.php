<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link href="components/css/font-awesome.css" rel="stylesheet">    
	
    <title>Ichikawa Shabu Fondue &amp; Sushi</title>

    <!-- Bootstrap core CSS -->
    <link href="build/css/style.min.css" rel="stylesheet">

	<!-- Custom styles for navbar and ? -->
    <link href="components/css/custom.css" rel="stylesheet">
	
    <!-- Carousel styles -->
    <link href="components/css/carousel.css" rel="stylesheet">
	
  </head>
  <body>
	  
	<!-- Fixed Navbar ================================================== -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="main-logo pull-left" href="<? echo $_SERVER["PHP_SELF"];?>?l=home"></a>
		</div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav nav-custom">
                <li<? echo $homeActive;?>><a href="<? echo $_SERVER["PHP_SELF"];?>?l=home">Home</a></li>
                  <li class="dropdown<? echo $menuActive;?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<? echo $_SERVER["PHP_SELF"];?>?l=menu">Action</a></li>
                    <li><a href="<? echo $_SERVER["PHP_SELF"];?>?l=menu">Another action</a></li>
                    <li><a href="<? echo $_SERVER["PHP_SELF"];?>?l=menu">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="<? echo $_SERVER["PHP_SELF"];?>?l=menu">Separated link</a></li>
                    <li><a href="<? echo $_SERVER["PHP_SELF"];?>?l=menu">One more separated link</a></li>
                  </ul>
                </li>
                <li<? echo $aboutActive;?>><a href="<? echo $_SERVER["PHP_SELF"];?>?l=about">About Ichikawa</a></li>
                <li class="dropdown<? echo $contactActive;?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Us <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<? echo $_SERVER["PHP_SELF"];?>?l=contact">Action</a></li>
                    <li><a href="<? echo $_SERVER["PHP_SELF"];?>?l=contact">Another action</a></li>
                    <li><a href="<? echo $_SERVER["PHP_SELF"];?>?l=contact">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="<? echo $_SERVER["PHP_SELF"];?>?l=contact">Separated link</a></li>
                    <li><a href="<? echo $_SERVER["PHP_SELF"];?>?l=contact">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
      </div>
    </nav>
	
	<div class="container-fluid mobile-nav visible-xs-block">
		<div class="row">
			<a style="display:block" href="#"><div class="col-xs-4 mobile-fav"><i class="fa fa-cutlery"></i><br> MENU</div></a>
			<a style="display:block" href="#"><div class="col-xs-4 mobile-fav"><i class="fa fa-thumbs-o-up"></i><br> SOCIAL</div></a>
			<a style="display:block" href="#"><div class="col-xs-4 mobile-fav"><i class="fa fa-location-arrow"></i><br> LOCATION</div></a>
		</div>
	</div>