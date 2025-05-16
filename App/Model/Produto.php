<?php

namespace App\Model;

use App\DAO\ProdutoDAO;

class Produto extends Model
{

	public $id, $codigo, $nome, $valor, $descricao, $quantidade, $ativo, $data_cadastro;

	function save(): Produto
	{
		// Chamada de objeto anônimo:quando não precisa ser criada variável
		return (new ProdutoDAO())->save($this);
	}

	function getById(int $id): ?Produto
	{
		return (new ProdutoDAO())->selectById($id);
	}

	function getAll(string $sort, string $order): array
	{	 
		$this->rows = (new \App\DAO\ProdutoDAO())->selectSorted($sort, $order);
		return $this->rows;
	}

	function getByName(string $name): array
	{
		$this->rows = (new ProdutoDAO())->selectByName($name);
		return $this->rows;
	}

	function update(): Produto
	{
		return (new ProdutoDAO())->update($this);
	}

	function delete(int $id): bool
	{
		return (new ProdutoDAO())->delete($id);
	}
}
