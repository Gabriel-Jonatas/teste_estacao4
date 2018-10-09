<?php
	
	require_once 'conexao.php';

	$codigo = $_GET['codigo'];

	$objDB = new db();
	$link = $objDB->conecta_db();

	$sql = " SELECT * FROM produtos WHERE id = '$codigo' ";

	$consulta = mysqli_query($link, $sql);
	$linha = $consulta->fetch_array();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Alterar Produto</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row m-5">
			<div class="col-12">
				<h1>Alterar Produto</h1><br>
				<form method="post" action="enviar_alteracao.php?codigo=<?php echo $codigo; ?>">
					<div class="form-group">
						Nome
						<input type="text" name="nNome" class="form-control" value="<?php echo $linha['nome']; ?>">
					</div>
					<div class="form-group">
						Descrição
						<textarea name="nDescricao" class="form-control"><?php echo $linha['descricao']; ?></textarea>
					</div>
					<div class="form-group">
						Preço
						<input type="text" name="nPreco" class="form-control" value="<?php echo $linha['preco']; ?>">
					</div>
					<button type="submit" class="btn btn-primary">Salvar</button>
					<a href="index.php" class="btn btn-secundary">Cancelar</a>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>