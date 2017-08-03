<div class="content bgwhite">
  <div class="contentdiv">
    <div id="rtp" class="twelve algcenter left">
      <p>Quieres ganar dinero extra siendo parte de nuestra comunidad?</p>
      <p>"Renta tu parqueadero", una forma fácil de ofrecer un parqueo seguro y generar un ingreso extra para ti.</p>
    </div>
  </div>
  <div class="twelve bglgrey left">
    <div class="contentform">
      <div class="cf">
        <form id="ff" action="<?php echo url('/'); ?>/contacto/gracias" method="GET">
          <div class="formulario">
            <div>
              <div>
                <ul>
                  <li><div id="b1" class="activa"><a>1. Ubicación</a></div></li>
                  <li><div id="b2" class="inactiva"><a>2. Características</a></div></li>
                  <li><div id="b3" class="inactiva"><a>3. Descripción</a></div></li>
                </ul>
              </div>
              <div id="a1" class="block">
                <div class="twelve">Dirección:</div>
                <input id="pac-input" class="controls" type="text" placeholder="Enter a location">
                  <div id="type-selector" class="controls">
                      <input type="radio" name="type" id="changetype-all" checked="checked">
                      <label for="changetype-all">All</label>

                      <input type="radio" name="type" id="changetype-establishment">
                      <label for="changetype-establishment">Establishments</label>

                      <input type="radio" name="type" id="changetype-address">
                      <label for="changetype-address">Addresses</label>

                      <input type="radio" name="type" id="changetype-geocode">
                      <label for="changetype-geocode">Geocodes</label>
                  </div>
                <div id="map" style="width: 375px; height: 220px;"></div>
              </div>
              <div id="a2" class="none">
                <div class="six">Tipo de espacio:</div>
                <select id="tipo" name="espacio">
                  <option value="auto" selected>Automovil</option>
                  <option value="suv">SUV</option>
                  <option value="Furgoneta">Furgoneta</option>
                </select>
                <div class="six">Cantidad de espacios:</div>
                <select id="num" name="num">
                  <option value="1" selected>Uno</option>
                  <option value="2">Dos</option>
                  <option value="3">Tres</option>
                </select>
                <div class="six">Tiempo:</div>
                <select id="time" name="time">
                  <option value="Lunes" selected>Lunes</option>
                  <option value="Martes">Martes</option>
                  <option value="Miercoles">Miercoles</option>
                  <option value="Jueves">Jueves</option>
                  <option value="Viernes">Viernes</option>
                  <option value="Sabado">Sabado</option>
                  <option value="Domingo">Domingo</option>
                  <option value="Sabado-Domingo">Sabados y Domingos</option>
                  <option value="Lunes-Viernes">Lunes a Viernes</option>
                </select>
                <div class="six">Horas:</div>
                <select id="hours" name="hours">
                  <option value="8to17" selected>08:00 - 17:00</option>
                  <option value="06to18">06:00 - 18:00</option>
                  <option value="18to06">18:00 - 06:00</option>
                </select>
                  <div class="six">Costo:</div>
                <select id="cost" name="cost">
                  <option value="1" selected>$ 1.00</option>
                  <option value="150">$ 1.50</option>
                  <option value="2">$ 2.00</option>
                  <option value="250">$ 2.50</option>
                  <option value="3">$ 3.00</option>
                </select>
              </div>
              <div id="a3" class="none">
                <div class="twelve">Detalles del espacio:</div>
                <textarea rows="4" cols="30" name="detalle" form="ff"></textarea>
                <div class="twelve">Metodo de acceso:</div>
                <select id="method" name="method">
                  <option value="key" selected>Llave</option>
                  <option value="control">Control</option>
                  <option value="conjunto">Conjunto</option>
                </select>
                <div class="twelve">Clave:</div>
                <input id="pass" type="text" name="pass">
              </div>

              <div>
                <p>
                  <a id="sig" style="cursor: pointer;">Siguiente</a>
                  <a id="fin" class="none" href="javascript:{}" onclick="document.getElementById('ff').submit();">Finalizar</a>
                </p>
                <p><a id="ant" style="cursor: pointer;">Anterior</a></p>

              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<input hidden="hidden" type="text" id="direccion" value="aa" name="direccion" form="ff">
<input hidden="hidden" type="text" id="latitud" value="aa" name="latitud" form="ff">
<input hidden="hidden" type="text" id="longitud" value="aa" name="longitud" form="ff">
<?php

?>
<script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
var ad = "";
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13
        });
        var input = /** @type {!HTMLInputElement} */(
            document.getElementById('pac-input'));

        var types = document.getElementById('type-selector');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setIcon(/** @type {google.maps.Icon} */({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
          }));
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          $('#latitud').val(place.geometry.location.lat());
          $('#longitud').val(place.geometry.location.lng());
          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }
          ad = address;
          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);

        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);
      }

    var pest = 1;
    $(document).ready(function(){
        $('#sig').click(function() {
          if (pest==1) {
            $('#direccion').val(ad);
          }
          $('#a'+pest).addClass("none");
          $('#a'+pest).removeClass("block");
          $('#b'+pest).removeClass("activa");
          $('#b'+pest).addClass("inactiva");
          pest++;
          $('#a'+pest).removeClass("none");
          $('#a'+pest).addClass("block");
          $('#b'+pest).removeClass("inactiva");
          $('#b'+pest).addClass("activa");
          if (pest==3) {
            $('#sig').addClass("none");
            $('#fin').removeClass("none");
            $('#fin').addClass("block");
          }
        });
        $('#ant').click(function() {

        });
        $('#pass').prop('disabled', true);
        $('#method').change(function () {
        if($('#method option:selected').val()=='control')
        {
          $('#pass').prop('disabled', false);
        }
      });
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_G2wlQZo2eUWZsrOHvO0P9EQIlIezk40&libraries=places&callback=initMap"
        async defer></script>
