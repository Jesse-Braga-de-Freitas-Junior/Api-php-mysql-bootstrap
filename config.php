<?php

/** O nome do banco */
define('DB_NAME', 'ferreira_costa');

/** Usuario do banco */
define('DB_USER','root');

/** senha do banco */
define('DB_PASSWORD', '123456');

/** nome do host */
define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema */
if(!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__).'../api_jesse_fc');

/** CAMINHO NO SERVER  */
if(!defined('BASEURL'))
    define('BASEURL', '/api_jesse_fc/');

/** caminho do arquivo de banco de dados */
if(!defined('DBAPI'))
    define('DBAPI', ABSPATH.'inc/database.php');

/** Caminhos dos templares header e footer */
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');