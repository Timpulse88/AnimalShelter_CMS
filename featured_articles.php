    <div id="carousel-wrapper">
		<div id="main-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/home/1.jpg); background-position: 50% 11%; max-height:650px;">
					<div class="carousel-caption container">
						<p class="animated rollIn"></p>
					</div>
				</div>
				<div class="item" style="background-image: url(images/home/2.jpg); background-position: 50% 70%; max-height:650px;">
					<div class="carousel-caption container">
						<p class="animated rollIn"></p>

					</div>
				</div>
				<div class="item" style="background-image: url(images/home/3.jpg); background-position: 50% 20%; max-height:650px;">
					<div class="carousel-caption container">
						<p class="animated rollIn"></p>
		
					</div>
				</div>
				<div class="item" style="background-image: url(images/home/4.jpg); background-position: 50% 50%; max-height:650px; background-size:100% auto;">
					<div class="carousel-caption container">
						<p class="animated rollIn"></p>

					</div>
				</div>
				<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
				<li data-target="#main-carousel" data-slide-to="3"></li>
				</ol>
			</div>
		</div> <!--/#main-carousel--> 
    </div><!--/#carousel-wrapper-->	


<?php
//$PID=11;
//Include Header_Banner Donate or Adopt
//Articles_Library_Photogallery_Style_Listing
$AID = $_GET['AID'];
if(!isset($AID))
{	
$stmt = $db->prepare("SELECT A.ID, A.HEADER, A.CONTENT, A.PICTURE, A.CAPTION, C.CATEGORY FROM ARTICLES A INNER JOIN ARTICLE_CATEGORY C ON A.CATEGORY_ID=C.ID ORDER BY C.CATEGORY, A.ID DESC");
$stmt->execute();
if ($stmt->bind_result($ID, $HEADER, $CONTENT, $PICTURE, $CAPTION, $CATEGORY)) 		
{
		echo "<div id='photo-gallery' class='padding-bottom-two'>\n";
		echo "<div class='container-fluid'>\n";
		echo "<div class='row'>\n";	
	
	$savedCat="";
	//if($CATEGORY!=$savedCat)
	while($stmt->fetch())	
	{	

		$CATEGORY=stripslashes($CATEGORY);		

		$HEADER = html_entity_decode($HEADER);
		$HEADER=stripslashes($HEADER);
		$HEADER_URL = str_replace(" ", "_", $HEADER);
		$HEADER_URL = str_replace("'", "", $HEADER_URL);

		$CAPTION = html_entity_decode($CAPTION);
		$CAPTION = stripslashes($CAPTION);			
		
		if(strlen($CAPTION) < 5)
		{				
		$CONTENT = html_entity_decode($CONTENT);
		$CONTENT = stripslashes($CONTENT);
		$CONTENT = str_replace("\n", "<br>", $CONTENT);
		$CONTENT = mb_strimwidth($CONTENT, 0, 50, "...");
		}

					
			echo "<div class='col-sm-3 col-md-2'>";
			echo "<div class='single-photo'>";
			echo "<div class='gallery-content'>";

			$Photo = "page_pics/$PICTURE";
			
			if(!file_exists($Photo) || $PICTURE == "")
					$Photo = "images/placeholder.png";

			if(file_exists($Photo))
				{									
					$imgsize = getimagesize($Photo); 
					$intHeight=$imgsize[1];
					$intWidth=$imgsize[0];
					
					echo "<div class='gallery-touch-container'>\n";
					
					//Limit width on pictures
					if(1.3 * ($intHeight) < $intWidth)					
						echo "<div style='height:278px; width:100%; overflow:hidden;'>\n";

					//Limit Height on pictures
					if(1.3 * ($intWidth) < $intHeight)					
						echo "<div style='width:278px; height:100%; overflow:hidden;'>\n";						
					
					echo "<a class='gallery-touch' href='articles.php?item=$HEADER_URL&AID=$ID' title='$HEADER' alt='$HEADER'><img src='$Photo' class='img-responsive' style='height: 100%; width: auto;' alt='$HEADER'></a>\n";
					echo "<div class='photo-info'><a href='articles.php?item=$HEADER_URL&AID=$ID' title='$HEADER'><h5>$HEADER</h5> <i class='fa fa-lightbulb-o'></i> ($CATEGORY)</a>";						

					if(strlen($CAPTION) < 5)
					{
						echo "<a class='gallery-touch' href='articles.php?item=$HEADER_URL&AID=$ID' title='$HEADER'><p style='min-height:15%; max-height:15%'>$CONTENT</p></a>\n";
					}
					else 
					{
						echo "<a class='gallery-touch' href='articles.php?item=$HEADER_URL&AID=$ID' title='$HEADER'><p style='min-height:15%; max-height:15%'>$CAPTION</p></a>\n";
					}				
					
					echo "</div>\n"; //./div photo-info
					
					//Close Width limit DIV									
					if(1.3 * ($intHeight) < $intWidth)					
						echo "</div>\n";//./Limit Width
						
					//Close height limit DIV									
					if(1.3 * ($intWidth) < $intHeight)					
						echo "</div>\n";//./Limit height						
									
					echo "</div>\n";//./	gallery-touch-container					
				
				} // if pic exists
			
			echo "</div>\n";	//./div class gallery-content
			echo "</div>\n";	//./div class single photo
			echo "</div>\n";	//./div class col-sm-3 col-md-2
			
			//Not sure where this goes : Count out Divs
			//	if($CATEGORY!=$savedCat)
			//echo "<p class='formtitle'>$CATEGORY</p>\n";

		} // for
		
		echo "</div>\n"; //./row
		echo "</div>\n"; //./container-fluid	
		echo "</div>\n"; //./photo-gallery		
		
	} // if select

	//Free Used Resources - End of Data Resource Need
	$stmt->free_result();
	$db->close();
		
	include "donate_banner.php";
	
}
else
{ 


	echo  "<div id='article-section' class='parallax-section'>";
	echo	"<div class='container'>";
	echo	"<div class='row'>";

//$AID = $_GET['AID'];
$stmt = $db->prepare("SELECT A.ID, A.HEADER, A.CONTENT, A.LINK_URL, A.LINK_TITLE, A.EMAIL_ADDRESS, A.EMAIL_TEXT, A.PICTURE, A.CAPTION, A.FILENAME, A.DOWNLOAD_TEXT, C.CATEGORY FROM ARTICLES A INNER JOIN ARTICLE_CATEGORY C ON A.CATEGORY_ID=C.ID WHERE A.ID=$AID");
$stmt->execute();
if ($stmt->bind_result($ID, $HEADER, $CONTENT, $LINK_URL, $LINK_TITLE, $EMAIL, $EMAIL_TEXT, $PICTURE, $CAPTION, $FILENAME, $DOWNLOAD_TEXT, $CATEGORY)) 
{

		while($stmt->fetch())
		{				
			$CATEGORY=stripslashes($CATEGORY);		

			$HEADER = html_entity_decode($HEADER);
			$HEADER=stripslashes($HEADER);
			
			$CONTENT = html_entity_decode($CONTENT);
			$CONTENT = stripslashes($CONTENT);
			$CONTENT = str_replace("\n", "<br>", $CONTENT);
			//$CONTENT = mb_strimwidth($CONTENT, 0, 100, "...");		
	
			$CAPTION = html_entity_decode($CAPTION);
			$CAPTION = stripslashes($CAPTION);
		
			$LINK_TITLE = html_entity_decode($LINK_TITLE);
			$LINK_TITLE = stripslashes($LINK_TITLE);
			if($LINK_TITLE == "") $LINK_TITLE = $LINK_URL;
		
			$DOWNLOAD_TEXT = stripslashes($DOWNLOAD_TEXT);

			echo "<div class='col-sm-6 box_style' style='background-color: #F5F5F5; color:#454545; padding: 15px; box-sizing: border-box; z-index:1000;'><h1>$HEADER</h1></div>\n";
					/*<!-- Button tabs -->
					<!--<ul class="nav nav-tabs" role="tablist">
						<li class="active"><a href="#video" class="btn btn-primary" role="tab" data-toggle="tab">Adopt Me</a></li>
						<li><a href="#mobilization" class="btn btn-primary" role="tab" data-toggle="tab">Contact Us</a></li>
						<li><a href="#support" class="btn btn-primary" role="tab" data-toggle="tab">Donate</a></li>
					</ul>	-->		*/		
			echo "<div class='col-sm-1'><br /></div>";
													
			if($PICTURE != "")
				{
					$Photo = "page_pics/$PICTURE";
					if(file_exists($Photo))
						{				
							echo "<div class='col-sm-5 box_style' style='background-image: url($Photo); background-position: 50% 50%; min-height:300px; height:auto; padding: 15px; box-sizing: border-box; z-index:1002' >\n";
							//echo "<img class='img-responsive' src='' alt='$HEADER' />";
							echo "<div style='text-shadow: 2px 2px 1px rgba(0, 0, 0, 1);'><h2><b>$CATEGORY</b></h2><h3>$CAPTION</h3></div>\n";
							echo "</div>\n";																	
							//echo "</div>\n";					
						} // if pic exists
					} // if pic != ""
				//<div class="col-md-4" style="background-color: #F5F5F5; padding: 15px; box-sizing: border-box;">
				echo "<div class='col-sm-12'><br /></div>";
				echo "<div class='col-lg-12 box_style' style='background-color: #F5F5F5; color:#454545; padding: 15px; box-sizing: border-box;'>";
				echo "$CONTENT";
				echo "<br /></div>";

		}

}

		//Give Donate Banner it's own Parallax section				
		echo	"</div>";
		echo	"</div>";
		echo	"</div>"; //<!--/#Parallax Section -->
		
		include "donate_banner.php";
}//./else
						

?>