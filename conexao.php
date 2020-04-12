<?php 

	$bancoDados = "mysql:dbname=ctf;host=localhost";
	$dbUser = "root";
	$dbPass	= "";

	
	//Ve se a conecção foi feita !	
	try {
		$pdo = new 	PDO($bancoDados, $dbUser, $dbPass); 

	} catch (PDOExeption $erro) {
		echo "Falhou: ".$erro-> getMessage();
	}
