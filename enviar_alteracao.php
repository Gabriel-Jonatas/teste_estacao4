<?php

	require_once 'conexao.php';

	$codigo = $_GET['codigo'];
	$nome = $_POST['nNome'];
	$descricao = $_POST['nDescricao'];
	$preco = $_POST['nPreco'];


	$objDB = new db();
	$link = $objDB->conecta_db();

	$sql = " UPDATE produtos SET nome = '$nome', descricao = '$descricao', preco = '$preco' WHERE id = '$codigo' ";

	mysqli_query($link, $sql);

?>
<script>
	alert('Alterações salvas !!!');
	location.href='index.php';
</script>