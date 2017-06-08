<div class="dleft left"> 
	<div id="googleMap" class="half"></div>
</div>
<div hidden="hidden" class="dright left borde1px">
	<div style="width: 75%;">
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


  var infowindow = new google.maps.InfoWindow();
  var des = new Array();
  
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCETqXRRoNFUvpjmXLRDuvzgPjlEs8NKfE&callback=initMap"></script>