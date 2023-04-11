<?php
/*
Plugin Name: SmartAPI Connect
Plugin URI: https://github.com/DanielCampaz/smartapi-connect
Description: Plugin for the connection with the database that receives a json type response and works according to the user's parameters
Version: 1.0.0
Author: Daniel Steven Campaz Ocoro
Author URI: https://github.com/DanielCampaz
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

}

function Deactivate()
{
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'Active');
register_deactivation_hook(__FILE__, 'Deactivate');

/* Function Init Finish */

/* Menus */

add_action('admin_menu', 'CreateMenus');

function CreateMenus()
{
    add_menu_page(
        'SmartAPI Connect', //Titulo Pagina
        'SmartAPI Connect', //Titulo Menu
        'manage_options',
        'smart-api-connect', //Acceso administradores
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
/* Finish Function Open Pages */


/* Scheduled Functions */
add_action( 'update_api_hook', 'update_apis' );
wp_schedule_event( time(), 'hourly', 'update_api_hook' );

// Defining the function that is called when programming it
function update_apis() {
  // Code you want to run every hour
}
/* Finish Scheduled Functions */