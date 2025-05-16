<?php

namespace App\DAO;

use \PDO;

abstract class DAO extends PDO
{
	protected static $conn = null;

	public function __construct()
	{
		$dsn = 'mysql:host=localhost; dbname=sistema_produtos';

		if (self::$conn == null) {

			self::$conn = new PDO(
				$dsn,
				$_ENV['db']['user'],
				$_ENV['db']['pass'],
				[
					PDO::ATTR_PERSISTENT => true,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				]
			);
		}
	}
}
