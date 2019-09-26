<?php 

$hostname = "localhost";
$user = "root";
$password = "";
$database = "controle_de_acesso";

$conexao = mysqli_connect($hostname, $user, $password, $database);

if (!$conexao) {
	die("Algo deu errado na conexão");
}


 ?>