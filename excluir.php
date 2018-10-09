<?php

	require_once('conexao.php');

	$codigo = $_GET['codigo'];

	$objDB = new db();
	$link = $objDB->conecta_db();

	$sql = " DELETE FROM produtos WHERE id = '$codigo' ";

	mysqli_query($link, $sql);

?>
<script>
	alert("Produto excluído com sucesso !!!");
	location.href='index.php';
</script>
