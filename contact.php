<div class="page">
	
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
		<h1>Hi</h1>
	</div>
	
</div>