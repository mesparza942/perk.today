<?php if($available=='0')
{
	?>
	<h1>El espacio que solicitaste esta ocupado.</h1>
	<a href="<?php echo url('/') ?>"><h3 style="font-style: italic;">Volver</h3></a>
	<?php
}else{
	?>
	<h1>Gracias por utilizar Perk.</h1>
	<h3 style="font-style: italic;">Ahora puedes acercarte a tu espacio de parqueo</h3>
	<?php
} ?>
