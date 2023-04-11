<?php
/*
Plugin Name: SmartAPI Connect
Plugin URI: {defenir}
Description: Plugin que grafica en base de de 2 entradas a una tabla
Version: 1.0.0
Author: Daniel Steven Campaz Ocoro
Author URI: {defenir}
*/

/* Imports */


/* Finish Imports */

/* Function Init */

function Active()
{
    $config_path = ABSPATH . 'wp-config.php';
    $config_content = file_get_contents($config_path);
    $new_config_content = str_replace("/* That's all, stop editing! Happy blogging. */", "define('DISABLE_WP_CRON', true);\n\n/* That's all, stop editing! Happy blogging. */", $config_content);
    file_put_contents($config_path, $new_config_content);
    a();
}

function Deactivate()
{
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'Active');
register_deactivation_hook(__FILE__, 'Deactivate');

/* Function Init Finish */
function a(){
    print_r("112222");
}
/* Menus */

add_action('admin_menu', 'CreateMenus');

function CreateMenus()
{
    add_menu_page(
        'Connect Api', //Titulo Pagina
        'Connect Api', //Titulo Menu
        'manage_options',
        'connectionapi', //Acceso administradores
        'PagePrincipal', //slug
        'dashicons-rest-api', //Direccion De la Imagen   plugin_dir_url(__FILE__).'admin/img/icon.png'
        '1' //Pocision del menu
    );

    /*
    add_submenu_page(
        'sp_menu',
        'Setting',
        'Setting',
        'manage_options',
        'sp_menu_settings',
        'subSettings' // Function
    );
    
    */
}

/* Finish Menus */

/* Function Open Pages */

function PagePrincipal()
{
    $page = require(plugin_dir_path(__FILE__) . 'pages/main.php');
    return $page;
}


/* Funciones Programadas */
add_action( 'update_api_hook', 'update_apis' );
wp_schedule_event( time(), 'hourly', 'update_api_hook' );

// Definir la función 'mi_funcion'
function update_apis() {
  // Código que quieres ejecutar cada hora
}