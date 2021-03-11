<?php

namespace Controllers;

class PageController extends BaseController
{
    public function __construct(){}

    public function indexAction($pageName)
    {
        echo "Hello! This is page: {$pageName}";
        return true;
    }
}