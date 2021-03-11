<?php

namespace Models;

use Core\Db;

abstract class Model
{
    protected $conn;

    public function __construct()
    {
        $this->conn = Db::getConn();
    }
}