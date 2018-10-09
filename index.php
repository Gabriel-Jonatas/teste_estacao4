<?php
	
	require_once 'conexao.php';

	$objDB = new db();
	$link = $objDB->conecta_db();

	$sql = " SELECT * FROM produtos ";

	$consulta = mysqli_query($link, $sql);

	//print_r($consulta->fetch_array());

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row m-5">
			<div class="col-12">
				<a href="cadastro.php" class="btn btn-primary float-right">Adicionar Produto</a>
			</div>
		</div>
		<div class="row m-5">
			<div class="col-12">
				<table class="table">
					<tr>
						<td>ID</td>
						<td>Produto</td>
						<td>Descrição</td>
						<td>Preço</td>
						<td></td>
					</tr>
					<?php while($dado = $consulta->fetch_array()){ ?>
					<tr>
						<td><?php echo $dado["id"]; ?></td>
						<td><?php echo $dado["nome"]; ?></td>
						<td><?php echo $dado["descricao"]; ?></td>
						<td><?php echo $dado["preco"]; ?></td>
						<td>
							<a href="editar.php?codigo=<?php echo $dado["id"]; ?>" class="btn btn-warning">Editar</a>
							<a href="excluir.php?codigo=<?php echo $dado["id"]; ?>" class="btn btn-danger">X</a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>