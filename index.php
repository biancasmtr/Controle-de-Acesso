<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home</title>
</head>
<body>
	<div class="form-style-6">
		<section>
			<h1>Sistema de Controle de Acesso</h1>
			<form method="POST" action="processa.php" >
				<label>Nome:
					<input type="text" name="nome" id="nome" class="inp" maxlength="50" required autofocus="">
				</label>

				<br>

				<label>Data:
					<input type="date" value="<?php echo date("Y-m-d");?>" name="data" id="data" class="inp" readonly>
				</label>
				
				<br>
				
				<label>Horario:
					<input type="text" value="<?php date_default_timezone_set('America/Sao_Paulo');
					echo date("H:i:s"); ?>" name="horario" id="horario" class="inp" readonly>
				</label>

				<div id="bt">
					<input type="submit" name="" value="Inserir Acesso">
				</div>
			</form>
		</section>
		
		<br>
		<hr>
		<br>

		<section>
			<div id="bt">
				<a href="consulta.php"><input type="submit" name="" value="Consultar Acessos"></a>
			</div>
		</section>
	</div>

</body>
</html>