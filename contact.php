<div id="contact" class="page">
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		///////////////////////////////////////////////////////////////////
		// Powered By MapsEasy.com Maps Generator                        
		// Please keep the author information as long as the maps in use.
		// You can find the free service at: http://www.MapsEasy.com     
		///////////////////////////////////////////////////////////////////
		function LoadGmaps() {
			var myLatlng = new google.maps.LatLng(51.4416420,5.4697225);
			var myOptions = {
				scrollwheel: false,
				zoom: 14,
				center: myLatlng,
				disableDefaultUI: true,
				panControl: false,
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.SMALL
				},

				mapTypeControl: false,
				streetViewControl: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				styles: [{"featureType":"all","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"all","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#ffdfc0"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#000000"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"visibility":"on"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#dddddd"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#000000"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"visibility":"on"}]}]
				}
			var map = new google.maps.Map(document.getElementById("map"), myOptions);
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				title:"Eindhoven"
			});

			marker.setIcon("images/map.png");
		}
	</script>

	<div id="map"></div>

	<div id="formulier">
		<h1 class="contact">Contact</h1>

		<form method="POST" action="index#contact">
			<input id="naam" onkeyup="checkForm()" type="text" name="naam" placeholder="naam" required>
			<input id="email" onkeyup="checkForm()" type="email" name="email" placeholder="email" required>
			<textarea id="message" onkeyup="checkForm()" name="message" rows="5" placeholder="bericht" required></textarea>

			<input id="sendBtn" class="submit" type="submit" name="verzend" value="Verzend">
		</form>

		<p class="contact">
			Postbus 10000 <br>
			9501AA Eindhoven <br>
			Telefoon: 020- 1234567 <br>
			E-mail: info@OddDuck.nl
		</p>
	</div>
</div>

<div class="bottomwrapper last">
	<div style="background-color:#393F3D;"class="kleurbox"></div>
	<div style="background-color:#4C2C32;"class="kleurbox"></div>
	<div style="background-color:#A45646;"class="kleurbox"></div>
	<div style="background-color:#D39250;"class="kleurbox"></div>
	<div style="background-color:#E1DDD4;"class="kleurbox"></div>
</div>