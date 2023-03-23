<?php
/*
Plugin Name: Connection Api
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