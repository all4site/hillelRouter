<?php


namespace App\controller;


use App\model\DbData;

class User
{

	public function add()
	{
		$method = __FUNCTION__;
		$action = 'Добавить';
		$title = 'Добавить пользователя';
		ob_start();
		include ROOT . '/app/public/user.php';
		echo ob_get_clean();
	}

	public function delete()
	{
		$method = __FUNCTION__;
		$action = 'Удалить';
		$title = 'Удалить пользователя';
		ob_start();
		include ROOT . '/app/public/user.php';
		echo ob_get_clean();
	}

	public function index()
	{
		$method = __FUNCTION__;
		$title = 'Пользователи';
		$data = DbData::getAllUsers();
		ob_start();
		include ROOT . '/app/public/user.php';
		echo ob_get_clean();
	}


}