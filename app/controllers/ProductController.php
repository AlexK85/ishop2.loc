<?php

namespace app\controllers;

class ProductController extends AppController
{

    //  для просмотра конкретного товара
    public function viewAction()
    {
        // debug($this->route);
        $alias = $this->route['alias'];
        // далее нам необходима инфа по запрошенному продукту 
        // Обращаемся к таблице 'product'
        // обращаемся к таблице по 'alias = ?' и защищаем от SQL инъекции
        // Будет подставлен в выражение [$alias]
        $product = \R::findOne('product', "alias = ? AND status = '1'", [$alias]);
        // debug($product);
        if (!$product) {
            throw new \Exception('Страница не найдена', 404);
        }

        // хлебные крошки 

        // связанные товары

        // запись в куки запрошенного товара

        // просмотренные товары

        // галерея

        // модификации

        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact($product));

    }

}