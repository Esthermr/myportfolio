<?php
/*
* REMStudio: Registrando zona de menú
*
*
*
*
* @package REM
* @subpackage REMStudio
* @since 1.0
*/

function remstudio_menus(){

	register_nav_menus(array(

		'main-menu' => __('Menu principal en encabezado', 'remstudio')

	));

}
add_action('init', 'remstudio_menus');