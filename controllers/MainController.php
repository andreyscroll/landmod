<?php

namespace Controllers;

use Models\Seo;

class MainController extends BaseController
{

    public function indexAction()
    {
        // Подгрузка Seo данных
        $seo = Seo::getData();
        view('main/header', ['seo' => $seo]);

        // Подгружаем включенные в админке модули
        foreach($this->modules as $module => $enabled)
        {
            if($enabled)
            {
                $module = ucfirst($module);
                $fullpath_module = "Models\\{$module}";
                $el = new $fullpath_module();
                $data = $el->getData();

                view("main/{$module}", ['data' => $data]);
            }
        }

        view('main/footer', ['seo' => $seo]);

        return true;

    }

}