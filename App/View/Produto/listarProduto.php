<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
	<title>Lista de Produtos</title>
</head>

<body>
	<?php include 'App/View/Includes/navbar.php'; ?>

	<div class="px-5">
		<h1 class="h1">Listagem de Produtos</h1>
		<div class="table-responsive">
			<table class="table table-hover align-middle">
				<thead class="table-light">
					<tr>
						<th scope="col"># Código</th>
						<th scope="col">
							<a href="?sort=nome&order=asc" class="text-decoration-none text-dark">▲</a>
							<a href="?sort=nome&order=desc" class="text-decoration-none text-dark">▼</a>
							Produto
						</th>
						<th scope="col">
							<a href="?sort=valor&order=asc" class="text-decoration-none text-dark">▲</a>
							<a href="?sort=valor&order=desc" class="text-decoration-none text-dark">▼</a>
							Valor
						</th>
						<th scope="col">
							<a href="?sort=quantidade&order=asc" class="text-decoration-none text-dark">▲</a>
							<a href="?sort=quantidade&order=desc" class="text-decoration-none text-dark">▼</a>
							Quantidade
						</th>
						<th scope="col">Descrição</th>
						<th scope="col">Ativo</th>
						<th scope="col">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($model->rows as $prod) : ?>
						<tr>
							<td><?= $prod->codigo ?></td>
							<td><?= htmlspecialchars($prod->nome) ?></td>
							<td>R$ <?= number_format($prod->valor, 2, ',', '.') ?></td>
							<td><?= $prod->quantidade ?></td>
							<td><?= htmlspecialchars($prod->descricao) ?></td>
							<td>
								<span class="badge <?= $prod->ativo ? 'bg-success' : 'bg-secondary' ?>">
									<?= $prod->ativo ? 'Sim' : 'Não' ?>
								</span>
							</td>
							<td>
								<a href="/produto/editar?id=<?= $prod->id ?>" class="btn btn-sm btn-warning">
									<i class="bi bi-pencil"></i>
								</a>
								<a href="/produto/deletar?id=<?= $prod->id ?>"
									class="<?= $prod->ativo ? 'btn btn-sm disabled btn-secondary' : 'btn btn-sm btn-danger' ?>">
									<?= $prod->ativo ? 'Excluir' : 'Excluir' ?>
									<i class="bi bi-trash"></i>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

</body>

</html>