	<!-- Events & Volunteer -->
	<!--<div id="events" class="padding-bottom padding-top-two">
		<div class="container">
			<div class="row">--> <!-- Shared by Events and Volunteer -->

			
<?php
//$today = date("Y-m-d");
//$today = NOW();
// ###REQUEST FOR HELP - MySqli SQL statement handles Date_Format differently or otherwise unable to get an sql response for prepare -> execute
//The old mysql_result had no difficulties with this query
//$rCalendars = mysql_query("SELECT ID, EVENT_TITLE, LOCATION, DESCRIPTION, DATE_FORMAT(EVENT_DATE, '%b') AS DATEMONTH, DATE_FORMAT(EVENT_DATE, '%e') AS DATEDAY FROM EVENTS WHERE EVENT_DATE >='$today' OR (EVENT_DATE <= '$today' AND EVENT_DATE_END >= '$today') ORDER BY EVENT_DATE ");
//if($rCalendars) 	
if ($stmt = $db->prepare("SELECT ID, EVENT_TITLE, LOCATION, DESCRIPTION, DATE_FORMAT('EVENT_DATE', '%b') AS DATEMONTH, DATE_FORMAT('EVENT_DATE', '%e') AS DATEDAY FROM EVENTS WHERE EVENT_DATE >='$today' OR (EVENT_DATE <= '$today' AND EVENT_DATE_END >= '$today')")
	echo "stmt!!!";

//DATE_FORMAT(`date`, "%d-%m-%Y") > NOW()

//$result = mysqli_query($link, 'SELECT id, name, rank, DATE_FORMAT(opened, "%d-%m-%Y") AS opened, active');

//DATE_FORMAT(EVENT_DATE, '%b') AS DATEMONTH, DATE_FORMAT(EVENT_DATE, '%e') AS DATEDAY FROM EVENTS WHERE EVENT_DATE >= NOW() OR (EVENT_DATE <= NOW() AND EVENT_DATE_END >= NOW()) ORDER BY EVENT_DATE

if ($stmt->execute())
	echo "stmt3!!";

		

	//, $DATEMONTH, $DATEDAY
if ($stmt2->bind_result($NID, $NEWS_DATE, $HEADER, $LINKTO, $PICTURE, $CONTENT, $CAPTION, $showDate))
if ($stmt->bind_result($EVENT_ID, $EVENT_TITLE, $LOCATION, $DESCRIPTION))
{
	echo "stmt3!!!";
	$FIRSTROW = true;
	$FIRSTCAROUSEL = true;
	$p = 0;
	$CAROUSEL = "";	

	while($stmt->fetch())	
	{			

		$EVENT_TITLE = stripslashes($EVENT_TITLE); 
		$LOCATION = stripslashes($LOCATION);	
		$DESCRIPTION = stripslashes($DESCRIPTION);
		$DESCRIPTION = mb_strimwidth($DESCRIPTION, 0, 80, "..."); 
		$DESCRIPTION = str_replace("\n", "<br>", $DESCRIPTION);
		
		if($FIRSTROW)
		{
			echo "<div class='item active'>\n";
			$FIRSTROW = false;
		}
		else
			echo "<div class='item'>\n";
		
		echo "<div class='img-circle post-image'>\n";
		#echo "<a href='event_info.php?EID=$EVENT_ID'>\n";
		echo "<div class='event-date'><p>$DATEMONTH <span>$DATEDAY</span></p>";
		echo "<i class='fa fa-angle-right'></i></a></div>\n"; //.event-date
		echo "</div>\n"; //.div class pull-left
	

		echo "<p class='post-date'>$DATEABBR</p>\n";
		#echo "<a href='event_info.php?EID=$EVENT_ID'><h5>$EVENT_TITLE</h5></a>\n";
		echo "$LOCATION";
		echo "<p>$DESCRIPTION</p>\n";

		if($FIRSTCAROUSEL)
		{
			$CAROUSEL = "<li data-target='#humanity-carousel' data-slide-to='$p' class='active'></li>\n";
			$FIRSTCAROUSEL = false;
		}
		else
			$CAROUSEL .=  "<li data-target='#humanity-carousel' data-slide-to='$p'></li>\n";
		
		$p++;
	}
}
	$stmt->free_result();
	$stmt->close();
?>

