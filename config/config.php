<?php
define('APP_ROOT', dirname(dirname(__FILE__)));
// define('APP_ROOT', "/var/www/html");

//DB Params
define('DB_HOST', 'database');
define('DB_USER', 'root');
define('DB_PASS', $_ENV['MYSQL_ROOT_PASSWORD']);
define('DB_NAME', 'Products');
