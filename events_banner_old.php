	<!-- Events & Volunteer -->
	<!--<div id="events" class="padding-bottom padding-top-two">
		<div class="container">
			<div class="row">--> <!-- Shared by Events and Volunteer -->

<?php
$today = date("Y-m-d");
$stmt = $db->prepare("SELECT ID, EVENT_TITLE, LOCATION, DESCRIPTION, DATE_FORMAT(EVENT_DATE, '%b') AS DATEMONTH, DATE_FORMAT(EVENT_DATE, '%e') AS DATEDAY FROM EVENTS WHERE EVENT_DATE >='$today' OR (EVENT_DATE <= '$today' AND EVENT_DATE_END >= '$today') ORDER BY EVENT_DATE");
$stmt->execute();

//$rCalendars = mysql_query("SELECT ID, EVENT_TITLE, LOCATION, DESCRIPTION, DATE_FORMAT(EVENT_DATE, '%b') AS DATEMONTH, DATE_FORMAT(EVENT_DATE, '%e') AS DATEDAY FROM EVENTS WHERE EVENT_DATE >='$today' OR (EVENT_DATE <= '$today' AND EVENT_DATE_END >= '$today') ORDER BY EVENT_DATE ");
//if($rCalendars) 			

if ($stmt->bind_result($EVENT_ID, $EVENT_TITLE, $LOCATION, $DESCRIPTION, $DATEMONTH, $DATEDAY))
{
	echo "<!-- Events & Volunteer -->";
	echo "<div id='events' class='padding-bottom padding-top-two'>";
	echo "<div class='container'>";
	echo "<div class='row'> <!-- Shared by Events and Volunteer -->";
	echo "<!-- Open Events v2 Section -->	";
	echo "<div class='col-sm-8'>";
	echo "<div class='section-title'>";
	echo "<h1>Events</h1></div>";
	echo "<div id='event-carousel' class='carousel slide' data-ride='carousel'>";
	echo "<ol class='carousel-indicators'>";
	echo "<li data-target='#event-carousel' data-slide-to='0' class='active'></li>";
	echo "<li data-target='#event-carousel' data-slide-to='1'></li><!--<li data-target='#event-carousel' data-slide-to='2'></li>-->";									
	echo "</ol>";
	echo "<div class='carousel-inner'>";
	echo "<!-- Begin Loop -->";
	echo "<!-- Every 4th post item && row, First one active -->";
	echo "<div class='item active'>";
	echo "<div class='row'> <!-- Oh Here, Thank You ; Oh Here, Thank You : Oh Here, Thank You ; Silent Fractal Break ; I Want My Jesus Fare -->";
	//Responsive Div Containers inside loop
	$p = 0;
	$DIVCLOSE = true; //closing DIV needed if 4th record not reached per column
	$SECTIONCLOSE=true; //closing DIV needed for section below Volunteer section if there are no events
	//echo "2222";
	//for($p=0; $p<mysql_num_rows($rCalendars); $p++)
	while($stmt->fetch())	
	{			
		//echo "$p, ";
		//$q++;
		$EVENT_ID = mysql_result($rCalendars, $p, "ID"); /***/
		$EVENT_TITLE = mysql_result($rCalendars, $p, "EVENT_TITLE"); /***/
		$EVENT_TITLE = stripslashes($EVENT_TITLE); 
		$DATEMONTH = mysql_result($rCalendars, $p, "DATEMONTH"); 
		$DATEDAY = mysql_result($rCalendars, $p, "DATEDAY"); 
		//$EVENT_DATE = mysql_result($rCalendars, $p, "EVENT_DATE"); /***/
		//$PICTURE = mysql_result($rCalendars, $p, "PICTURE");	/***/			
		$LOCATION = mysql_result($rCalendars, $p, "LOCATION"); /***/
		$LOCATION = stripslashes($LOCATION);	
		$DESCRIPTION = mysql_result($rCalendars, $p, "DESCRIPTION"); /***/				
		$DESCRIPTION = stripslashes($DESCRIPTION);
		$DESCRIPTION = mb_strimwidth($DESCRIPTION, 0, 80, "..."); 
		$DESCRIPTION = str_replace("\n", "<br>", $DESCRIPTION);
		
		
		if($p == 4 || $p == 8 || $p == 12 || $p == 16)
		{
			echo "<div class='item'>";
			echo "<div class='row'>";
			$DIVCLOSE = true;
		}	
				
		echo "\n";
		echo "<div class='col-sm-6'>\n";
		echo "<div class='single-post'>\n";
		echo "<div class='pull-left post-image'>\n";
		echo "<a href='event_info.php?EID=$EVENT_ID'>\n";
		echo "<div class='event-date'><p>$DATEMONTH <span>$DATEDAY</span></p>";
		
		echo "<i class='fa fa-angle-right'></i></a></div>\n"; //.event-date
		echo "</div>\n"; //.div class pull-left
		echo "<div class='pull-right post-details'>\n";		
		echo "<p class='post-date'>$DATEABBR</p>\n";
		echo "<a href='event_info.php?EID=$EVENT_ID'><h5>$EVENT_TITLE</h5></a>\n";
		echo "$LOCATION";
		echo "<p>$DESCRIPTION</p>\n";	

		echo "</div>\n"; //div class pull-right
		echo "</div>\n"; //div class single-post
		echo "</div>\n"; //div class col-sm-6
				

		if($p == 3 || $p == 7 || $p == 11 || $p == 15 || $p == 19)
		{
			echo "</div>"; //item
			echo "</div>"; //row
			$DIVCLOSE = false;
			//echo "2222\n";					
		}
		
		$p++;
		
	}
	if($DIVCLOSE)
	{
			echo "</div>"; //item
			echo "</div>"; //row			
	}
	
	echo "</div><!-- /.carousel-inner -->";
	echo "</div> <!-- /.event-carousel -->";					
	echo "</div><!-- /.col-sm-8 End of Events -->";
	//echo "<div class='col-sm-4'>";
	//echo "<div class='become-volunteer'>";
	//echo "<img class='img-responsive' src='images/logo-icon.png' alt='' />";
	//echo "<h1><span>Advocate Democracy and Compassion <!--while in freedom--></span>Volunteer With Us!</h1>";
	//echo "<p>Join the ranks of some wonderful people who volunteer their time and services</p>";
	//echo "<a href='volunteer.php' class='btn btn-default'>Come Visit Us!</a>";
	//echo "</div>";
	//echo "</div>";


	//echo "</div><!-- /.row -->";
	//echo "</div><!-- /.container -->";
	//echo "</div><!--/#recent-post Volunteer and Events Row-->";
	//echo "<!--  End Events and Volunteer-->";
}
$stmt->free_result();
$stmt->close();

?>	
