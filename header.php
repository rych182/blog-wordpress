<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>
	<?php if ( is_home() ) {
		echo get_bloginfo('name');
	} else if ( is_single() ) {
		echo the_title();
	} else {
		echo get_bloginfo('name');
	}?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="logo col-xs-12 col-sm-6">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="ricgc.com">
					</a>
				</div>
				<div class="redes-sociales col-xs-12 col-sm-6">
					<a class="twitter" href="https://twitter.com/Rych182">
						<i class="fa fa-twitter-square"></i>
					</a>
					<a class="linkedin" href="https://www.linkedin.com/in/ricardo-garrido-a2a1b167/">
						<i class="fa fa-linkedin-square"></i>
					</a>
					<a class="github" href="https://github.com/rych182">
						<i class="fa fa-github-alt"></i>
					</a>
				</div>
			</div>
		</div>
			<nav class="menu">
				<div class="container">
					<div class="row">
						<?php wp_nav_menu(array(
						'container' => false,
						'menu_class' => '',
						'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
						'theme_location' => 'menu-top' 
						)); ?>
					</div>
				</div>
			</nav>

			<div class="ad container hidden-xs">
				<div class="row">
					<div class="col-md-12">
						<img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="Publicidad de Google">
					</div>
				</div>
			</div>
	</header>