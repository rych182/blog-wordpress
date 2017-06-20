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
?>