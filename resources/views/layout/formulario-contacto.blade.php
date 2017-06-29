<div style="margin-bottom: 10px;" class="forty left">
	<form id="formulario">
		<span class="formtext">
		Nombre*<br>
		<input type="text" name="nombre" id="nombre" value=""><br>
		Apellido*<br>
		<input type="text" name="apellido" id="apellido" value=""><br>
		Teléfono / Celular*<br>
		<input type="text" name="celular" id="celular" value=""><br>
		E-mail*<br>
		<input type="text" name="mail" id="mail" value=""><br>
		<span class="required">* Campos obligatorios</span><br><br>
		<input id="bt" type="button" value="enviar"/><br>
		<div id="mensaje"> </div>
		</span>
	</form>
</div>
<script>
$(document).ready(function(){

	$('#bt').click(function(){
		var b = $('#nombre').val();
		var c = $('#apellido').val();
		var d = $('#celular').val();
		var e = $('#mail').val();
		if(b!='' && c!='' && d!='' && e!='')
		{
			$.get("<?php echo url('/') ?>/api/contacto/create", {
				nombre: b,
				apellido: c,
				celular: d,
				mail: e
			}).done(function(datos){
				$('#mensaje').addClass('success');
				$('#mensaje').html(datos);
			});
		}else{
			if(b=='')
				$('#nombre').addClass('invalid');
			if(c=='')
				$('#apellido').addClass('invalid');
			if(d=='')
				$('#celular').addClass('invalid');
			if(e=='')
				$('#mail').addClass('invalid');
		}
	}); 
});
</script>

<!-- 
CDN = Content Delivery Network
JavaScript no era capaz de llamar a una BDD cuando Nacio

Asincrona
Javascript
A (Javascript)
X M L

AJAX carga contenido sin necesidad de recargar la pagina
AJAX fue el primer mecanismo de acercamiento a las BDD
-->

