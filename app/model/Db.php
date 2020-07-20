<?php


namespace App\model;


use PDO;

class Db
{
	public static function Mysql()
	{
		return new PDO(DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME, DB_NAME, DB_PASS, [
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		]);
	}
}