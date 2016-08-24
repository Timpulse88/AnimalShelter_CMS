<!DOCTYPE html>
<html lang="en">
<head>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="PAGE TITLE">
   <meta name="author" content="mike" >
	<!--title-->
	

    <title>Humane Society</title>
	
	<!--CSS-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">	
	<link href="css/main.css" rel="stylesheet">
	<link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">	
	
	<style>
		/*.navbar {
			min-height: 50px;
		}*/
		
		/*.navbar-nav {
			margin-top: 10px;
		}*/

		.gallery-touch-container {
			height: 267px;
		}
		
		.gallery-touch-container .img-responsive
		{
			display: block;
			width: auto;
			max-height: 100%;
			margin-right:auto;
			margin-left:auto;
		}
		
		.gallery-touch-subcontainer1
		{
			width: 278px;
		}
		
		.gallery-touch-subcontainer1 .img-responsive
		{
			height: auto;
			max-width: 100%;
		}
		
		.carousel-caption h1 {
			border-radius: 17px;
			background-color:rgba(255,215,93,0.4);
			padding:5px;
			/*color: #006666;*/
		}
		
	</style>
	
	<!--Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
	
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
   <!-- <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">  -->
</head><!--/head-->
<body>
	<!-- Page Loader -->
	<div class="preloader">
        <div id="loaderImage"></div>
    </div>
    <!-- Header 2 -->   
    <div class='container-fluid'><div class='row'><div style='background-color:rgb(255,215,93); height:145px;'><br /></div></div></div> 

	<header id="navigation">
        <div class="navbar main-nav" role="banner">
            <div class="container">
			
			     <div class="navbar-header" style="z-index:1002;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
			         <a class="navbar-brand" href="/index.php">
                    	<h1 style="top-padding:30px;"><img class="img-responsive" src="images/logo.png" alt="ANIMAL SHELTER"></h1>
                    </a>					
                </div>				
			
			<div style="float:right; margin-right:10px;">
				<a class="navbar-brand" href="index.php"><h1 style="border-radius: 17px; background-color:rgba(255,215,93,0.4); padding:5px;"><font style="font-family: Georgia,Helvetica,sans-serif; font-weight: bold; color: #066; font-stretch: expanded;">ANIMAL SHELTER</font></h1></a>
			</div>	
			
				 <nav class="collapse navbar-collapse navbar-right" style="z-index:1001;">					
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/index.php"><span style="text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Home</span></a></li> 
								<li><a href="/adoption.php"><span style="text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Adopt</span></a></li>                        
                  		<li><a href="/adoptedgallery.php"><span style="text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Adopted Gallery</span></a></li>
								<li><a href="/volunteer.php"><span style="text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Volunteer</span></a></li>                  							
                  		<li><a href="/events.php"><span style="text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Events</span></a></li>					                  		
                  		<li><a href="/articles.php"><span style="text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Articles</span></a></li>                  		
                  		<li><a href="#contact"><span style="text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Contact</span></a></li>						
                    </ul>					
              </nav>
              
				<?php include "page_content.php"; ?> 
			

				

				<!--<div class="top-bar">	
					<!-- <div class="dropdown language-dropdown">						
						<a data-toggle="dropdown" href="#"><span class="change-text">English </span><i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu language-change">
							<li><a href="#">English </a></li>
							<li><a href="#">German </a></li>
							<li><a href="#">French </a></li>
							<li><a href="#">Spanish </a></li>
						</ul>								
					</div> -->
					<!-- <span class="contact-mail"><a href="mailto:EMAIL"><i class="fa fa-envelope-o"></i>EMAIL</a>&nbsp &nbsp
					<a class="mobile-tel" href="tel:PHONE" title="CLICK TO DIAL - Mobile Only"><i class="fa fa-phone"></i> PHONE</a>
					&nbsp &nbsp<i class="fa fa-location-arrow"></i>ADDRESS</span>
				</div> -->
				
				<!-- Search Functionality missing backend
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div> -->
				
				

            </div>
        </div>
    </header><!--/#navigation-->