<?php

define('BASE_DIR', __DIR__);
define('IMG_DIR', '/public/img/bg');
define('DB_NAME', BASE_DIR . '/data.db');
define('SITE_URL', 'http://landing-beta.loc');

spl_autoload_register(function($class){

    $class = explode('\\', $class);
    $file = array_pop($class);
    $file = strtolower(implode('/', $class)) . '/' . $file . '.class.php';

    if(strpos($_SERVER['SCRIPT_NAME'], '/admin/') !== false){
        $file = '../'.$file;
    }
    if(is_readable($file)){
        require_once($file);
    }

});