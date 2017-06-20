<?php
//Con esto agregamos el soporte para los thumbnails
	add_theme_support('post-thumbnails');
//Agregamos un soporte de imagen, se llama 'homepage-thumb',la imagen con las medidas y la corta si no cabe
	add_image_size('homepage-thumb', 745, 372, true);

?>