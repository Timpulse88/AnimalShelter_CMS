<?php
//$PID=11;
include "header2.php";
include "page_content.php";

if(!isset($ID))
{	

	$rPage = mysql_query("SELECT ID, ADOPTED, ANIMAL_NAME, PICTURE FROM FEATURED ORDER BY ADOPTED, RAND() LIMIT 36");
	if($rPage) 			
	{
		echo "<div id='photo-gallery' class='padding-bottom-two'>\n";
		echo "<div class='container-fluid'>\n";
		echo "<div class='row'>\n";
		
	for($p=0; $p<mysql_num_rows($rPage); $p++)
		{												
			$AID = mysql_result($rPage, $p, "ID");
			$ADOPTED = mysql_result($rPage, $p, "ADOPTED");	
			$ANIMAL_NAME = mysql_result($rPage, $p, "ANIMAL_NAME");				
			$ANIMAL_NAME = stripslashes($ANIMAL_NAME);
			$ANIMAL_NAME = str_replace('"', "''", $ANIMAL_NAME);
			$PICTURE = mysql_result($rPage, $p, "PICTURE");
					
			echo "<div class='col-sm-3 col-md-2'>";
			echo "<div class='single-photo'>";
			echo "<div class='gallery-content'>";

			if($PICTURE != "")
			{
				$Photo = "page_pics/$PICTURE";
				if(file_exists($Photo))
				{						
					//$maxHeight=267;
					//$maxWisdth=278;					
					$imgsize = getimagesize($Photo); 
					$intHeight=$imgsize[1];
					$intWidth=$imgsize[0];
					//if($intHeight > $maxHeight)
					
					echo "<div class='gallery-touch-container'>\n";
					//echo "<div class='gallery-touch-subcontainer1'>\n";
					if(1.3 * ($intHeight) < $intWidth)					
						echo "<div style='width:278px;overflow:hidden'>\n";
					
					echo "<a class='gallery-touch' href='featured_adopted.php?Name=$ANIMAL_NAME&ID=$AID' title='Read more about $ANIMAL_NAME'><img src='$Photo' class='img-responsive' style='height: 100%; width: auto;' alt='Read more about $ANIMAL_NAME'></a>\n";
					echo "<div class='photo-info'><a class='gallery-touch' href='featured_adopted.php?Name=$ANIMAL_NAME&ID=$AID' title='Read more about $ANIMAL_NAME'><h4>Hi, I'm $ANIMAL_NAME!</h4><i class='fa fa-smile-o'></i></a>\n";
					
					if(1.3 * ($intHeight) < $intWidth)					
						echo "</div>\n";
														
					//<a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"></a>
				
					//if($ADOPTED==0)
					//else
					//echo " align='center' class='formtitle'>Hi, I'm $ANIMAL_NAME,<br>I've been adopted!</p>\n";
					//echo "<a href='featured_adopted.php?Name=$ANIMAL_NAME&ID=$AID' title='Read more about $ANIMAL_NAME'>More about $ANIMAL_NAME</a>\n";
				
				} // if pic exists
			} // if pic != ""

			//echo "</div>\n";
			echo "</div>\n";
			echo "</div>\n";
			echo "</div>\n";
			echo "</div>\n";
			echo "</div>\n";

			//$variable = $p+1; // change "c"
			//$intRows = mysql_num_rows($rPage); // change "rPics"
			//$intRemain = ($variable % 4);	
			
			/*if($intRemain == 0 or ($variable==$intRows))
			{
				echo "</tr> \n";
				if($variable < $intRows)
					echo "<tr>";
			}*/
			
		} // for
		

		echo "</div>\n";
		echo "</div>\n";		
		echo "</div><!--/#Photo-Gallery-->\n";
	} // if select
}
else
{ 
	//Animal Picture View and Data load
		$rPage = mysql_query("SELECT * FROM FEATURED WHERE ID=$ID");	
		if($rPage)
		{
			for($p=0; $p<mysql_num_rows($rPage); $p++)
			{												
				$AID = mysql_result($rPage, $p, "ID");
				$ADOPTED = mysql_result($rPage, $p, "ADOPTED");	
				$ANIMAL_NAME = mysql_result($rPage, $p, "ANIMAL_NAME");				
				$ANIMAL_NAME = stripslashes($ANIMAL_NAME);
				$ANIMAL_NAME = str_replace('"', "''", $ANIMAL_NAME);
				$PICTURE = mysql_result($rPage, $p, "PICTURE");	
				$DESCRIPTION = mysql_result($rPage, $p, "DESCRIPTION");
				$DESCRIPTION = stripslashes($DESCRIPTION);	
				$DESCRIPTION = str_replace("\n", "<br>", $DESCRIPTION);
				$LOCATION = mysql_result($rPage, $p, "LOCATION");	
				$FEE_TYPE = mysql_result($rPage, $p, "FEE_TYPE");	
				if($FEE_TYPE=="W") $fee="Waived";
				else if($FEE_TYPE=="R") $fee="Reduced";
				else $fee = "Standard";
			}
		}
	
?>
<!-- Space for Translucent Menu at top -->
	<!-- Featured Animal loadout -->
	<div id="video-section" class="parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1><?php echo $ANIMAL_NAME; ?></h1>
					<p class="lead">Will You take me home?</p>
					<!-- Button tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="active"><a href="#video" class="btn btn-primary" role="tab" data-toggle="tab">Adopt Me</a></li>
						<li><a href="#mobilization" class="btn btn-primary" role="tab" data-toggle="tab">Contact Us</a></li>
						<li><a href="#support" class="btn btn-primary" role="tab" data-toggle="tab">Donate</a></li>
						<!--<li><a href="#info" class="btn btn-primary" role="tab" data-toggle="tab">Info</a></li>-->						
					</ul>					
					<p>			
					<?php
					if($DESCRIPTION!= "")
						echo "<p>$DESCRIPTION</p>\n";
						if($FEE_TYPE=="W")
							echo "<p><em><b>As an added incentive for you to take me home, my Adoption Fee is Waived! All donations are greatly appreciated.</b></em></p>\n";
					if($ADOPTED==1)
					echo "Interested in adopting me? Contact the shelter! Call PHONE or <a href='mailto:EMAIL?Subject=$ANIMAL_NAME'>Send an Email</a>";
					if($LOCATION=="P")
						echo " -- <em>don't forget to tell them I am at Petsmart</a>.\n";
						echo "<p>Read more <a href='featured_adopted.php' title='Adoption Success Stories and Featured Pets at ANIMAL SHELTER'>Adoption Success Stories and View Featured Pets</a> here.</p>\n";
					?>
				</div>

				<div class="col-sm-6">
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane fade in active" id="video">
							<div class="embed-responsive embed-responsive-4by3">
							<?php												
								if($PICTURE != "")
								{
									$Photo = "page_pics/$PICTURE";
									if(file_exists($Photo))
									{				
										echo "<div class='gallery-touch-subcontainer1' >\n";
										echo "<img class='img-responsive' src='$Photo' width=$intWidth border=1 alt='$ANIMAL_NAME'></div>\n";					
									} // if pic exists
								} // if pic != ""
							?>
							</div>
						</div>
						<div class="tab-pane fade" id="mobilization">
							<img class="img-responsive" src="images/mobilization.jpg" alt="" />
						</div>
						<div class="tab-pane fade" id="support">
							<h1>Shelter Contacts</h1>
							<p></p>
							<ul>
								<li><a href="#"><i class="fa fa-angle-right"></i> Phasellus porta</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Fusce suscipit varius.</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Cum sociis natoque penatibus</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Nascetur ridiculus mus.</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Typi non habent claritatem</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Mirum est notare quam</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Eodem modo typi</a></li>
							</ul>
						</div>
						<div class="tab-pane fade" id="info">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--/#Feature Animal Profile --> 
	

	<!-- PayPal Donate Button-->                       
	<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
	<div class="container">
			<div class="call-to-action">
				<div class="row">
					<div class="col-sm-9">
						<h1>Donate and Adopt!</h1>
						<p>Become a Monthly Sponsor for <span><?php echo $ANIMAL_NAME; ?></span></p>
						<?php //phpinfo(); ?>
					</div>
				<div class="col-sm-3">

            <input type="submit" class="pull-right btn btn-primary" name="Sponsor <?php echo $ANIMAL_NAME; ?>" alt="Become a Monthly Sponsor for <?php echo $ANIMAL_NAME; ?>">
						<select name="a3"><option value="5.00">$5.00</option><option value="10.00" selected>$10.00</option><option value="15.00">$15.00</option><option value="20.00">$20.00</option><option value="25.00">$25.00</option><option value="35.00">$35.00</option><option value="50.00">$50.00</option><option value="100.00">$100.00</option></select>	
	        
			<input type="hidden" name="cmd" value="_xclick-subscriptions">
			<input type="hidden" name="business" value="EMAIL">
			<input type="hidden" name="item_name" value="Sponsor &quot;<?php echo $ANIMAL_NAME; ?>&quot;">
			<input type="hidden" name="no_shipping" value="1">
       
			</form>   
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">         
            <p><input type="image" src="images/pp_donate.jpg" border="0" name="submit" alt="One time Donation for <?php echo $ANIMAL_NAME; ?>"></p>
			<input name="amount" value="10.00" size=8>    			    
			<input type="hidden" name="cmd" value="_donations">
			<input type="hidden" name="business" value="EMAIL">
			<input type="hidden" name="item_name" value="Donation for &quot;<?php echo $ANIMAL_NAME; ?>&quot;">
			<input type="hidden" name="no_shipping" value="1">   
			<input type="hidden" name="currency_code" value="USD">              
			</form>   
					</div>
				</div>
			</div><!--/.call to action-->			
	<!--</div>-->	
<?php } 
include "footer.php";
?>