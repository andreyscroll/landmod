<?php

/**
 * Загрузка представления
 */
function view($name, $data = [])
{
    extract($data);
    $name = strtolower($name);
    return include_once(ROOT.'/views/'.$name.'.tpl');
}

/**
 * Функция отладки
 */
function d($value = null, $die = 1)
{
    echo '<div style="background-color: #f8f8f8; border: 1px solid #ebebeb; padding: 30px; margin: 50px; font-size: 1.1em;"><h1>Debug:</h1><pre>';
    print_r($value);
    echo '</pre></div>';

    if($die) die;
}

/**
 * Перестроение массива
 * 
 * [field] = key, [value] = val => [key] = val
 */
function rebuildingArray($arr)
{
    $result = [];
    foreach($arr as $i){
        $result[$i['field']] = $i['value'];
    }
    return $result;
}