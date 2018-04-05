<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="css/devstylesheet.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="initial-scale= 1.0"> 
	Global site tag (gtag.js) - Google Analytics
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53482901-2"></script>
	
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'UA-53482901-2');
	</script>
	
	<script>
	$(document).ready(function(){
		$('.flex-container > div > a').click(function(event){
			event.preventDefault();//stop browser to take action for clicked anchor

			//get displaying tab content jQuery selector
			var active_tab_selector = $('.flex-container > div.active > a').attr('href');

			//find activated navigation and remove 'active' css
			var activated_nav = $('.flex-container > div.active');
			activated_nav.removeClass('active');

			//add 'active' css into clicked navigation
			$(this).parent('div').addClass('active');

			//hide displaying tab content
			$(active_tab_selector).removeClass('active');
			$(active_tab_selector).addClass('hide');

			//show target tab content
			var target_tab_selector = $(this).attr('href');
			$(target_tab_selector).removeClass('hide');
			$(target_tab_selector).addClass('active');
		})
	})
	</script>
</head>
<body>
	<header>
		<div class="header-top-bar">
			<div id="header-info-box">
				<div id="left-head"><h1><span style="text-decoration: none; color: red;">Website Currently Under Construction!</span></h1></div>
				<div id="right-head"><h1>Contact Us: <span style="text-decoration: none; color: red;">(647) 808-0869</span> | BedBugs20@gmail.com</h1></div>
			</div>
		</div>

	</header>

	<div id="pagecontent">
		<div id="slide-box">
			<img src="media/toronto skyline3.jpg">
		</div>

		<div id="divider">
			<h1>CALL NOW FOR A FREE CONSULTATION <span style="text-decoration: none; color:#aec71e;">(647) 808-0869</span></h1>
		</div>
		

		<div id="info-container">
			<div id="info-header-box">
				<img src="media/applications.png">
				<h1>How we get rid of your problem for you!</h1>
			</div>

			<div class="flex-container">

				<div>
					<a href="#media-box1">
						<h1>1 Day Heat Treatment</h1>
						<img src="media/plant.png">		
						<p>We are industry experts speacializing in a 1-day Thermal heat treatment for more successful, cost effective bed bug eradication. <span style="text-decoration: underline; color: red;">Click for more...</span></p>
					</a>
				</div>

				<div>
					<a href="#media-box2">
						<h1>10 Years of Expertise</h1>
						<img src="media/ribbon.png">
						<p>CEO and founder of TorontoBugs, Cary Title, was the first person in Canada to start using heat as a treatment over 10 years ago. <span style="text-decoration: underline; color: red;">Click for more...</span></p>
					</a>
				</div>
			
				<div>
					<a href="#media-box3">
						<h1>100% Success Rate</h1>
						<img src="media/winner.png">
						<p>We at TorontoBugs offer a 100% bed bug eradication success rate on our treatment, or your money back guaranteed! <span style="text-decoration: underline; color: red;">Click for more...</span></p>
					</a>
				</div>

			</div>

			<div id="info-box">


				<div id="media-box">
					<section id="media-box1" class="tab-content hide">
						<div>
						<img src="media/infograph.jpg">
							<!-- Container acting as "embedded page" #1<p>Throughout history, the treatment for Bed Bugs has been mostly chemicals in an effort to help with the reduction of the pest. Of recent, this has changed as it has been proven to be less effective when dealing in solitary bed bug treatments. A in-formal survey by entomologists have findings that show 68% of all bed bug populations required 3 or more pesticide visits, 26% needed 2 visits, and 6% needed just 1.

A continuing concern in the use of pesticide is the possibility that they have become resistant when treating bed bugs. The Association of Integrated Pest Management or IPM had found that by 1956 Bed Bugs had developed a complete resistance to DDT which was so widely used that they changed their methods to a new pesticide known as Malathion. More recently the University of Kentucky determined that Pyrethoids an attractant wasn't working very well either.  It leads to the conclusion that the ongoing use of pesticides in excess simply makes the Bed Bugs more immune. What some Pest Control companies have done to compensate is to raise the amount of pesticide in single and multiple treatments.  Not only is this a dangerous practice, it has very adverse affects on the environment, humans and pets alike.  Toronto Bugs utilizes a method that simply changes the surroundings of the Bed Bug and makes it lethal for the survival of the pest.</p>
					--></div>
					</section>

					<section id="media-box2" class="tab-content hide">
						<div>
							<h1>Our Industry Renowned CEO</h1>
							<div id="certificate-box">
								<img src="media/linford-letter4.PNG">
								<img src="media/certificate.PNG">
							</div>
						</div>
					</section>

					<section id="media-box3" class="tab-content hide">
						<div>
							Container acting as "embedded page" #3<p >Whole bunch of text #3</p>
						</div>
					</section>	
				<div id="about-us">
				 	<h1>About TorontoBugs</h1>
				 	<p>My name is Cary Title, former and original owner of Bed Bugs and Beyond. Me and my team have been thermally heating houses and apartments successfully in the GTA for over 10 years. Until the beginning of my career in the pest control industry, I was unaware of the prevelance of bed bugs in our city. It was only until I had to deal with my own bed bug infestation, that i decided to apply my innate talent for innovation and engineering to the industry by creating the highly successful and efficient heat-treatment method we use today. </p>			
				 </div>
					<div id="media-player-box">
 					<iframe src="https://www.youtube.com/embed/uFK0t9DHu1Q?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<iframe src="https://www.youtube.com/embed/Lj7IGml3jpI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

		<div id="map"></div>

		<div id="footer-main">
			<div class="footerColumn">
			<h1>Contact Information</h1>
			<ul class="addressList" style="list-style:none;">
				<li><span>Address: 1060 Sheppard Ave W, North York, M2N1M2</span></li>
				<li><span>Phone: +1(647) 808-0869</span></li>
				<li><span>Email: BedBugs20@gmail.com</span></li>
				<li><span>Website: www.TorontoBugs.ca</span></li>
			</ul>
			</div>
			<div id="map2"></div>
			<div id="copyright">Copyright TorontoBugs 2018</div>
		</div>

	</div>

	<footer id="footer-container">
		<!--<div id="footer-main"></div> -->
	</footer>

   <script>
    var map, map2;
      function initMap() {
        var uluru = {lat: 43.734976, lng: -79.374450};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var map2 = new google.maps.Map(document.getElementById('map2'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <!--
	<script>
      function initMap() {
        var uluru = {lat: 43.734976, lng: -79.374450};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    -->
	<script async defer
  	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBscZ3mDGvVLq-HTM-nwAFQmHauZQb5lJ4&callback=initMap">
	</script>
</body>
</html>