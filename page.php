<?php  get_header();?>

	<div class="container">
		<div class="row">

			<section class="main col-md-8">
				<div class="row single-post">
					<!-- Si tenemos artículos se ejecutara el código de while hasta the_post,
					mientras que haya artículos vamos a ir cargando un artículo-->
					<?php if ( have_posts() ) : while (have_posts()) :the_post();?>
					<article class="col-md-12 post">
						<div class="contenedor">
							<div class="info">
								<h3 class="titulo">
									<!--Con esto php te trae el titulo-->
									<!--El permalink es el enlace de nuestro artículo-->
									<!--get_the_date le pone fechas a todos, por que si solo pones the_date te trae una fecha y a los demas
									 artículos no se los pone y descuadra todo, es IMPORTANTE PONER EL GET Y EL ECHO-->
									<?php the_title(); ?>
								</h3>
								<p class="fecha"><?php echo get_the_date(); ?></p>
								<div class="texto"><?php echo the_content(); ?></div>
							</div>
						</div>
					</article>

					<?php endwhile; else : ?>
					<!--Este article sde abajo se va a ejecutar si es que no tenemos artículos en la página principal-->
					<article class="col-md-6 post">
						<div class="contenedor">
							<div class="info">
								<h3 class="titulo">
									El post que buscas no existe.
								</h3>
								<p class="fecha"><?php echo get_the_date(); ?></p>
								<div class="extracto"><p>Revisa que la URL que hayas ingresado sea correcta</p></div>
							</div>
						</div>
					</article>
					<?php endif; ?>
				</div>
				

			</section>
			<?php  get_sidebar();?>
		
		</div>
	</div>

<?php  get_footer();?>