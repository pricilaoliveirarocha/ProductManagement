<?php

use App\Controller\{
	ProdutoController,
	InicioController,
	LoginController
};

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
	case '/':
		InicioController::index();
		break;
	case '/produto':
		ProdutoController::listar();
		break;
	case '/produto/':
		ProdutoController::listar();
		break;
	case '/produto/cadastro':
		ProdutoController::cadastro();
		break;
	case '/produto/editar':
		ProdutoController::cadastro();
		break;
	case '/produto/deletar':
		ProdutoController::deletar();
		break;

	case '/login':
		LoginController::index();
		break;
	case '/produto/logout':
		LoginController::logout();
		break;
	default:
		http_response_code(404);
		require_once __DIR__ . '/App/View/404.php';
		break;
}
