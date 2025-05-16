<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="/App/Assets/css/global.css" rel="stylesheet">
	<script src="/App/Assets/js/login.js"></script>
	<title>Gestão de Produtos</title>
</head>

<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">
	<div class="shadow p-4" style="min-width: 350px;">
		<h1 class="mb-4 text-center">Login de Usuário</h1>
		<form method="POST" action="/login">

			<?= $erro ?>

			<div class="mb-3">
				<label for="email" class="form-label">E-mail:</label>
				<input type="email" value="<?= $model->email ?? null ?>" class="form-control" name="email" id="email">
			</div>
			<div class="mb-3">
				<label for="senha" class="form-label">Senha:</label>
				<div class="input-group">
					<input type="password" class="form-control" name="senha" id="senha">
					<button type="button" class="btn" id="toggleSenha" tabindex="-1">
						👁️
					</button>
				</div>
			</div>
			<div class="mb-3">
				<input type="checkbox" name="lembrete" id="lembrete">
				<label for="lembrete" class="form-label">Lembre de mim</label>
			</div>

			<button type="submit" class="btn btn-success">Login</button>
		</form>
	</div>


</html>