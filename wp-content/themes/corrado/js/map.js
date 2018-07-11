var nymarker;
var njmarker;

// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', initMap);

function initMap() {

 // If document (your website) is wider than 480px, isDraggable = true, else isDraggable = false
   var isDraggable = window.innerWidth > 480 ? true : false;

	// NY
	var nymap = new google.maps.Map(document.getElementById('nymap'), {
		draggable: isDraggable,
		scrollwheel: false,
		zoom: 15,
		mapTypeControl: false,
		streetViewControl: false,
		center: new google.maps.LatLng(40.7548945, -73.9818565),
		styles: [{"elementType":"geometry","stylers":[{"color":"#f5f5f5"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}]
	});

  nymarker = new google.maps.Marker({
    map: nymap,
	icon: {
			url: "/wp-content/themes/corrado/images/mapmarker-fresh.png",
			scaledSize: new google.maps.Size(28,46)
		},
    draggable: false,
    animation: google.maps.Animation.DROP,
    position: new google.maps.LatLng(40.7548945, -73.9818565)
  });
  nymarker.addListener('click', toggleNyBounce);


	// NJ
  var njmap = new google.maps.Map(document.getElementById('njmap'), {
	draggable: isDraggable,
	scrollwheel: false,
    zoom: 15,
	mapTypeControl: false,
	streetViewControl: false,
    center: new google.maps.LatLng(41.0569578, -74.1314741),
	styles: [{"elementType":"geometry","stylers":[{"color":"#f5f5f5"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}]
  });

  njmarker = new google.maps.Marker({
    map: njmap,
	icon: {
			url: "/wp-content/themes/corrado/images/mapmarker-fresh.png",
			scaledSize: new google.maps.Size(28,46)
		},
    draggable: false,
    animation: google.maps.Animation.DROP,
    position: new google.maps.LatLng(41.0569578, -74.1314741)
  });
  njmarker.addListener('click', togglenjBounce);

}

function toggleNyBounce() {
  if (nymarker.getAnimation() !== null) {
    nymarker.setAnimation(null);
  } else {
    nymarker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

function togglenjBounce() {
  if (njmarker.getAnimation() !== null) {
    njmarker.setAnimation(null);
  } else {
    njmarker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
