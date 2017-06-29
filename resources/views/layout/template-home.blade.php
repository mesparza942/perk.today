<div>
  <div class="googlediv dleft left"> 
    <div id="googleMap"> <!-- The map places here --> </div>
  </div>
  <div id="spot" style="height: 600px;" class="dright left">
	 <div class="almost">
    <br>
	   <a class="aplicar" href="reservation">Reservar</a>
	   <div hidden="hidden" style="width: 75%;">
		  <a href="redirect"><img style="width: 100%" src="<?php echo url('/'); ?>/images/fb-login-button.png" alt="Facebbok"></a>
	   </div>
    </div>
  </div>
</div>
<script>
var centro = {lat:-1.393373, lng:-78.493716};
var map;
function initMap() {

  var iwOuter = $('.gm-style-iw');

  var iwBackground = iwOuter.prev();
  iwBackground.children(':nth-child(2)').css({'display' : 'none'});
  iwBackground.children(':nth-child(3)').css({'display' : 'none'});
  iwBackground.children(':nth-child(4)').css({'display' : 'none'});
  iwBackground.children(':nth-child(5)').css({'display' : 'none'});
  iwBackground.children(':nth-child(6)').css({'display' : 'none'});
  iwBackground.children(':nth-child(7)').css({'display' : 'none'});
  var mapProp= {
    center: new google.maps.LatLng(centro),
    zoom: 10
  };

  map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var infowindow = new google.maps.InfoWindow({
    content: '<span style="font-weight: bold; font-size:1em;"> $1.50 / h</span>'
  });
  marker = new google.maps.Marker({
    position: new google.maps.LatLng({lat:-1.393373, lng:-78.493716}),
    map: map,
    title: 'Parking',
    icon: 'images/markermini-perk.png'
  });
  infowindow.open(map, marker);

  var infowindow2 = new google.maps.InfoWindow({
    content: '<span style="font-weight: bold; font-size:1em;"> $1.25 / h</span>'
  });
  marker2 = new google.maps.Marker({
    position: new google.maps.LatLng({lat:-1.393373, lng:-78.393716}),
    map: map,
    title: 'Parking',
    icon: 'images/markermini-perk.png'
  });
  infowindow2.open(map, marker2);


}

var myKey = "AIzaSyAnTuDLeE9uwdFrTjrBDmMw3PTQ6NTEApM";
        function loadScript() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = "https://maps.googleapis.com/maps/api/js?key=" + myKey + "&callback=initMap";
            document.body.appendChild(script);
        }
</script>
