<footer>
		<?php if ( !function_exists('dynamic_sidebar') OR !dynamic_sidebar('Footer') ): endif; ?>
		<nav class="menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php wp_nav_menu(array(
						'container' => false,
						'menu_class' => '',
						'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
						'theme_location' => 'menu-footer' 
						)); ?>
					</div>
				</div>
			</div>
		</nav>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Sitio creado por <a href="http://ricgc.com">Ricardo Garrido</a></p>
					</div>
				</div>
			</div>
		</div>

		
	</footer>

	<?php wp_footer(); ?>
</body>
</html>