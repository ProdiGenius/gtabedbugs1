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
				<a href="/dogs.php">K9 Inspection</a>
				<a class="active">Birds</a>
				<a href="#">Blog</a>
			</div>
		</div>

	</header>

	<div id="pagecontent">
		<div id="slide-box">
			<img src="media/pigeons.jpg">
		</div>

		<div id="divider">
			<h1>CALL NOW FOR A FREE CONSULTATION <span style="text-decoration: none; color:#aec71e;">(647) 808-0869</span></h1>
		</div>
		

		<div id="info-container">
			<div id="info-header-box">
				<img src="media/owl.png">
				<h1>Our Bird Removal Solutions</h1>
			</div>

			<div id="infobox">
				<div id="bird-info-box">
					<p>It goes without saying that birds play an essential role in our natural environments. They keep ecosystems in balance and contribute to our enjoyment of the outdoors. They can also become destructive pests. Their adaptability and sheer numbers in urban areas like Toronto, Mississauga and Scarborough means we encounter them daily. In fact, birds cause millions of dollars in property damage annually to both homes and businesses. Human interaction with birds can even result in serious health concerns.</p>
					
					<img src="media/birds.PNG">
				</div>
				<div id="bird-divider"><img src="media/bird2.jpg"></div>

				<div id="prepchecklist">
					<br/>
					<h1 style="text-decoration:underline;"> Frequently Asked Questions:</h1>
					<br/>
					<br/>
					<h1>What Kind Of Birds Are Pests? What Discourages Them?</h1>
					<br/>
					<p> Small birds like starlings, house finches, and sparrows, prefer gutters, chimneys, and eave brackets. Removing the nest and sealing up the cavity or filling it with wire mesh will usually discourage them. Bigger birds, like crows, pigeons and seagulls are not going to be shooed away or discouraged by nest removal or plastic owls. These birds require much more effort to discourage them away.</p>
					<br/>

					<h1>Where Do Birds Nest?</h1>
					<br/>
					<p>Birds rarely come into a house except by accident, they are more likely to nest or roost on the rooftops</p>
					<br/>
					
					<h1>Do Birds Carry Any Disease?</h1>
					<br/>
					<p>Pigeons and sparrows carry bacteria - causing salmonellosis (food poisoning). Pigeons also carry ornithosis (a disease similar to virus pneumonia) via the infected droppings or through sweat glands. This is usually mistaken for flu in humans, and therefore it's occurrence is more common than realized. Also some birds may carry the campylobacter disease as well.</p>
					<br/>

					<h1>Why Is It Bad To Have A Bird Nest Around My Home?</h1>
					<br/>
					<p>A bird's nest harbors insects and mites, which live in the nest material or droppings. Nests become reservoirs of pests which then invade homes, factories and farms. This often causes considerable damage to property, especially fabrics and stores of food products. In addition, the excrement of roosting birds can kill lawns and shrubs and thus reduce the value of property.</p>				
					<br/>

					<h1>Are Birds Destructive To Property?</h1>
					<br/>
					<p>Yes, they can deface and cause deterioration of buildings with their droppings, due to the acidic secretions produced by the fungi that live in the droppings.</p>
					<br/>
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