<?php 

	include_once('conexao.php');

	$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

	$sql = "select * from usuarios where nome like '%$filtro%' order by cod";

	$consulta = mysqli_query($conexao, $sql);
	$registros = mysqli_num_rows($consulta);

	mysqli_close($conexao);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="table.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Consultar Registros</title>
</head>
<body>
	<section>
		<br>

			<a href="index.php">
				<input type="submit" name="" value="Cadastrar Novo"></a>

			<form method="get" class="form-style-6">
				Filtrar por nome: <input type="text" name="filtro" id="bt" required autofpcus>
				<input type="submit" class="btn" value="Pesquisar">	
				<table  cellspacing=0 class="zui-table">
				<thead>
					<tr>
						<th>Código</th>
						<th>Nome</th>
						<th>Data</th>
						<th>Horário</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while ($exibirRegistros = mysqli_fetch_array($consulta)) {
							$cod = $exibirRegistros[0];
							$nome = $exibirRegistros[1];
							$data = $exibirRegistros[2];
							$horario = $exibirRegistros[3]; ?>

					<tr>
						<td> <?php print "$cod<br>"; ?> </td>
						<td> <?php print "$nome<br>"; ?> </td>
						<td> <?php print "$data<br>"; ?> </td>
						<td> <?php print "$horario<br>"; ?> </td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
			</form>
			

	</section>
</body>
</html>