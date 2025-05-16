<?php

namespace App\Controller;

use App\Model\Produto;

class ProdutoController extends Controller
{
public static function cadastro(): void
{
	$model = new Produto();

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$erros = [];

		if (empty($_POST['codigo'])) {
			$erros[] = "Código é obrigatório.";
		}
		if (empty($_POST['nome'])) {
			$erros[] = "Nome do produto é obrigatório.";
		}
		if (!is_numeric($_POST['valor']) || $_POST['valor'] < 0) {
			$erros[] = "Valor deve ser um número positivo.";
		}
		if (!is_numeric($_POST['quantidade']) || $_POST['quantidade'] < 0) {
			$erros[] = "Quantidade deve ser um número positivo.";
		}

		if (!empty($erros)) {
			$model->errors = $erros;
		} else {
			$model->id = $_POST['id'];
			$model->codigo = $_POST['codigo'];
			$model->nome = $_POST['nome'];
			$model->descricao = $_POST['desc'];
			$model->quantidade = $_POST['quantidade'];
			$model->valor = $_POST['valor'];
			$model->ativo = isset($_POST['ativo']) ? 1 : 0;

			$model->save();
			header('Location: /produto');
			exit;
		}
	} else {
		if (isset($_GET['id'])) {
			$model = $model->getById((int) $_GET['id']);
		}
	}

	include VIEWS . 'Produto/FormProduto.php';
}


	public static function listar(): void
	{
		$model = new Produto();

		$buscarNome = $_GET['buscarNome'] ?? null;
		$sort = $_GET['sort'] ?? 'nome';
		$order = $_GET['order'] ?? 'asc';

		if (!empty($buscarNome)) {
			$produtos = $model->getByName($buscarNome);
		} else {
			$produtos = $model->getAll($sort, $order);
		}

		parent::render('Produto/listarProduto.php', $model);
	}



	public static function deletar(): void
	{
		parent::isProtected();
		$produto = new Produto();

		try {
			$produto->delete((int) $_GET['id']);
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
		header('Location: /produto');
	}
}
