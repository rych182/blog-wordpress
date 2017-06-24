<aside class="sidebar col-md-4">
	<div class="widget redes-sociales">
		<div class="titulo-seccion">
		<h3>Siguenos</h3>
			<div class="redes-sociales">
				<a class="twitter" href="https://twitter.com/Rych182">
					<i class="icono fa fa-twitter-square"></i>
					<span class="seguidores">200</span>
				</a>
				<a class="linkedin" href="https://www.linkedin.com/in/ricardo-garrido-a2a1b167/">
					<i class="icono fa fa-linkedin-square"></i>
					<span class="seguidores">100</span>
				</a>
				<a class="github" href="https://github.com/rych182">
					<i class="icono fa fa-github-alt"></i>
					<span class="seguidores">20</span>
				</a>
			</div>
		</div>				
	</div>
				
	<div class="widget boletin">
		<div class="titulo-seccion">
			<h3>Suscribete</h3>
			<form action="" class="formulario">
				<label for="email">Suscribete a nuestro boletin</label>
				<input type="email" id="email" placeholder="Correo Electronico" required>
				<input type="submit" value="Enviar">
			</form>
		</div>
	</div>

	<!--Si la funcion de sidebar existe o si tenemos un sidebar simplemente lo ejecutas-->
	<?php if ( !function_exists('dynamic_sidebar') OR !dynamic_sidebar('Sidebar') ): endif; ?>
</aside>