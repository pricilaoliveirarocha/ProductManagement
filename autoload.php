<?php

spl_autoload_register(function ($nomeClasse) {
	$arquivo = BASE_DIR . '/'  . $nomeClasse . '.php';
	$arquivo = str_replace('\\', '/', $arquivo);

	if (file_exists($arquivo))
		include $arquivo;
	else
		throw new Exception("Arquivo não encontrado");
});
