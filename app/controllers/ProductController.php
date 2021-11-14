<?php

namespace app\controllers;

class ProductController extends AppController
{

    //  для просмотра конкретного товара
    public function viewAction()
    {
        debug($this->route);
    }

}