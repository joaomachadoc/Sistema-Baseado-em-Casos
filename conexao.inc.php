<?php
	define ('DB_HOST','localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_BASE', 'inteligencia');

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS)
	or die('ERRO DE CONEXAO');

	//conexao com banco de dados OKK

	mysqli_select_db($link, DB_BASE)
	or die('Erro de selecao db');

?>
