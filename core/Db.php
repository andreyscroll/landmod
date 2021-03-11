<?php

namespace Core;

use \PDO;

class Db
{
    const DB_NAME = ROOT . '/database/data.db';

    public static function getConn()
    {
        $setting = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        $db = new PDO('sqlite:' . self::DB_NAME, null, null, $setting);

        return $db;
    }

}