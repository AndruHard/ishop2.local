<?php


namespace app\controllers;


class ProductController extends AppController
{
    public function viewAction(){
        $alias = $this->route['alias'];
        $product = \R::findOne('product', "alias = ? AND status = '1'", [$alias]);
        if(!$product){
            throw new \ErrorException('Page Not found', 404);
        }
        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product'));

    }



}