<?php
define('HTTPROOT', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME']);
define('HOMEURL', $_SERVER['SERVER_NAME']);
define('HEADER', ROOT . '/app/public/get_header.php');
define('FOOTER', ROOT . '/app/public/get_gooter.php');
define('DB_USER', 'hillel');
define('DB_PASS', 'hillel');
define('DB_NAME', 'hillel');
define('DB_HOST', 'localhost');
define('DB_DRIVER', 'mysql');
function get_header()
{
	require_once HEADER;
}

function get_footer()
{
	require_once FOOTER;
}