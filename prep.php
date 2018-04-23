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
				<a class="active" href="#">Preparation</a>
				<a href="/dogs.php">K9 Inspection</a>
				<a href="#">Birds</a>
				<a href="#">Blog</a>
			</div>
		</div>

	</header>

	<div id="pagecontent">
		<div id="slide-box">
			<img src="media/newlogostep2.jpg">
		</div>

		<div id="divider">
			<h1>CALL NOW FOR A FREE CONSULTATION <span style="text-decoration: none; color:#aec71e;">(647) 808-0869</span></h1>
		</div>
		

		<div id="info-container">
			<div id="info-header-box">
				<img src="media/checklist.png">
				<h1>Preparation For Bed Bug Treatment</h1>
			</div>

			<div id="infobox">
				<div id="prepchecklist">
					<h1>Instructions For Clients</h1>
					<br/>
					<p> Bed bugs are a serious problem and are notoriously difficult to exterminate. Therefore, in order for us to properly perform our bed bug treatment program, which is guaranteed to completely exterminate all bed bugs and their eggs, client cooperation is essential. Before our bed bug exterminators come to your home, please complete the following checklist:</p>

					<br/>
					<h1>Preparation Check List:</h1>
					<br/>

					<ul class="bullets">
						<li>Remove all clutter from treatment areas. Place any items that you no longer use into garbage bags and put them into outside garbage bin.</li>
						<li>Remove everything from your beds including bedding, spreadsheets, comforters, and pillows. Place everything into plastic bags to be washed and seal tight so trapped bed bugs cannot escape.</li>
						<li>Place all clothing into plastic bags to be washed. You must remove clothing from every location including drawers, night tables, dressers and closets.</li>
						<li>Remove any paintings, pictures, posters, wall decor, and/or mirrors from the walls where the high bed bug infestation has occurred.</li>
						<li>Remove all vacuum bags and throw them into an outside garbage bin.</li>
						<li>All vacuums and other electrical appliances must be provided to the exterminator for treatment as bed bugs may be hiding or trapped inside of electrical appliances.</li>
						<li>Discard items that were stored under the bed or leave them in the area for treatment.</li>
						<li>Aquariums can remain in their original location under the condition that the filtrations and aeration systems are turned off for at least six hours and the tank is covered. However, it is advisable that you move it to kitchen area if that is possible.</li>
						<li>Ensure that all laundry bags be sealed tightly before transporting them to the laundry facility. Non washable cloths should be dry clean.</li>
						<li>All members, including all pets, are required to leave the facility and not return for a minimum duration of 4-6 hr after the bed bug exterminator has completed his job and left the facility.</li>
					</ul>
					
					<br/>
					<h1>Laundry Cleaning Instructions:</h1>
					<br/>
					
					<ul class="bullets">
						<li>Make sure to empty all your laundry bags directly into the washing machine to ensure trapped bedbugs do not escape.</li>
						<li>Wash all items in a hot water cycle if possible and dry them on high heat.</li>
						<li>Immediately throw away any plastic bags that you used into an outside garbage bin.</li>
						<li>Items that are not able to be washed in a washing machine should be placed directly into the dryer to be disinfected. Some example of items to be placed in the dryer include: duffel bags, pocketbooks, backpacks, stuffed animals and other soft toys. It is advisable to dispose of any items that are not in use and cause clutter.</li>
						<li>Ensure to dry all items at the highest heat for a minimum of 30 minutes. Make sure to not load the dryer more than 50% capacity to ensure effective disinfection.</li>
						<li>When all clothing and other items have been washed thoroughly, place them in new plastic bags; seal them tightly until the follow up service has been completed.</li>
						<li>You will be instructed by our bed bug exterminator when it is safe to re-introduce all items into the treated areas.</li>
					</ul>
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