<style>
.form-control {
	margin: 10px;
}

</style>
<!-- Needs header footer - volunteer.php -->	
<!-- Space for Translucent Menu at top 
	<div style="background-color:rgb(255,215,93); height:145px;">	</div>-->
	
	<div id="carousel-wrapper">
		<div id="main-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/home/1.jpg); background-position: 50% 11%; max-height:500px;">
					<div class="carousel-caption container">
						<h1 class="animated rollIn" style="text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">A No Kill Safe Haven</h1>
						<p class="animated rollIn"></p>
						<div OnClick="$( '.style-chooser' ).toggleClass('opened')" class="animated rollIn btn btn-primary" style="background-color:rgba(255,215,93,0.2); text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Donate</div>
						<div OnClick="$( '.style-chooser2' ).toggleClass('opened')" class="animated rollIn btn btn-primary" style="background-color:rgba(255,215,93,0.2); float:right; text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">NewsLetter</div>												
					</div>
				</div>
				<div class="item" style="background-image: url(images/home/2.jpg); background-position: 50% 70%; max-height:500px;">
					<div class="carousel-caption container">
						<h1 class="animated rollIn" style="text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Enriching the lives of Dogs and Cats</h1>
						<p class="animated rollIn"></p>
						<div OnClick="$( '.style-chooser' ).toggleClass('opened')" class="animated rollIn btn btn-primary" style="background-color:rgba(255,215,93,0.2); text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Donate</div>
						<div OnClick="$( '.style-chooser2' ).toggleClass('opened')" class="animated rollIn btn btn-primary" style="background-color:rgba(255,215,93,0.2); float:right; text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">NewsLetter</div>												
					</div>
				</div>
				<div class="item" style="background-image: url(images/home/3.jpg); background-position: 50% 20%; max-height:500px;">
					<div class="carousel-caption container">
						<h1 class="animated rollIn" style="text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Saving over 1,000 lives a year</h1>
						<p class="animated rollIn"></p>
						<div OnClick="$( '.style-chooser' ).toggleClass('opened')" class="animated rollIn btn btn-primary" style="background-color:rgba(255,215,93,0.2); text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Donate</div>
						<div OnClick="$( '.style-chooser2' ).toggleClass('opened')" class="animated rollIn btn btn-primary" style="background-color:rgba(255,215,93,0.2); float:right; text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">NewsLetter</div>												
					</div>
				</div>
				<div class="item" style="background-image: url(images/home/4.jpg); background-position: 50% 50%; max-height:500px; background-size:100% auto;">
					<div class="carousel-caption container">
						<h1 class="animated rollIn" style="text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Please Spay or Neuter</h1>
						<p class="animated rollIn"></p>
						<div OnClick="$( '.style-chooser' ).toggleClass('opened')" class="animated rollIn btn btn-primary" style="background-color:rgba(255,215,93,0.2); text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">Donate</div>
						<div OnClick="$( '.style-chooser2' ).toggleClass('opened')" class="animated rollIn btn btn-primary" style="background-color:rgba(255,215,93,0.2); float:right; text-shadow: 6px 6px 2px rgba(15, 15, 15, 1);">NewsLetter</div>						
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
	
$agreement_text = "INSERT VOLUNTEER AGREEMENT TEXT";

