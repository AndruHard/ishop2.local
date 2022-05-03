<?php


namespace app\controllers;


class MainController extends AppController
{


    public function indexAction(){
//        echo __METHOD__;
        $this->setMeta("Главная страница" , "Описание", "Ключевые слова");
        $this->set(['name' => 'Andru', 'age' => 30]);
    }


}