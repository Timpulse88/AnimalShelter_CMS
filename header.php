<!DOCTYPE html>
<html lang="en">
<head>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="META TAG INFO">
   <meta name="author" content="mike" >
	<!--title-->
	

   <title>ANIMAL SHELTER</title>
	
	<!--CSS-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">	
	<link href="css/main.css" rel="stylesheet">
	<link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">	
	
	<style>
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
			background-color:rgba(210,210,211,0.2);
			/*
			border-radius: 17px;
			padding:5px;
			color: #006666;
			background-color: #fff;
			line-height: 20px;
			margin-bottom: 30px;
			font-size: 4em;

			*/
			padding: 20px 25px 5px 25px;
			box-shadow: inset 0 0 0 1px #e0e5e9;
			border: 5px solid #fbfbfc;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			
		}
		
		.event-info {
			background-color:rgba(210,210,211,0.2);
			padding: 20px 25px 5px 25px;
			box-shadow: inset 0 0 0 1px #e0e5e9;
			border: 5px solid #fbfbfc;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
		}
		
		.event-info p {
				color: white;
				font-size: 1em;
		}
		
		
</style>
	
	<!--Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
   <link rel="shortcut icon" href="images/ico/favicon.png">

</head><!--/head-->
<body>
	<!-- Page Loader -->
	<div class="preloader">
        <div id="loaderImage"></div>
   </div>

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
			
			<div style="float:left; margin-right:10px;">
				<a class="navbar-brand" href="~/index.php"><h1 style="padding: 3px; border-radius: 17px; background-color:rgba(210,210,211,0.7); text-shadow: 2px 2px 2px rgba(15, 15, 15, 1);"><font style="font-family: Verdana; font-weight: bold; color: #006666; font-stretch: expanded; font-size:1.2em;">ANIMAL SHELTER</font></h1></a>
			</div>
			
<!-- Tabbed look -->			
			     <nav class="collapse navbar-collapse navbar-right" style="z-index:1001;">			
                    <ul class="nav navbar-nav">
					<!-- Not Responsive for li small screen : border-right: 1px solid #b4b4b7; -->
                        <li class="active"><a href="index.php"><span style="text-shadow: 4px 4px 2px rgba(15, 15, 15, 1); border-left: 1px solid #b4b4b7;  padding-left:22px;background-color:rgba(0,102,102,0.4); padding:5px; padding-top:20px; padding-bottom:10px;">Home</span></a></li> 
						<li><a href="adoption.php"><span style="text-shadow: 4px 4px 2px rgba(15, 15, 15, 1); border-left: 1px solid #b4b4b7;  padding-left:22px;background-color:rgba(0,102,102,0.4); padding:5px; padding-top:20px; padding-bottom:10px;">Adopt</span></a></li>                        
                  		<!--<li><a href="adoptedgallery.php"><span style="text-shadow: 4px 4px 2px rgba(15, 15, 15, 1); border-left: 1px solid #b4b4b7; padding-left:22px;background-color:rgba(0,102,102,0.4); padding:5px; padding-top:20px; padding-bottom:10px;">Gallery</span></a></li>-->
						<li><a href="volunteer.php"><span style="text-shadow: 4px 4px 2px rgba(15, 15, 15, 1); border-left: 1px solid #b4b4b7;  padding-left:22px;background-color:rgba(0,102,102,0.4); padding:5px; padding-top:20px; padding-bottom:10px;">Volunteer</span></a></li>                  							
                  		<li><a href="events.php"><span style="text-shadow: 4px 4px 2px rgba(15, 15, 15, 1); border-left: 1px solid #b4b4b7;  padding-left:22px;background-color:rgba(0,102,102,0.4); padding:5px; padding-top:20px; padding-bottom:10px;">Events</span></a></li>					                  		
                  		<li><a href="articles.php"><span style="text-shadow: 4px 4px 2px rgba(15, 15, 15, 1);border-left: 1px solid #b4b4b7;  padding-left:22px;background-color:rgba(0,102,102,0.4); padding:5px; padding-top:20px; padding-bottom:10px;">Articles</span></a></li>                  		
                  		<li><a href="index.php"><span style="text-shadow: 4px 4px 2px rgba(15, 15, 15, 1); border-left: 1px solid #b4b4b7; padding-left:22px; padding-right:22px;background-color:rgba(0,102,102,0.4); padding:5px; padding-top:20px; padding-bottom:10px;">Contact</span></a></li>						
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
    
    