if(isset($FIRST_NAME))
{
	echo "<tr><td valign='top'> \n";	
	
	//Validation : community service request
	if($community_service==1 && $community_service_why == "")
	{
		echo "<p>You must enter a Reason for your Community Service. Your application was not sent. Please click Back to try again.</p>\n";		
	}
	else if($captcha==$captchaHidden && strchr($COMMENTS, "http") == "")		
	{
		$today = date("Y-m-d");
		$strInterests = "";
		if(isset($Administration))
			$strInterests .="Administration/Clerical, ";
		//if(isset($Board))
		//	$strInterests .="Board Member or Officer, ";
		if(isset($Cats))
			$strInterests .="Cats/Socialize, ";
		if(isset($Cats2))
			$strInterests .="Cats/Clean, ";
		if(isset($Cats_Petsmart_Middletown))
			$strInterests .="Cats @ LOCATION Petsmart, ";
		if(isset($Cats_Petsmart_Monroe))
			$strInterests .="Cats @ LOCATION Petsmart, ";
		if(isset($Dogs))
			$strInterests .="Dogs/Socialize, ";
		if(isset($DogsWalk))
			$strInterests .="Dogs/Walk, ";
		if(isset($Dogs2))
			$strInterests .= "Dogs/Clean, ";	
		if(isset($Design))
			$strInterests .="Design (Graphics, Ads, Fliers), ";
		if(isset($Events))
			$strInterests .="Events, ";
		if(isset($Fundraising))
			$strInterests .="Fundraising, ";
		if(isset($FosterCats))
			$strInterests .="Foster Cats/Kittens, ";
		//if(isset($FosterDogs))
		//	$strInterests .="Foster Dogs/Puppies, ";
		if(isset($Information))
			$strInterests .="Information Technology, ";
		if(isset($Legal))
			$strInterests .="Legal, ";
		if(isset($Photography))
			$strInterests .= "Photography, ";
		if(isset($Public))
			$strInterests .= "Public Relations, ";	
		if(isset($Grounds))
			$strInterests .= "Grounds and Lanscaping, ";
		//if(isset($Telephone))
		//	$strInterests .= "Adoption Follow-ups, ";
		if(isset($Building_Repair))
			$strInterests .= "Building Repairs, ";
		if(isset($Volunteer))
			$strInterests .= "Volunteer Coordination, ";
		if(isset($Building))
			$strInterests .= "Building Maintenance, ";
		if(isset($Other))
			$strInterests .= "Other, ";	
			
		if(strlen($strInterests)>0) {
			$strInterests=strrev(trim($strInterests));
			$strInterests=preg_replace('/,/', '', $strInterests, 1);
			$strInterests=strrev($strInterests);
		}
		
		$strDays="";
		if(isset($Monday))
			$strDays .= "Monday, ";
		if(isset($Tuesday))
			$strDays .= "Tuesday, ";
		if(isset($Wednesday))
			$strDays .= "Wednesday, ";
		if(isset($Thursday))
			$strDays .= "Thursday, ";
		if(isset($Friday))
			$strDays .= "Friday, ";
		if(isset($Saturday))
			$strDays .= "Saturday, ";
		if(isset($Sunday))
			$strDays .= "Sunday, ";	
		
		if(strlen($strDays)>0) {
			$strDays=strrev(trim($strDays));
			$strDays=preg_replace('/,/', '', $strDays, 1);
			$strDays=strrev($strDays);
		}
			
		$strTimes="";
		if(isset($WeekdayMorning))
			$strTimes .= "Weekday Morning, ";
		if(isset($WeekdayAfternoon))
			$strTimes .= "Weekday Afternoon, ";
		if(isset($WeekendMorning))
			$strTimes .= "Weekend Morning, ";
		if(isset($WeekendAfternoon))
			$strTimes .= "Weekend Afternoon, ";
		
		if(strlen($strTimes)>0) {
			$strTimes=strrev(trim($strTimes));
			$strTimes=preg_replace('/,/', '', $strTimes, 1);
			$strTimes=strrev($strTimes);
		}
		
		$FIRST_NAME=htmlentities($FIRST_NAME);	
		$FIRST_NAME=addslashes($FIRST_NAME);
		$LAST_NAME=htmlentities($LAST_NAME);	
		$LAST_NAME=addslashes($LAST_NAME);
		$COMMENTS=htmlentities($COMMENTS);
		$COMMENTS=addslashes($COMMENTS);
		if(isset($community_service)) 
		$COMMENTS.= " ($community_service: $community_service_why)";
		$NOTES=htmlentities($NOTES);
		$NOTES=addslashes($NOTES);
		
		$KID1=htmlentities($KID1);	
		$KID1=addslashes($KID1);
		$KID2=htmlentities($KID2);	
		$KID2=addslashes($KID2);
		$KID3=htmlentities($KID3);	
		$KID3=addslashes($KID3);
		$KID4=htmlentities($KID4);	
		$KID4=addslashes($KID4);
		$KID5=htmlentities($KID5);			
		$KID5=addslashes($KID5);	
		
		$strKids="";
		if($KID1 != "")
			$strKids.="Child 1: $KID1 ($KIDAGE1) <br>\n";
		if($KID2 != "")
			$strKids.="Child 2: $KID2 ($KIDAGE2) <br>\n";
		if($KID3 != "")
			$strKids.="Child 3: $KID3 ($KIDAGE3) <br>\n";
		if($KID4 != "")
			$strKids.="Child 4: $KID4 ($KIDAGE4) <br>\n";
		if($KID5 != "")
			$strKids.="Child 5: $KID5 ($KIDAGE5) <br>\n";
			
		$strInterests=htmlentities($strInterests);
		$strInterests=addslashes($strInterests);
		
		if($strKids != "")
			$COMMENTS = "$strKids".$COMMENTS;
			
		$FULL_NAME=htmlentities($FULL_NAME);
		$FULL_NAME=addslashes($FULL_NAME);
		$TELEPHONE=htmlentities($TELEPHONE);
		$TELEPHONE=addslashes($TELEPHONE);
		$CITY=htmlentities($CITY);
		$CITY=addslashes($CITY);

		$result = mysql_query("INSERT INTO CONTACTS SET FIRST_NAME='$FIRST_NAME', LAST_NAME='$LAST_NAME', ADDRESS1='$ADDRESS1', CITY='$CITY', STATE='$STATE', ZIP='$ZIP', TELEPHONE='$TELEPHONE', EMAIL='$EMAIL', COMMENTS='$COMMENTS', ADD_DATE='$today', NEWSLETTER=1, AGE_AT_SIGNUP='$AGE_AT_SIGNUP', INTERESTS='$strInterests', DAYS_AVAILABLE='$strDays', TIMES_AVAILABLE='$strTimes', AGE_CLASSIFY='$AGE_CLASSIFY' ");
		if($result)		
			$added=1;
		else
			$added=0;
			
		if($added) // ok to send mail
		{
			$fromEmail = "EMAIL";
			//$emailList = "$fromEmail";
			//shelterhelper@aol.com, mh4it@ymail.com";
			//$headers = "MIME-Version: 1.0 \r\n";
			//$headers .= "Content-type:text/html;charset=UTF-8 \r\n";
			//$headers .= "From: $FIRST_NAME $LAST_NAME <$fromEmail> \r\n". "Reply-To: $EMAIL" . "\r\n";
			//$headers .= "Cc: $fromEmail, shelterhelper@aol.com, mh4it@ymail.com, gyeaple@adprose.org" . "\r\n";
			// It comes from their own Name fromEmail?
			$headers = "From: $FIRST_NAME $LAST_NAME <$fromEmail> \r\n";
			$headers.= "Reply-To: ANIMAL SHELTER <EMAIL>\r\n";
			$headers.= "X-Mailer: PHP/" . phpversion()."\r\n";
			$headers.= "MIME-Version: 1.0" . "\r\n";
			$headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers.= "BCC: EMAIL2";
			
			$today = date("m/d/y");
			$mail_subject = "Volunteer App from ANIMAL SHELTER";
			$mail_body = "";
			
			foreach ($_POST as $field => $value) { 
				$value = stripslashes($value);
				$value = strip_tags($value);
				$value = str_replace(":", "-", $value);			
			} // for each		
			
			$COMMENTS = stripslashes($COMMENTS);
			$COMMENTS = str_replace(":", "-", $COMMENTS);
				
			$mail_body .= "<strong>Volunteer Application</strong> from ANIMAL SHELTER<br><br>";
			$mail_body .= "<strong>$FIRST_NAME $LAST_NAME</strong><br>";
			$mail_body .= "$ADDRESS1<br>";
			$mail_body .= "$CITY $STATE $ZIP<br>";
			$mail_body .= "$TELEPHONE<br>";
			$mail_body .= "$EMAIL<br><br>";
			$mail_body .= "<strong>Age:</strong> $AGE_CLASSIFY $AGE_AT_SIGNUP<br><br>";
			$mail_body .= "<strong>Interests:</strong> $strInterests<br><br>";
			$mail_body .= "<strong>Day(s) Available:</strong> $strDays<br><br>";
			$mail_body .= "<strong>Time(s) Available:</strong> $strTimes<br><br>";		
			$mail_body .= "<strong>Message:</strong><br>$COMMENTS<br><br>";
			$mail_body .= "<strong>Volunteer Agreement:</strong><br><br>";
			//<a href="mailto:$to?subject=$subject&body=$body&cc=$cc">
			$mail_body .= $agreement_text;				
			$mailto = "$EMAIL";
			if(mail($mailto, $mail_subject, $mail_body, $headers))
			{ 			
			?>
			<p class='pageheader'>Thank you for your interest!</p>
			<p>Your application has been sent. Someone from our shelter will contact you soon.</p>
            <!--<p>If you have not already signed up to receive our e-newsletter, please do so (below).
            <p>We only send 2-3 emails per month and it's an easy and fun way to keep in touch!</p>-->
            <p><b>Don't forget to LIKE US on <a href='FACEBOOK URL' target='_blank'>Facebook</a>!</b></p>
			<?php
			} // if send mail
			else 
				echo "<p>There was a problem sending your application, please try again later.</p>\n";
			
		} // if add to DB		
	} // if($captcha==$captchaHidden && strchr($COMMENTS, "http") == "")
	else
		echo "<p>The mail verificiation code was not entered correctly, OR you tried to put a web address in the message field. Your application was not sent. Please click Back to try again.</p>\n";		
} // if set FIRST NAME - try to submit
else
{

?>
    
    <script>
    function checkForm() {
        if(document.signup.FIRST_NAME.value.length <2)
        {
            alert("Please enter your first name");
            document.signup.FIRST_NAME.focus();
            return false;
        }
		else if(document.signup.LAST_NAME.value.length <2)
        {
            alert("Please enter your last name");
            document.signup.LAST_NAME.focus();
            return false;
        }
		else if(document.signup.ADDRESS1.value.length <2)
        {
            alert("Please enter your street address");
            document.signup.ADDRESS1.focus();
            return false;
        }
		else if(document.signup.CITY.value.length <2)
        {
            alert("Please enter your town name");
            document.signup.CITY.focus();
            return false;
        }
		else if(document.signup.ZIP.value.length <2)
        {
            alert("Please enter your email address");
            document.signup.ZIP.focus();
            return false;
        }		
        else if(document.signup.EMAIL.value.length <2)
        {
            alert("Please enter your email address");
            document.signup.EMAIL.focus();
            return false;
        } 
		else if(document.signup.TELEPHONE.value.length <2)
        {
            alert("Please enter your telephone #");
            document.signup.TELEPHONE.focus();
            return false;
        }    
		else if(document.signup.AGE_CLASSIFY.value=="Youth" && document.signup.AGE_AT_SIGNUP.value=="")
        {
            alert("If you are under 18, please enter your actual age");
            document.signup.AGE_AT_SIGNUP.focus();
            return false;
        }   
        else if(document.signup.AGE_CLASSIFY.value=="Youth" && document.signup.AGE_AT_SIGNUP.value<16)
        {
            alert("If you are under 16, you must have a parent submit this form");
            document.signup.FIRST_NAME.focus();
            return false;
        }   
		else if(document.signup.community_service.checked==true && document.signup.community_service_why.value=="")
        {
            alert("Please specify why you need to perform community service");
            document.signup.community_service_why.focus();
            return false;
        } 				   
		else if (document.signup.captcha.value != document.signup.captchaHidden.value)
		{
			alert("Please enter the correct security code.");
			document.signup.captcha.focus();
			return false;
		}
    }
    </script>
	
	<div id="contact">
		<div class="container">
	<div class="section-title">
				<h1>Volunteer at the ANIMAL SHELTER</h1>
				<h5>Come Visit Us! Join the ranks of some wonderful people who volunteer their time and services to help make the residents content until new loving homes are found. There is always something to do. Grooming. Bathing. Socializing. Walking.</h5>
				<br />
				<h5>If you don't want to work directly with the animals, there are many options that help the animals just as much, such as answering the phone, filing, data entry, follow up calls or assisting in Fund Raising and Events like our monthly yard sales, penny socials, photos with Santa and much more. There are ALWAYS outside chores, cleaning, dishes, and laundry to be washed, dried, folded and put away.</h5>
				<br />
				<h5><b>Volunteers under the age of 16 are welcome, however a parent/guardian must stay and volunteer with them.</b> They can also participate as volunteers by holding fundraising events on their own, such as collecting deposit cans, pennies for puppies, dollars for doggies, cash for cats and doing pledges.</h5>
				<br />
				<h5>* Volunteers are always needed at our Petsmart Adoption Centers in Middletown and Monroe. Clean, feed, and play with our cats and kittens. Many different days and time slots are available. Mornings are generally 9-11, afternoons can be any two hour period between 3 and 9 pm. Volunteering means so much to the cats who are there waiting for a home and you'll feel great when you leave! We also need floaters - people we can call in a pinch if a regular can not cover their shift. Please check off the box below if you can help, or call Sue Orwick at PHONE NUMBER </h5>			
				<br />
				<h5 style="color:red;">You must be 16 years + to submit this application. If you are under the age of 16 please have a parent or guardian complete the form for you.</h5>
				<br />
				<h5>For more information, contact the shelter EMAIL</h5>
		<div class="row contact-details">
						<div class="col-sm-3">
							<span><i class="fa fa-envelope"></i></span>
							<a class="contact-info" href="mailto:volunteerhsw@yahoo.com">EMAIL</a>
						</div>
						<div class="col-sm-2">
							<span><i class="fa fa-phone"></i></span>
							<p class="contact-info">PHONE</p>
						</div>
						<div class="col-sm-7">
							<span><i class="fa fa-map-marker"></i></span>
							<p class="contact-info">ADDRESS CITY, STATE</p>
						</div>
		</div>
		<h4 style="color:#006666;">To Get Started, Complete the Online Volunteer Application Below</h4>
	</div> <!-- End Section Title -->
	</div> <!-- End Container -->
	
			
				<!--<div class="col-sm-10 col-sm-offset-1">-->
				
<!-- Valid trigger -->
<!-- <form action='volunteer.php' method='post' name='signup' onSubmit='return checkForm()'> -->				
					
					<!-- Volunteer Application -->
					<div class="container">			
					<div class="contact-form">
						<form id="volunteer-form" class="contact-form" name="signup" method="post" action="#" onSubmit='return checkForm()'>
							<div class="row">
								<!-- Left -->
								<div class="form-group col-sm-6">
								<!-- FirstName Start Here -->								
								
									<input type="text" name="FIRST_NAME" class="form-control" maxlength="50" required="required" placeholder="First Name">
									<input type="text" name="LAST_NAME" class="form-control" maxlength="50" placeholder="Last Name">
									
									<input type="text" name="ADDRESS1" class="form-control" maxlength="55" placeholder="Address">
									<input type="text" name="CITY" class="form-control" maxlength="50" placeholder="City">

									<input type="text" name="STATE" class="form-control" maxlength="20" value='NY' placeholder="State">
									<input type="text" name="ZIP" class="form-control" maxlength="10" placeholder="Zip">	
									
        								<h4>Names and Ages of Children Who Want to Volunteer with You</h4>
    
            						<span>Name & Age (1)</span>
            						<input maxlength="35" name="KID1" class="form-control" placeholder="Name"> <input maxlength="35" name="KIDAGE1" class="form-control" placeholder="Age">
        
        
            						<span>Name & Age (2)</span>
            						<input maxlength="35" name="KID2" class="form-control" placeholder="Name"> <input maxlength="35" name="KIDAGE2" class="form-control" placeholder="Age">
        
            						<span>Name & Age (3)</span>
            						<input maxlength="35" name="KID3" class="form-control" placeholder="Name"> <input maxlength="35" name="KIDAGE3" class="form-control" placeholder="Age">
            						<span>Name & Age (4)</span>
            						<input maxlength="35" name="KID4" class="form-control" placeholder="Name"> <input maxlength="35" name="KIDAGE4" class="form-control" placeholder="Age">
        
            						<span>Name & Age (5)</span>
            						<input maxlength="35" name="KID5" class="form-control" placeholder="Name"> <input maxlength="35" name="KIDAGE5" class="form-control" placeholder="Age">																																			
									
									
								</div>
								<!-- Right -->
								<div class="form-group col-sm-6">
									<input type="email" name="EMAIL" class="form-control" maxlength="50" required="required" placeholder="Email Address">
									<input type="email" name="TELEPHONE" class="form-control" maxlength="35" required="required" placeholder="Phone">

						         	<h4>Age Range</h4>
						      		<select name='AGE_CLASSIFY' class="form-control">
        								<option value='Youth'>Youth (-18)</option>
        								<option value='Adult'>Adult (18-59)</option>
        								<option value='Senior'>Senior (60+)</option>
        								</select> If you are under 18, please enter your actual age: <input name='AGE_AT_SIGNUP' size=3>
        							
        								<div class='help'>If you are under the age of 16 you MUST have an adult with you to volunteer at the shelter</div>
        								
        								
        								
			<h4>Areas of Interest</h4>
			<div class="col-md-6">
			<input type='checkbox' name='Administration' value=1> Admin/Clerical<br>
			<!--<td><input type='checkbox' name='Telephone' value=1> Adoption Follow-ups </td> --> 
			<input type='checkbox' name='Legal' value=1> Legal<br>
			<input type='checkbox' name='Public' value=1> Public Relations<br>

		

			<input type='checkbox' name='Building' value=1> Building Maintenance<br>
			<input type='checkbox' name='Building_Repair' value=1> Building Repairs<br>
			<input type='checkbox' name='Grounds' value=1> Grounds and Lanscaping<br>


			<input type='checkbox' name='Cats2' value=1> Cats/Clean<br>
			<input type='checkbox' name='Cats' value=1> Cats/Socialize<br> 
			* More cat options below! 
			</div>
			<div class="col-sm-6">

			<input type='checkbox' name='Dogs2' value=1> Dogs/Clean<br>
			<input type='checkbox' name='Dogs' value=1> Dogs/Socialize<br>   
			<input type='checkbox' name='DogsWalk' value=1> Dogs/Walk<br>                               
		
		
			<input type='checkbox' name='Design' value=1> Design (Graphics, Ads, Web)<br> 
			<input type='checkbox' name='Photography' value=1> Photography<br>
			<input type='checkbox' name='Information' value=1> Information Technology<br>
		        
 
			<input type='checkbox' name='Events' value=1> Adoption Events<br> 
			<input type='checkbox' name='Fundraising' value=1> Fundraising<br>       
			<input type='checkbox' name='Volunteer' value=1> Volunteer Coordination<br>

			<!--<td><input type='checkbox' name='Board' value='1'> Board Member or Officer </td> -->
				
			<input type='checkbox' name='Other' value=1> Can you help in other ways? (please specify in comments)<br>
			</div>        								
        								
    <h4>Day(s) Available</h4>
        
           

            <input type='checkbox' name='Monday' value=1> Mon      
            <input type='checkbox' name='Tuesday' value=1> Tues   
            <input type='checkbox' name='Wednesday' value=1> Wed  
            <input type='checkbox' name='Thursday' value=1> Thur         
            <input type='checkbox' name='Friday' value=1> Fri      
            <input type='checkbox' name='Saturday' value=1> Sat   
            <input type='checkbox' name='Sunday' value=1> Sun          
     
	<h4>Times(s) Available</h4>
        

        <div>If you are able to volunteer in the <em>Morning</em>, we would love to have help cleaning and feeding. If you are able to volunteer in the <em>Afternoon</em>, you will be able to spend more time with the animals, walking dogs and/or socializing with our cats. Many of our weekend adoption and fundraising events start about 10 and run to mid afternoon.</div>
        <div>Community Service Hours will only be counted during the morning shift</div>
        <input type='checkbox' name='WeekdayMorning' value=1> Weekday Morning     
        <input type='checkbox' name='WeekdayAfternoon' value=1> Weekday Afternoon             
        <input type='checkbox' name='WeekendMorning' value=1> Weekend Morning      
        <input type='checkbox' name='WeekendAfternoon' value=1> Weekend Afternoon       
        
        
        	<h4>* More for cat lovers</h4>

                <input type='checkbox' name='Cats_Petsmart_Middletown' value=1> Cats @ LOCATION Petsmart
                <input type='checkbox' name='Cats_Petsmart_Monroe' value=1> Cats @ LOCATION Petsmart
            
            
            	<div>This is a weekly commitment, you need to be at the adoption center the same day and time every week. Shifts are approximately 1.5 - 2 hours on your scheduled day, and include light cleaning, feeding, care, play time with the cats and hopefully adoptions! Training and support provided.</div>
            
                    
            <div bgcolor='#ffffcc'>
                I can provide Foster Care in My Home for
            </div>                        
                <input type='checkbox' name='FosterCats' value=1> Cats and/or Kittens waiting for space at the shelter to come in 
                <input type='checkbox' name='FosterBottle' value=1> Bottle Babies (very young kittens who require frequent feeding and extra care)               
           



	</div>
								
		<div class="form-group col-sm-12">
        


     <!-- Bottom -->								

		<!-- New Css class help needed -->
    		<div class='help' style='font-size:13px'><strong>Are you volunteering to qualify for Community Service hours?</strong></div>Check here <input type='checkbox' value='Community Service' name='community_service'> and <span class='help' style='font-size:13px'><strong>SPECIFY *EXACTLY WHY*</strong></span> in the field below.
    		<div><input name="community_service_why" size=65></div>
    		<div class='help' style='font-size:13px'><strong>"Court ordered" is NOT a valid answer.<BR>Please also let us know what date you need hours completed by.</strong></div>
    
    
    <div class='help'>Volunteers are welcome at the shelter from 8:30 am - 3:30 pm, seven days a week</div>
    

        <h4>Message or Comments</h4>
        <!-- <textarea name="COMMENTS" ROWS=5 COLS=65 WRAP=virtual></textarea> -->
		  <textarea name="COMMENTS" id="message" class="form-control" rows="8" placeholder="Comments" WRAP=virtual></textarea>    
    
    
    <h4>Please help us reduce junk mail by entering this security code &nbsp; </h4>
      <?php 
      function make_seed()
		{
    		list($usec, $sec) = explode(' ', microtime());	
    		return (float) $sec + ((float) $usec * 100000);
		}
		srand(make_seed());
		$captchaHidden = rand(11111, 99999);		
		$captchaString = "";
		
		for($i=0; $i<5; $i++)
		{
			$thisNum = substr($captchaHidden, $i, 1);
			$captchaString .="<img src='images/captcha/captcha".$thisNum.".jpg'>";
		}
		
		if($captchaString != "")
			echo $captchaString;			
		 ?>
		&nbsp; -> <input name="captchaHidden" id="captchaHidden" type="hidden" value="<?php echo $captchaHidden; ?>">
      	<input name="captcha" size="5" maxlength="5">
        
    <div> 
    <p><?php echo $agreement_text; ?></p>
    <div class='help' style='font-size:13px'><strong>MESSAGE TEXT</strong></div>
    <p><input type="submit" class="btn btn-primary" value="  Send Application  " onClick="this.value='Please Wait'"> </p>    
    <p>SUB MESSAGE TEXT</p>
    </div>
									
	</div>								
								
								<!--<div class="form-group col-sm-6">	
								
								</div>	
								<div class="form-group col-sm-6">	
								
								</div>-->														


							</div>	
							</div> <!-- End Row -->			                                   
						</form>	
					</div><!-- End Contact-Form -->
					</div>
	<?php 
	}
	?>				
					

	</div><!--/#Contact--> 
