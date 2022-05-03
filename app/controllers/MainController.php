<?php


namespace app\controllers;

use RedBeanPHP\R;

class MainController extends AppController
{

    public function indexAction(){
        $posts = R::findAll('test');
        $post = R::findOne('test', 'id = ?', [2]);
        $this->setMeta("Главная страница" , "Описание", "Ключевые слова");
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane',];
        $this->set(compact('name', 'age', 'names', 'posts'));
    }


}