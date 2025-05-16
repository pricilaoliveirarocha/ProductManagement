<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="/App/Assets/css/global.css" rel="stylesheet">

	<title>Cadastro/Edição de Produtos</title>
</head>

<body>
	<?php include 'App/View/Includes/navbar.php'; ?>
	<div class="px-5">


		<h1>Cadastro/Edição de Produto</h1>
		<form method="POST" action="/produto/cadastro">
			<input name="id" type="hidden" value="<?= $model->id ?>" />
			<div class="mb-3 col-2">
				<?php
				$telaEditar = strpos($_SERVER['REQUEST_URI'], '/produto/editar') !== false;
				$bloqueioCampo = ($telaEditar ? 'readonly' : '');
				?>
				<label for="codigo" class="form-label">Código</label>
				<input title="Atenção: o código não poderá ser editado." type="number" value="<?= $model->codigo ?>" class="form-control" id="codigo" name="codigo" <?= $bloqueioCampo ?>>
			</div>

			<div class="mb-3 col-6">
				<label for="nome" class="form-label">Produto</label>
				<input type="text" value="<?= htmlspecialchars($model->nome) ?>" class="form-control" id="nome" name="nome" required>
			</div>

			<div class="mb-3 col-6">
				<label for="desc" class="form-label">Descrição</label>
				<input type="text" value="<?= htmlspecialchars($model->descricao ?? '') ?>" class="form-control" id="desc" name="desc">
			</div>

			<div class="mb-3 col-2">
				<label for="valor" class="form-label">Valor</label>
				<input type="text" value="<?= $model->valor ?>" class="form-control" id="valor" name="valor" required>
			</div>

			<div class="mb-3 col-2">
				<label for="quantidade" class="form-label">Quantidade</label>
				<input type="number" value="<?= $model->quantidade ?>" class="form-control" id="quantidade" name="quantidade">
			</div>
			<button type="submit" class="btn btn-success">Salvar</button>
		</form>
	</div>

</body>

</html>