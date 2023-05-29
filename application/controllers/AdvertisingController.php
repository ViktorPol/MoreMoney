<?php

namespace application\controllers;

use application\core\Controller;

class AdvertisingController extends Controller
{

    public function advertisingAction() {

        $vars = [
            'metaTitle' => "Автоматизация рекламы OZON с гибкой настройкой и управлением конкурентной ставкой",
            'metaDescriprion' => "Автоматизация рекламы OZON с гибкой настройкой и управлением конкурентной ставкой",
            'cssArr'  => ['main', 'advertising'],
            'jsArr' => ['main', 'advertising'],
        ];

        $this->view->render($vars);

    }

}