<?php
define('SITE_ROOT', __DIR__);
define('WWW_ROOT', SITE_ROOT . '/www');
define('LIB_DIR', SITE_ROOT . '/lib');

define('MODELS_DIR', SITE_ROOT . '/models');
define('CONTROLLERS_DIR', SITE_ROOT . '/controllers');
define('VIEWS_DIR', SITE_ROOT . '/views');

define('DB_HOST','localhost');
define('DB_USER','root'); // eampleev
define('DB_PASS',''); // password
define('DB_NAME','photoGallery'); // test_db // photoGallery // test1

define('ROOT_TITLE', 'Фотогалерея');

require_once (LIB_DIR . '/core.php');
require_once (LIB_DIR . '/db.php');
