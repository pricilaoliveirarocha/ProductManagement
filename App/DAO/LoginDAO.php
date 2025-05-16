<?php

namespace App\DAO;

use App\Model\Login;

class LoginDAO extends DAO
{
	public function auth(Login $model) : ?Login
	{
		$sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
		$stmt = parent::$conn->prepare($sql);

		$stmt->bindValue(1, $model->email);
		$stmt->bindValue(2, $model->senha);
		$stmt->execute();

		$model = $stmt->fetchObject("App\Model\Login");
		return is_object($model) ? $model : null;
	}
}
