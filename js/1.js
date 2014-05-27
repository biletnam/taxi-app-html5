var rendererOptions = {
  draggable: false
};
var directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);;
var directionsService = new google.maps.DirectionsService();
var map;

var morelia = new google.maps.LatLng(19.702222, -101.185556);

function initialize() {

  var mapOptions = {
    zoom: 11,
    center: morelia
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  directionsDisplay.setMap(map);
  calcRoute();
}

function calcRoute() {
	var d1 = document.getElementById("origen").value;
	var d2 = document.getElementById("destino").value;
	var request = {
    		origin: d1,
    		destination: d2,
    		travelMode: google.maps.TravelMode.DRIVING
  		};
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
    	document.getElementById("directionsPanel").display = "block";
    	var distancia = response.routes[0].legs[0].distance.text;
		var tiempo = response.routes[0].legs[0].duration.text;
    	var costo = (parseInt(distancia)*1000);
    	var steps = "<ul>";
		var myRoute = response.routes[0].legs[0];
		for (var i = 0; i < myRoute.steps.length; i++) {
		 steps += "<li>" + myRoute.steps[i].instructions + "</li>";
		}
		steps += "</ul>";
		document.getElementById("directionsPanel").innerHTML = "<h3>Recorrido de "+d1+" hasta "+d2+"</h3><hr><p><b>Distancia:</b> "+distancia+" | <b>Tiempo: </b>"+tiempo+" | <b>Costo: </b>"+costo+"</p><hr>"+steps;
    	directionsDisplay.setDirections(response);
    }else{
    	document.getElementById("directionsPanel").display = "block";
    	document.getElementById("directionsPanel").innerHTML = "<h3>Sin resultados, intente de nuevo</h3>";
    }
  });
}

function recargar(){
	google.maps.event.addDomListener(window, 'load', initialize());	
}
