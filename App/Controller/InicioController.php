<?php

namespace App\Controller;

final class InicioController extends Controller
{
	
	public static function index() : void
	{	
		parent::isProtected();
		include VIEWS . 'Inicio/index.php';
	}
}