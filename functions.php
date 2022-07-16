<?php
/*
* REMStudio funciones y definiciones
*
*
*
*
* @package REM
* @subpackage REMStudio
* @since 1.0
*/


define('STYLEROOT' , get_stylesheet_directory_uri());


/*
* Definiendo características del tema
*
*
*
* @package REM
* @subpackage REMStudio
* @since 1.0
*/

// Definimos el tamaño del contenido
if ( ! isset( $content_width ) )
	$content_width = 1043;

if ( ! function_exists('remstudio_custom_theme_features') ) {

// Register Theme Features
function remstudio_custom_theme_features()  {

	// Añade soporte para poder suscribirse al blog mediante RSS
	add_theme_support( 'automatic-feed-links' );

	// Añade soporte para los tipos de formatos
	add_theme_support( 'post-formats', array( 'image', 'video', 'audio' ) );

	// Añade soporte para las imágenes destacadas
	add_theme_support( 'post-thumbnails');

	// Añade soporte para los fondos personalizados
	$background_args = array(
		'default-color'          => 'e8e8e8',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Añade soporte para los marcados semánticos de HTML5
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Añadir soporte para poder traducir la plantilla
	load_theme_textdomain( 'remstudio', get_template_directory() . '/languages' );
	
	//Añadir tamaño de imagen personalizado
	add_image_size('blog_size_image', 825, 533, true);
	add_image_size('blog_thumb_image', 400, 275, true);
}
add_action( 'after_setup_theme', 'remstudio_custom_theme_features' );

}

/*
*
* Registrando y cargando hojas de estilo
*
*/

require_once('includes/scripts-style.php');

/*
*
* Registrando menú
*
*/

require_once('includes/menu.php');