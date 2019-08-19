<?php

	$host="localhost";
	$usuario="root";
	$senha="";
	$banco="etec";
	
	$conexao= new MySQLi("$host", "$usuario", "$senha", "$banco");

	if ($conexao->connect_error) {
		echo "Erro de conexão";

	}else{
		echo "conexão bem sucedida";
	}


?>