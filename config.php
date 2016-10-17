<?php
define('SITE_ROOT', __DIR__);
define('WWW_ROOT', SITE_ROOT . '/www');
define('LIB_DIR', SITE_ROOT . '/lib');

define('MODEL_DIR', SITE_ROOT . '/models');
define('VIEW_DIR', SITE_ROOT . '/views');
define('CONTROLLER_DIR', SITE_ROOT . '/controllers');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'test');

require_once (LIB_DIR . '/core.php');
require_once (LIB_DIR . '/db.php');