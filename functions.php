<?php
//Con esto agregamos el soporte para los thumbnails
	add_theme_support('post-thumbnails');
//Agregamos un soporte de imagen, se llama 'homepage-thumb',la imagen con las medidas y la corta si no cabe
	add_image_size('homepage-thumb', 745, 372, true);

//Esta es una función y luego un arreglo
//Con esto le decimos a wordpress que tenemos 2 menus, el top y el footer.
//Esto hace que me aparezca la pestaña de menus en el backoffice de worspress
	register_nav_menus( array(
		'menu-top' => 'Menu Principal',
		'menu-footer' => 'Menu Footer'
	));

//Una función que nos permite registrar una nueva sección en la cual
//podemos poner widgets
//Las clases, son las mismas que están en nuestro archivo sidebar.php
//Con todo esto, nos aparece la pestaña de WIDGETS en el menú de apariencia.
register_sidebar(array(
	'name' => 'Header',
	'before_widget' => '<div>',
	'after_widget' => '</div>',
	'before_tittle' => '<h3>',
	'after_tittle' => '</h3>', 
	));
//Wordpress nos va a agregar el titulo que es nuesto "h3" y el widget
register_sidebar(array(
	'name' => 'Sidebar',
	'before_widget' => '<div class="widget"><div class="titulo-seccion">',
	'after_widget' => '</div></div>',
	'before_tittle' => '<h3>',
	'after_tittle' => '</h3>', 
	));

register_sidebar(array(
	'name' => 'Footer',
	'before_widget' => '<div>',
	'after_widget' => '</div>',
	'before_tittle' => '<h3>',
	'after_tittle' => '</h3>', 
	));
?>