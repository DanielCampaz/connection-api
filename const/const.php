<?php
global $wp;
$host = home_url( add_query_arg( array(), $wp->request ) ); 

$FOLDER_NAME = "smartapi-connect";

$LINK_BASE_PAGE = $host."/wp-content/plugins/".$FOLDER_NAME."/pages";
$LINK_BASE = $host."/wp-content/plugins/".$FOLDER_NAME;

$NAME_APPLICATION_SETTINGS = "Connection Settings";
$GUIDE_SETTINGS = "In this section you can configure the endpoint of your API, the login if necessary";
$NAME_APPLICATION_REQUEST = "Request";
$GUIDE_REQUEST = "In this section you can add or edit the queries of your api";
$NAME_APPLICATION_TODO = "To Do";
$GUIDE_TODO = "In this section you can change everything that the api does";
