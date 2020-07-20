<?php


namespace App\controller;

class Router
{
	protected static $routers = [];
	protected static $router = [];
	protected static $way = __DIR__ . '/routers.php';

	public static function dispatch()
	{
		if (self::match()) {
			$controller = __NAMESPACE__ . DIRECTORY_SEPARATOR . self::$router['controller'];
			$method = self::$router['action'];
			self::ClassExist($controller, $method);
		} else {
			http_response_code('404');
			include __DIR__ . '/../public/404.php';
		}
	}

	public static function match()
	{
		$url = trim($_SERVER['REQUEST_URI'], '/');

		foreach (self::getRouters() as $key => $value) {

			if (preg_match("#$key#i", $url, $matches)) {

				$router = self::matchExist($matches, $value);

				self::$router = $router;
				return true;
			}
		}
		return false;
	}

	private static function getRouters()
	{
		require_once self::$way;
		return self::$routers = $MyRouters;
	}

	public static function matchExist($matches, $value)
	{

		foreach ($matches as $k => $v) {

			if (is_string($k)) {
				$router[$k] = $v;
			} elseif ($k == '') {
				$router = $value;
			}

		}
		if (!isset($router['action'])) {
			$router['action'] = 'index';
		}

		return $router;
	}

	private static function ClassExist($controller, $method)
	{
		if (class_exists($controller)) {
			$cObj = new $controller;
			if (method_exists($cObj, $method)) {
				$cObj->$method();
			}
		} else {
			echo 'Класс не найден';
		}
	}

}