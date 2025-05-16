<?php

namespace App\Model;

use App\DAO\LoginDAO;

class Login
{
	public $email, $senha;

	public function login() : ? Login
	{
		return (new LoginDAO())->auth($this);
	}
}
