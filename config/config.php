<?php

/**
 * Dirección URL del proyecto
 */
define('URL', 'http://localhost/bugaTuristica/web/');

/**
 * Dirección física del proyecto en el servidor
 */
define('DIR', 'c:/xampp/htdocs/bugaTuristica/');

define("DB_HOST", "localhost");
define("DRIVER", "mysql");
define("DB_NAME", "");
define("DB_USUARIO", "");
define("DB_PASSWORD", "");
define("DB_PORT", 3306);

define("DSN", DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT);

define("MODULO_DEFAULT", "home");
define("ACCION_DEFAULT", "index");
