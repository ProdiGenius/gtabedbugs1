<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="css/mainstyle.css">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBscZ3mDGvVLq-HTM-nwAFQmHauZQb5lJ4&callback=initMap"></script>
    <meta name="viewport" content="width=device-width">
	<meta name="viewport" content="initial-scale=1.0">
</head>
<body>
	<header>
		<div class="header-top-bar">
			<div id="header-info-box">
				<div id="left-head"><h1>100% Customer Satisfaction Guaranteed!</h1></div>
				<div id="right-head"><h1>Contact Us: <span style="text-decoration: none; color: red;">(647) 808-0869</span> | BedBugs20@gmail.com</h1></div>
			</div>
		</div>

	</header>

	<div id="pagecontent">
		<div id="slide-box">
			<img src="media/sleepbanner3.jpg">
		</div>

		<div id="divider">
			<h1>CALL NOW FOR FREE A CONSULTATION <span style="text-decoration: none; color:#aec71e;">(647) 808-0869</span></h1>
		</div>
		
		<div id="map"></div>

		<div id="info-container">
			<div id="info-header-box">
				<img src="media/applications.png">
				<h1>How we get rid of your problem for you!</h1>
			</div>

			<div class="flex-container">
				<div id="flexbox-1">
					<h1>1 Day Heat Treatment</h1>
					<img src="media/plant.png">
					<p>We are industry experts speacializing in a 1-day Thermal heat treatment for more successful, cost effective bed bug eradication.</p>
				</div>

				<div id="flexbox-2">
					<h1>10 Years of Expertise</h1>
					<img src="media/ribbon.png">
					<p>CEO and founder of TorontoBugs, Cary Title, was the first person in Canada to start using heat as a treatment over 10 years ago.</p>
				</div>
			
				<div id="flexbox-3">
					<h1>100% Success Rate</h1>
					<img src="media/winner.png">
					<p>We at TorontoBugs offer a 100% bed bug eradication success rate on our treatment, or you money back guaranteed!</p>
				</div>
			</div>
			<div id="info-box">
				<div id="about-us">
					<h1>About Bugs</h1>
				</div>
				<div id="media-box">
 					<iframe src="https://www.youtube.com/embed/Joyn7QWTSGA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<iframe src="https://www.youtube.com/embed/W2XtDrKrUSk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<div id="footer-main">
			<div class="footerColumn">
			<h1>Contact Information</h1>
			<ul class="addressList" style="list-style:none;">
				<li><span>Address: 1 De Boers drive, North York, M2N0G6</span></li>
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
	<!--<script>
      function initMap() {
        var uluru = {lat: 43.734976, lng: -79.374450};
        var map = new google.maps.Map(document.getElementById('footMap'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>-->

</body>
</html>