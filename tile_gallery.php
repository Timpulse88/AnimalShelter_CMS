<?php
//RANDOM PHOTO DISPLAY
//CREATE FOLDER OF SQUARE PICTURES OF EQUAL HEIGHT AND WIDTH
		echo "<div id='photo-gallery' class='padding-bottom-two'>\n";
		echo "<div class='container-fluid'>\n";
		echo "<div class='row'>\n";
		
		//$PIC = rand(1, 178);
		
		$tiles = 25;
		$array = array_fill(0, $tiles, NULL);

		for ($i = 0; $i < $tiles; $i += 1) {
			$array[$i] = rand(1, 178);
			}

		for ($i = 0; $i < $tiles; $i += 1) {

			$PICTURE = "$array[$i]" + ".jpg";
			
			echo "<div class='col-sm-3 col-md-2'>";
			echo "<div class='single-photo'>";
			echo "<div class='gallery-content'>";

			if($PICTURE != "")
			{
				$Photo = "images/tiles/$PICTURE";
				if(file_exists($Photo))
				{						
					//$maxHeight=267;
					//$maxWisdth=278;					
					//$imgsize = getimagesize($Photo); 
					//$intHeight=$imgsize[1];
					//$intWidth=$imgsize[0];
					//if($intHeight > $maxHeight)
					
					echo "<div class='gallery-touch-container'>\n";
					//echo "<div class='gallery-touch-subcontainer1'>\n";
					//if(1.3 * ($intHeight) < $intWidth)					
						//echo "<div style='width:278px;overflow:hidden'>\n";
					
					echo "<img src='$Photo' class='img-responsive' style='height: 100%; width: auto;'>\n";
					
					//if(1.3 * ($intHeight) < $intWidth)					
						//echo "</div>\n";
														
					//<a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"></a>
				
					//if($ADOPTED==0)
					//else
					//echo " align='center' class='formtitle'>Hi, I'm $ANIMAL_NAME,<br>I've been adopted!</p>\n";
					//echo "<a href='featured_adopted.php?Name=$ANIMAL_NAME&ID=$AID' title='Read more about $ANIMAL_NAME'>More about $ANIMAL_NAME</a>\n";
				
				} // if pic exists
			} // if pic != ""

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

?>
