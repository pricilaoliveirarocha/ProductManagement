<?php

namespace App\Controller;

use App\Model\Login;

class LoginController extends Controller
{
	public static function index(): void
	{

		$erro = '';
		$model = new Login();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$model->email = $_POST['email'];
			$model->senha = $_POST['senha'];

			$model = $model->login();
			if ($model !== null) {

				$_SESSION['loginUsuario'] = $model;
				if (isset($_POST['lembrete'])) {
					setcookie(
						name : 'lembrete_login_usuario',
						value : $model->email,
						expires_or_options : time()+60*60*24*30, // 30 dias
					);
				}
				header('Location: /');
			} else {
				$erro = 'Usuário ou senha inválidos';
			}
		}

		if (isset($_COOKIE['lembrete_login_usuario']))
			$model->email = $_COOKIE['lembrete_login_usuario'];

		include VIEWS . 'Login/FormLogin.php';
	}

	public static function logout(): void
	{
		session_destroy();
		header('Location: /login');
	}
}
