<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="css/devstylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/prepsheetstyle.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="initial-scale= 1.0"> 

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
			<!--<div id="header-info-box">
			<div id="left-head"><h1><span style="text-decoration: none; color: red;">Website Currently Under Construction!</span></h1></div>
				<div id="right-head"><h1>Contact Us: <span style="text-decoration: none; color: red;">(647) 808-0869</span> | 416TorontoBugs@gmail.com</h1></div>
			</div> -->
			<div class="topnav">
				<a href="/">Home</a>
				<a href="/prep.php">Preparation</a>
				<a class="active" href="/dogs.php">K9 Inspection</a>
				<a href="/birds.php">Birds</a>
				<a href="#">Blog</a>
			</div>
		</div>

	</header>

	<div id="pagecontent">
		<div id="slide-box">
			<img src="media/sniffer.png">
		</div>

		<div id="divider">
			<h1>CALL NOW FOR A FREE CONSULTATION <span style="text-decoration: none; color:#aec71e;">(647) 808-0869</span></h1>
		</div>
		

		<div id="info-container">
			<div id="info-header-box">
				<img src="media/dog.png">
				<h1>Trained K9 Inspection</h1>
			</div>

			<div id="infobox">
				<div id="caninebox">
					<h1>CANINE SCENT DETECTION IS AN ACCURATE INSPECTION METHOD TO IDENTIFY PEST PROBLEMS</h1>
					<br/>
					<p>Our trained dogs offer close to 100% success rate in uncovering pest problems, as opposed to the approximate 35% accuracy rate of even the best trained human inspector. A trained pest management professional can only detect visible signs of bed bugs and termites in a room.</p>
					<br/>

					<p>To check if there is activity behind walls, baseboards or under carpets, the room would have to be stripped down, and baseboards pulled away from the walls. Renovation costs would skyrocket; at that point, the bugs have won the battle.</p>

					<br/>
					<p>Due to a dog's keen sense of smell, our top canine Inspectors can detect bed bugs and termites behind walls, making his inspection a more thorough and accurate one. More precise detection means that if there is bed bug or termite activity, our dogs will be alert to it and control measures can begin immediately. This is vital to minimize the chaos from extremely volatile pests like termites.</p>
					<br/>

					<br>
					<p>To have one of our trained K9s to inspect your home, call us at <span style="text-decoration: none; color:#aec71e;">(647) 808-0869</span> </p>
					</br>
				</div>
				<!--
				<div id="canine-logo">
				Dog sniffing company banner/logo goes here.
				</div>
				-->
			</div>
		</div>

		<div id="map"></div>

		<div id="footer-main">
			<div class="footerColumn">
			<h1>Contact Information</h1>
			<ul class="addressList" style="list-style:none;">
				<li><span>Address: 1060 Sheppard Ave W, North York, M2N1M2</span></li>
				<li><span>Phone: +1(647) 808-0869</span></li>
				<li><span>Email: 416TorontoBugs@gmail.com</span></li>
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