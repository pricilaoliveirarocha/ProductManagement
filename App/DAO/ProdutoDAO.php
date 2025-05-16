<?php

namespace App\DAO;

use App\Model\Produto;

class ProdutoDAO extends DAO
{
	public function __construct()
	{
		parent::__construct();
	}

	public function save(Produto $model): Produto
	{
		$id = $_GET['id'] ?? null;
		return ($model->id == null) ? $this->insert($model) : $this->update($model);
	}

	public function insert(Produto $model): Produto
	{
		$sql = "INSERT INTO produtos (nome, valor, descricao, quantidade, codigo, ativo) VALUES(?, ?, ?, ?, ?, ?)";
		$stmt = parent::$conn->prepare($sql);

		$stmt->bindValue(1, $model->nome);
		$stmt->bindValue(2, $model->valor);
		$stmt->bindValue(3, $model->descricao);
		$stmt->bindValue(4, $model->quantidade);
		$stmt->bindValue(5, $model->codigo);
		$stmt->bindValue(6, ($model->quantidade > 0) ? $model->ativo = '1' : '0');
		$stmt->execute();

		$model->id = parent::$conn->lastInsertId();
		return $model;
	}

	public function update(Produto $model): Produto
	{
		$sql = "UPDATE produtos SET nome = ?, valor = ?, quantidade = ?, descricao = ?, ativo = ? WHERE id = ?";
		$stmt = parent::$conn->prepare($sql);

		$stmt->bindValue(1, $model->nome);
		$stmt->bindValue(2, $model->valor);
		$stmt->bindValue(3, $model->quantidade);
		$stmt->bindValue(4, $model->descricao);
		$stmt->bindValue(5, ($model->quantidade > 0) ? $model->ativo = 1 : 0);
		$stmt->bindValue(6, $model->id);
		$stmt->execute();

		return $model;
	}

	public function selectById(int $id): ?Produto
	{
		$sql = "SELECT * FROM produtos WHERE id = ?";
		$stmt = parent::$conn->prepare($sql);

		$stmt->bindValue(1, $id);
		$stmt->execute();
		return $stmt->fetchObject("App\Model\Produto");
	}

	public function selectSorted(string $sort, string $order): array
	{
		$allowed = ['nome', 'valor', 'quantidade'];
		if (!in_array($sort, $allowed)) {
			$sort = 'nome';
		}
		$order = strtolower($order) === 'desc' ? 'DESC' : 'ASC';

		$sql = "SELECT * FROM produtos ORDER BY $sort $order";
		$stmt = parent::$conn->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\Produto");
	}


	public function selectByName(string $name): array
	{
		$sql = "SELECT * FROM produtos WHERE nome LIKE ? ORDER BY nome";
		$stmt = parent::$conn->prepare($sql);

		$stmt->bindValue(1, '%' . $name . '%');
		$stmt->execute();

		return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\Produto");
	}


	public function delete(int $id): bool
	{

		if ($this->selectById($id)->ativo) {
			$_SESSION['erro'] = 'Não é possível deletar um produto ativo.';
			return false;
		}
		$sql = "DELETE FROM produtos WHERE id = ?";
		$stmt = parent::$conn->prepare($sql);

		$stmt->bindValue(1, $id);
		return $stmt->execute();
	}
}
