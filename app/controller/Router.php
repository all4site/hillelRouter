<?php


namespace App\controller;


class Router
{
	protected static $routers = [];
	protected static $router = [];
	protected static $way = __DIR__ . '/routers.php';
	protected static $url;

	public static function dispatch()
	{
		if (self::match()) {
			echo 'asdas';
		} else {
			http_response_code('404');
			include __DIR__ . '/../public/404.php';
		}
	}

	public static function match()
	{
		self::$url = $_SERVER['REQUEST_URI'];
		$router = self::$router;
		$routers = self::getRouters();
		$url = trim(self::$url, '/');

		foreach ($routers as $key => $value) {
			if (preg_match("#$key#i", $url, $matches)) {
				foreach ($matches as $k => $v) {
					if (is_string($k)) {
						$router[$k] = $v;
					} elseif ($k == '') {
						$router = $value;
					}
				}
				dump($router);
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

}