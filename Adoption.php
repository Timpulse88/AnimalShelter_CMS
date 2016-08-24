<?php
//$PID=11;
include "header.php";
include "page_content.php";
?>

<!-- HSWBlue 006666 HSWGold ffd75d -->

	<div id="carousel-wrapper">
		<div id="main-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
				<li data-target="#main-carousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/home/1.jpg); max-height:600px;">
					<div class="carousel-caption container">
						<h1 class="animated rollIn">Empower Children Dream</h1>
						<p class="animated rollIn">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
						<a href="#who-we-are" id="tohash" class="animated rollIn btn btn-primary">Get Start</a>
						<a href="https://www.youtube.com/watch?v=oAVtOmhQ5D4" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Watch Video</a>
					</div>					
				</div>
				<div class="item" style="background-image: url(images/home/2.jpg) max-height:600px;">
					<div class="carousel-caption container">
						<h1 class="animated rollIn">Empower Children Dream</h1>
						<p class="animated rollIn">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
						<a href="#who-we-are" id="tohash1" class="animated rollIn btn btn-primary">Get Start</a>
						<a href="https://www.youtube.com/watch?v=oAVtOmhQ5D4" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Watch Video</a>
					</div>
				</div>
				<div class="item" style="background-image: url(images/home/3.jpg) max-height:600px;">
					<div class="carousel-caption container">
						<h1 class="animated rollIn">Empower Children Dream</h1>
						<p class="animated rollIn">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
						<a href="#who-we-are" id="tohash2" class="animated rollIn btn btn-primary">Get Start</a>
						<a href="https://www.youtube.com/watch?v=oAVtOmhQ5D4" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Watch Video</a>
					</div>
				</div>
				<div class="item" style="background-image: url(images/home/4.jpg) max-height:600px;">
					<div class="carousel-caption container">
						<h1 class="animated rollIn">Empower Children Dream</h1>
						<p class="animated rollIn">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
						<a href="#who-we-are" id="tohash3" class="animated rollIn btn btn-primary">Get Start</a>
						<a href="https://www.youtube.com/watch?v=oAVtOmhQ5D4" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Watch Video</a>
					</div>
				</div>
			</div>	
		</div> <!--/#main-carousel--> 


<div id='photo-gallery' class='padding-bottom-two'>
	<div class='container-fluid'>
		<div class='row' style='z-index:2000;'>

			<!-- Adopt-a-Pet Javascript iFrame Creation from their Domain -->
			<script language="JavaScript">
			var AAPPetScrollerSettings = {
				'searchtools_box_width': '100%',
				'searchtools_box_height': '100%',
				//'size': '700x700_grid',
				'title': '',
				//'clan_name': 'cat',
				'color': '#ffd75d',
				'shelter_id': '69503',
				'sort_by': 'pet_name'
			};
			</script>

			<script language="JavaScript" src="js/AAP.js"></script>
			<!-- Original script modified for Responsive iFrame Container https://dq25e8j0im0tm.cloudfront.net/js/st-portable-pet-list.js -->

		</div>
	</div>
</div><!--/#Photo-Gallery-->

<?php  
include "donate_banner.php";
?>

<?php  
include "footer.php";
?>