<?php


namespace App\model;


class DbData extends Db
{

	public static function getAllUsers()
	{
		$query = 'SELECT * from user';
		$sql = self::Mysql()->prepare($query);
		$sql->execute();
		return $sql->fetchAll();
	}
}