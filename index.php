<?php  get_header();?>

	<div class="container">
		<div class="row">

			<section class="main col-md-8">
				<div class="row titulo-seccion">
					<div class="col-md-12">
						<h3>Lo mas reciente</h3>
					</div>
				</div>

				<div class="row posts">
					<article class="col-md-6 post">
						<div class="contenedor">
							<div class="thumb">
								<a href="#">
									<img src="<?php bloginfo('template_url'); ?>/img/1.jpg" width="700" alt="">
								</a>
							</div>
							<div class="info">
								<h3 class="titulo"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
								<p class="fecha">5 de Junio del 2017</p>
								<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, accusamus et totam nihil distinctio voluptatem delectus possimus numquam tenetur natus!.</p>
								<div class="categorias">
									<a href="#">HTML</a>
									<a href="#">CSS</a>	
								</div>
							</div>
						</div>
					</article>

					<article class="col-md-6 post">
						<div class="contenedor">
							<div class="thumb">
								<a href="#">
									<img src="<?php bloginfo('template_url'); ?>/img/2.jpg" width="700" alt="">
								</a>
							</div>
							<div class="info">
								<h3 class="titulo"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
								<p class="fecha">5 de Junio del 2017</p>
								<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, accusamus et totam nihil distinctio voluptatem delectus possimus numquam tenetur natus!.</p>
								<div class="categorias">
									<a href="#">HTML</a>
									<a href="#">CSS</a>	
								</div>
							</div>
						</div>
					</article>

					<article class="col-md-6 post">
						<div class="contenedor">
							<div class="thumb">
								<a href="#">
									<img src="<?php bloginfo('template_url'); ?>/img/3.jpg" width="700" alt="">
								</a>
							</div>
							<div class="info">
								<h3 class="titulo"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
								<p class="fecha">5 de Junio del 2017</p>
								<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, accusamus et totam nihil distinctio voluptatem delectus possimus numquam tenetur natus!.</p>
								<div class="categorias">
									<a href="#">HTML</a>
									<a href="#">CSS</a>	
								</div>
							</div>
						</div>
					</article>

					<article class="col-md-6 post">
						<div class="contenedor">
							<div class="thumb">
								<a href="#">
									<img src="<?php bloginfo('template_url'); ?>/img/4.jpg" width="700" alt="">
								</a>
							</div>
							<div class="info">
								<h3 class="titulo"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
								<p class="fecha">5 de Junio del 2017</p>
								<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, accusamus et totam nihil distinctio voluptatem delectus possimus numquam tenetur natus!.</p>
								<div class="categorias">
									<a href="#">HTML</a>
									<a href="#">CSS</a>	
								</div>
							</div>
						</div>
					</article>

					<article class="col-md-6 post">
						<div class="contenedor">
							<div class="thumb">
								<a href="#">
									<img src="<?php bloginfo('template_url'); ?>/img/5.jpg" width="700" alt="">
								</a>
							</div>
							<div class="info">
								<h3 class="titulo"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
								<p class="fecha">5 de Junio del 2017</p>
								<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, accusamus et totam nihil distinctio voluptatem delectus possimus numquam tenetur natus!.</p>
								<div class="categorias">
									<a href="#">HTML</a>
									<a href="#">CSS</a>	
								</div>
							</div>
						</div>
					</article>

					<article class="col-md-6 post">
						<div class="contenedor">
							<div class="thumb">
								<a href="#">
									<img src="<?php bloginfo('template_url'); ?>/img/6.jpg" width="700" alt="">
								</a>
							</div>
							<div class="info">
								<h3 class="titulo"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
								<p class="fecha">5 de Junio del 2017</p>
								<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, accusamus et totam nihil distinctio voluptatem delectus possimus numquam tenetur natus!.</p>
								<div class="categorias">
									<a href="#">HTML</a>
									<a href="#">CSS</a>	
								</div>
							</div>
						</div>
					</article>

				</div>
				<section class="row paginacion">
					<div class="col-md-12">
						<ul>
							<li class="disabled">Página 1 de 6</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">Ultima</a></li>
						</ul>
					</div>
				</section>

			</section>
			<?php  get_sidebar();?>
		
		</div>
	</div>

<?php  get_footer();?>