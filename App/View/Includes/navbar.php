<link href="/App/Assets/css/global.css" rel="stylesheet">

<nav class="px-4 navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="/produto">Meus Produtos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="/produto/cadastro"><i class="bi bi-plus"></i> Novo</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/produto/logout">Sair</a>
				</li>


			</ul>
			<form class="d-flex" action="/produto" method="GET">
				<input class="form-control me-2" type="search" name="buscarNome" placeholder="Insira um produto" aria-label="Search" />
				<button class="btn btn-outline-success" type="submit">Buscar</button>
			</form>

		</div>
	</div>
</nav>