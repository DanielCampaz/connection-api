<?php
global $wp;
$host = home_url( add_query_arg( array(), $wp->request ) );

$LINK_BASE_PAGE = $host."/wp-content/plugins/connectionapi/pages";
$LINK_BASE = $host."/wp-content/plugins/connectionapi";

$NAME_APPLICATION_SETTINGS = "Connection Settings";
$GUIDE_SETTINGS = "In this section you can configure the endpoint of your API, the login if necessary";
$NAME_APPLICATION_REQUEST = "Request";
$GUIDE_REQUEST = "In this section you can configure the endpoints of your api and preview the url in each case, and modify it if necessary";

