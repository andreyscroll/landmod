<?php

// Автозагрузчики классов

spl_autoload_register(function($class){
    $file = $class . '.php';

    if(is_readable($file)){
        require_once($file);
    }
});
