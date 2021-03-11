<?php

namespace Controllers;

use Models\{Hero, Seo, About, Faq, Benefits};

class AdminController extends BaseController
{
    /**
     * Общие настройки
     */
    public function indexAction()
    {
        $gnrlSetting = Seo::getData();

        view('admin/header', ['title' => 'Общие настройки']);
        view('admin/index', [
                'moduleList' => $this->modules,
                'gnrlSetting' => $gnrlSetting
            ]);
        view('admin/footer');

        return true;
    }

    /**
     * Страница настроек блока Hero
     */
    public function heroAction()
    {
        $obj = new Hero();
        $data = $obj->getData();

        view('admin/header', ['title' => 'Hero']);
        view('admin/hero', ['data' => $data]);
        view('admin/footer');

        return true;
    }

    /**
     * Страница настроек блока About
     */
    public function aboutAction()
    {
        $obj = new About();
        $data = $obj->getData();

        view('admin/header', ['title' => 'About']);
        view('admin/about', ['data' => $data]);
        view('admin/footer');

        return true;
    }

    /**
     * Страница настроек блока Faq
     */
    public function faqAction()
    {
        $obj = new Faq();
        $data = $obj->getData();

        view('admin/header', ['title' => 'FAQ']);
        view('admin/faq', ['data' => $data]);
        view('admin/footer');

        return true;
    }

    /**
     * Страница настроек блока Benefits
     */
    public function benefitsAction()
    {
        $obj = new Benefits();
        $data = $obj->getData();

        $setting = rebuildingArray($data['setting']);

        view('admin/header', ['title' => 'Преимущества']);
        view('admin/benefits', [
            'data' => $data,
            'setting' => $setting
            ]);
        view('admin/footer');

        return true;
    }

    /**
     * 
     * Экшены обработки форм
     * 
     */
    /**
     * Сохранение настроек списка модулей
     */
    public function savemodulelistAction()
    {
        // Приводим к нулю все значения
        foreach($this->modules as $key => $val){
            $this->modules[$key] = 0;
        }
        // Присваиваем новые
        foreach($_POST as $key => $val){
            $this->modules[$key] = $val;
        }
        // Сохраняем новые значения
        file_put_contents(ROOT . '/config/modules.config.dat', serialize($this->modules));
        header('Location: /admin/');

        return true;
    }

    /**
     * Сохранение общих настроек
     */
    public function saveseoAction()
    {
        $result = Seo::setData($_POST);
        if($result){
            header('Location: /admin/');
            return true;
        } else { return false; }
    }

    /**
     * Сохранение настроек блока Hero
     */
    public function saveheroAction()
    {
        $obj = new Hero();
        $result = $obj->setData($_POST);

        if($result){
            header('Location: /admin/hero/');
            return true;
        } else { return false; }
    }

    /**
     * Сохранение настроек блока About
     */
    public function saveaboutAction()
    {
        $obj = new About();
        $result = $obj->setData($_POST);

        if($result){
            header('Location: /admin/about/');
            return true;
        } else { return false; }
    }

    /**
     * Добавление вопроса-ответа в блок Faq
     */
    public function savefaqAction()
    {
        $obj = new Faq();
        $result = $obj->setData($_POST);

        if($result){
            header('Location: /admin/faq/');
            return true;
        } else { return false; }
    }
    /**
     * Удаление вопроса-ответа по id из faq
     */
    public function deletefaqAction($id)
    {
        $obj = new Faq();
        $result = $obj->deleteData($id);

        if($result){
            header('Location: /admin/faq/');
            return true;
        } else { return false; }
    }

    /**
     * Сохранение преимущества (benefit) по id
     */
    public function savebenefitAction()
    {
        $obj = new Benefits();
        $result = $obj->saveData($_POST);

        if($result){
            header('Location: /admin/benefits/');
            return true;
        } else { return false; }
    }

    /**
     * Сохранение общих настроек блока Benefits
     */
    public function savesettingbenefitsAction()
    {
        $obj = new Benefits();
        $result = $obj->setData($_POST);

        if($result){
            header('Location: /admin/benefits/');
            return true;
        } else { return false; }
    }

}