<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', __DIR__);
require_once(ROOT . '/config/functions.php');
require_once(ROOT . '/config/config.php');
require_once(ROOT . '/core/Db.php');

$router = new Core\Router();
$router->run();
