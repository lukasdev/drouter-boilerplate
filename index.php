<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', __DIR__ . DS);

$composer_autoload = ROOT_PATH . 'vendor' . DS . 'autoload.php';

if (! file_exists($composer_autoload)) {
    die('run composer install');
}

require $composer_autoload;

use DRouter\App;

$app = new App;
$app->render->setViewsFolder(ROOT_PATH . 'public' . DS . 'views' . DS);

require ROOT_PATH . 'app' . DS . 'dependencies.php';
require ROOT_PATH . 'app' . DS . 'routes.php';

$app->run();
