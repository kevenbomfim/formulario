<?php

$servidor = "localhost";
$username = "root";
$password = "";
$database = "cadastro";

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$endereco = $_POST['endereco'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$profissao = $_POST['profissao'];
$pais = $_POST['pais'];

$connection = mysqli_connect($servidor, $username, $password, $database);
// if (!$connection) {
// 		# code...
// 	echo "Não conectou! ";
// } else {
// 		# code...
// 	echo "Conectado ao banco! ";
// }

$sql = mysqli_query($connection,"INSERT INTO informacao(nome, idade, endereco, sexo, telefone, cidade, estado, profissao, pais) VALUES('$nome','$idade','$endereco','$sexo','$telefone','$cidade','$estado','$profissao','$pais')");
// if(!$sql){
// 		# code...
// 	echo "Não inseriu os dados! ";
// }
// else {
// 		# code...
// 	echo "Dados inseridos com sucesso! ";
// }

header('location: formulário.php');

?>