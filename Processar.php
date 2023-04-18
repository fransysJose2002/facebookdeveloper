<?php
$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "Formulario";

$conexao = new_mysqli($dbHost,$dbUsername,$dbPassword,$dbname,);

if ($conexao->connect_errno()) {
	echo "Erro na conexao";
	# code...
}
else()
 {
	echo "Conexão feita com sucesso";
	# code...
}


?>