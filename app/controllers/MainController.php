<?php


namespace app\controllers;

use ishop\Cache;
use RedBeanPHP\R;

class MainController extends AppController
{

    public function indexAction(){
        $brands = R::find('brand', 'LIMIT 3');
        $this->setMeta("Главная страница" , "Описание", "Ключевые слова");
        $this->set(compact('brands'));
    }


}