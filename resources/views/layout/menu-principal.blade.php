<div class="nav">
	<div style="margin-top: 8px;">
		<ul class="menu">
			<li><a style="padding-right: 25px;" class="nav-item" href="<?php echo url('/'); ?>">Inicio</a></li>
			<li><a class="nav-item" href="">Renta tu Parqueadero</a></li>
			<li><a class="nav-item grey" href="<?php echo url('/'); ?>/promociones">Promociones</a></li>
			<li><a class="nav-item grey" href="<?php echo url('/'); ?>/trabaja-con-nosotros">Contacto</a></li>
			<li><a class="nav-item" href="https://trello.com/perk9"><i class="fa fa-trello" aria-hidden="true"></i><span style="font-style: italic;"> Scrum</span></a></li>
		</ul>
	</div>
	<div style="text-align: right;" class="login right">
		<ul class="menu">
			<li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>
			<?php 
			if($user->id_user='1')
				echo $user->firstname_user;
			else
			 echo "Iniciar Sesión" ?></a>
				<ul>
					<!-- <li><a class="nav-item grey" href=""><img src="<?php echo url('/'); ?>/images/facebook.png" alt="Facebook Perk" class="social-icon"></a></li>
					<li><a class="nav-item grey" href=""><img src="<?php echo url('/'); ?>/images/social-google+.png" alt="Google+ Perk" class="social-icon"></a></li> -->
				</ul>
			</li>
		</ul>
	</div>
</div>