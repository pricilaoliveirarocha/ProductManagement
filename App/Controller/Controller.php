<?php

namespace App\Controller;
use App\Model\Produto;
use App\Model\Model;

abstract class Controller
{
	final protected static function isProtected()
	{
		if (!isset($_SESSION['loginUsuario']))
			header("Location: /login");
	}

	final protected static function render(string $view, Model $model) : void {
		include VIEWS . "$view";
	}
}
