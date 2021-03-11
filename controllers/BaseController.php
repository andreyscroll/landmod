<?php

namespace Controllers;

abstract class BaseController
{
    protected $modules = null;

    public function __construct()
    {
        $data = file_get_contents(ROOT . '/config/modules.config.dat');
        $this->modules =  unserialize($data);
    }
}