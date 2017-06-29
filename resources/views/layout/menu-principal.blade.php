<nav>
	<div class="navleft left margnav">
		<ul id="menuN" class="menu">
			<li><a class="nav-item" href="<?php echo url('/'); ?>">Inicio</a></li>
			<li><a class="nav-item" href="">Renta tu Parqueadero</a></li>
			<li><a class="nav-item grey" href="<?php echo url('/'); ?>">Promociones</a></li>
			<li><a class="nav-item grey" href="<?php echo url('/'); ?>/contacto">Contacto</a></li>
			<!-- <li><a class="nav-item" href="https://trello.com/perk9"><i class="fa fa-trello" aria-hidden="true"></i><span style="font-style: italic;"> Scrum</span></a></li> -->
		</ul>
		<ul id="menuR" class="menu2">
			<li><a>Menu <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
				<ul id="menu-hover" class="fullwidth">
					<li><a class="nav-item" href="<?php echo url('/'); ?>">Inicio</a></li>
					<li><a class="nav-item" href="">Renta tu Parqueadero</a></li>
					<li><a class="nav-item" href="<?php echo url('/'); ?>">Promociones</a></li>
					<li><a class="nav-item" href="<?php echo url('/'); ?>/contacto">Contacto</a></li>
					<li id="log"><a class="nav-item"><i class="fa fa-user-o" aria-hidden="true"></i> Iniciar Sesion</a></li>
					<li><a class="nav-item" href=""><i class="fa fa-sign-out" aria-hidden="true"></i> Registrarse</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="log-div" class="login left margnav">
		<div>
			<ul class="menu">
				<li id="log"><a class="nav-item"><i class="fa fa-user-o" aria-hidden="true"></i> Iniciar Sesion</a>
					<ul id="login-hover">
						<li><a class="nav-subitem" href="<?php echo url('/') ?>/redirect"><img class="social" src="<?php echo url('/'); ?>/images/fb2.png" alt="Facebook Perk"></a></li>
						<li><a class="nav-subitem" href=""><img class="social" src="<?php echo url('/'); ?>/images/gg2.png" alt="Google+ Perk"></a></li>
					</ul>
				</li>
				<li><a class="nav-item" href=""><i class="fa fa-sign-out" aria-hidden="true"></i> Registrarse</a></li>
			</ul>
		</div>
	</div>
</nav>
<script>
	$("#log").click(function() {

	$("#login-hover").slideToggle();
});
	$("#menuR").click(function() {
	$("#menu-hover").slideToggle();
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>