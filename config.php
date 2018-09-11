<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/');

// HTTPS
define('HTTPS_SERVER', 'https://localhost/');

// DIR
define('SITE_ROOT', dirname(__FILE__).'/');
define('DIR_BASE', realpath($_SERVER['DOCUMENT_ROOT']) . '/');
define('DIR_SYSTEM', SITE_ROOT . 'system/');
define('DIR_RESOURCE', SITE_ROOT . 'assets/');
define('DIR_THEME', DIR_RESOURCE . 'view/');
define('DIR_IMAGE', DIR_RESOURCE . 'images/');
define('DIR_DOWNLOAD', DIR_SYSTEM . 'download/');
define('DIR_UPLOAD', DIR_SYSTEM . 'upload/');
define('DIR_DATABASE', DIR_SYSTEM . 'db/');
define('DIR_ACCOUNT', DIR_SYSTEM . 'account/');
?>