<?php

	require_once('conexao.php');

	$nome = $_POST['nNome'];
	$descricao = $_POST['nDescricao'];
	$preco = $_POST['nPreco'];

	$objDB = new db();
	$link = $objDB->conecta_db();

	$sql = " insert into produtos(nome, descricao, preco) values('$nome', '$descricao', '$preco') ";

	mysqli_query($link, $sql);

?>
<script>
	alert("Produto cadastrado com sucesso !!!");
	location.href='index.php';
</script>