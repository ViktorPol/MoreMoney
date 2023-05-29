<?php

namespace application\controllers;

use application\core\Controller;

class CongratsController extends Controller
{

    public function congratsAction() {

        $vars = [
            'metaTitle' => "Создайте бесплатно интернет-магазин с интегрированными маркетплейсами и продавайте онлайн через MoreMoney",
            'metaDescriprion' => "MoreMoney — единая платформа для всех каналов интернет-продаж: создайте интернет-магазин, продавайте и продвигайте товары через маркетплейсы, соцсети, мессенджеры и рекламные сервисы.",
            'cssArr'  => ['main', 'congrats'],
            'jsArr' => ['main', 'congrats'],
        ];

        $this->view->render($vars);

    }

}