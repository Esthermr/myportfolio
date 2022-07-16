<?php
/*
* REMStudio archivo de registro y recarga de scripts y estilos
*
*
*
*
* @package REM
* @subpackage REMStudio
* @since 1.0
*/

/*
*
* Registrando y cargando estilos
*
*/

function remstudio_theme_style(){
    //Registrar los estilos
    wp_register_style('fontawesome', STYLEROOT .'/css/fontawesome.css', '', '5.1.1', 'all');
    wp_register_style('REM_Style', get_stylesheet_uri(), array('fontawesome'), '1.0', 'all');
    //Cargar estilos
    wp_enqueue_style('REM_Style');
}

add_action('wp_enqueue_scripts', 'remstudio_theme_style');

/*
*
* Registrando y cargando scripts
*
*/

function remstudio_theme_scripts(){
    //Registrar scripts
    wp_register_script('responsive', STYLEROOT . '/js/responsive.js', '', '1.0', true);
    wp_register_script('filtro', STYLEROOT . '/js/filtro.js', '', '1.0', true);
    wp_register_script('modal', STYLEROOT . '/js/modal-gal.js', '', '1.0', true);

    //Cargar scripts
    wp_enqueue_script('filtro');
    wp_enqueue_script('responsive');
    wp_enqueue_script('modal');

}

add_action('wp_enqueue_scripts', 'remstudio_theme_scripts');