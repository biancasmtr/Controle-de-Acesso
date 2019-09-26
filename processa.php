<?php 

	include_once('conexao.php');


	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
	$horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);

 	$sql = "INSERT INTO usuarios (nome, data, horario) values ('$nome','$data','$horario')";

 	$salvar = mysqli_query($conexao, $sql);

 	$linhas = mysqli_affected_rows($conexao);

	mysqli_close($conexao);

 ?>


<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="estilo.css">
 	<title>Cadastro de Usuários</title>
 </head>
 <body>
 	<section>

 		<?php 

 			if ($linhas == 1) {
 				print"<h1>Cadastro Efetuado com sucesso!</h1>";
 			} else {
 				echo "Erro ao cadastrar: ".error_reporting(E_ERROR | E_WARNING | E_PARSE);
 			}

 		 ?>
 		  <!-- <form class="form-style-6"> -->
	 		<a href="index.php">
	 		 	<input type="submit" value="Voltar">
	 		</a>
	 		<a href="consulta.php">
	 			<input type="submit" value="Cosultar Acessos">
	 		</a>
 		 </form>
 	</section>
 </body>
 </html>