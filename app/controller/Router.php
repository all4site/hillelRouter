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
			dump(self::$router['controller']);

		} else {
			http_response_code('404');
			include __DIR__ . '/../public/404.php';
		}
	}

	public static function match()
	{
		self::$url = $_SERVER['REQUEST_URI'];
		$url = trim(self::$url, '/');

		foreach (self::getRouters() as $key => $value) {
			if (preg_match("#$key#i", $url, $matches)) {
				foreach ($matches as $k => $v) {
					if (is_string($k)) {
						$router[$k] = $v;
					} elseif ($k == '') {
						$router = $value;
					}
				}
				if (!isset($router['action'])){
					$router['action'] = 'index';
				}
				dump($router);
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

}