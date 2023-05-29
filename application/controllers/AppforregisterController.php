<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class AppforregisterController extends Controller
{

	public function appforregisterAction()
	{

		if (!empty($_POST) && !empty($_POST['phone'])) {

			if (!$this->model->checkPhone($_POST['phone'])) {
				$this->view->message('application-failed', 'Данный номер телефона уже зарегистрирован');
			}

			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$mail = $_POST['mail'];
			$tarif = $_POST['tarif'];

			$result = $this->model->createUser($name, $phone, $mail, $tarif);


			$this->view->message('application-success', 'Ваша заявка успешно зарегистрирована!');
		}

		$vars = [
			'metaTitle' => "Создайте бесплатно интернет-магазин с интегрированными маркетплейсами и продавайте онлайн через MoreMoney",
			'metaDescriprion' => "MoreMoney — единая платформа для всех каналов интернет-продаж: создайте интернет-магазин, продавайте и продвигайте товары через маркетплейсы, соцсети, мессенджеры и рекламные сервисы.",
			'cssArr'  => ['main', 'appforregister'],
			'jsArr' => ['main', 'appforregister'],
		];

		$this->view->render($vars);
	}
}
