<div id="cc" class="dleft left"> 
	<div id="googleMap" class="half"></div>
</div>
<div id="spot" style="height: 600px; visibility: hidden;" class="dright left borde1px">
	<br><br>
	<a class="aplicar" href="reservation">Reservar</a>
	<div hidden="hidden" style="width: 75%;">
		<a href="redirect"><img style="width: 100%" src="<?php echo url('/'); ?>/images/fb-login-button.png" alt="Facebbok"></a>
	</div>
</div>

<script>
var centro = {lat:-1.393373, lng:-78.493716};
var map;
var marker;
var markers = Array();
function initMap() {

  var mapProp= {
    center: new google.maps.LatLng(centro),
    zoom: 7
  };

  map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var marker_p1 = new google.maps.Marker({
    position: new google.maps.LatLng(-0.2038072, -78.4909194),
    title:"Carlos Pozo\nEspacios: 2",
  icon:'<?php echo url('/'); ?>/images/gps-perk.png',
  map:map
});

  var infowindow = new google.maps.InfoWindow();
  var des = new Array();
  
}
</script>
<script>
  $( '#cc' ).click(function() {
      document.getElementById("spot").style.visibility = "visible";
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCETqXRRoNFUvpjmXLRDuvzgPjlEs8NKfE&callback=initMap"></script>