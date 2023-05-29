<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{

    public function indexAction() {

        $vars = [
            'metaTitle' => "Создайте бесплатно интернет-магазин с интегрированными маркетплейсами и продавайте онлайн через MoreMoney",
            'metaDescriprion' => "MoreMoney — единая платформа для всех каналов интернет-продаж: создайте интернет-магазин, продавайте и продвигайте товары через маркетплейсы, соцсети, мессенджеры и рекламные сервисы.",
            'cssArr'  => ['main'],
            'jsArr' => ['main', 'index',/* 'carousel',*/ 'masonry', 'ticker'],
            // 'headerAnchors' => [['name' => 'Решения', 'anchor' => 'union-block' ],['name' => 'Платформа', 'anchor' => 'platform-block' ]],
        ];

        $this->view->render($vars);

    }

}