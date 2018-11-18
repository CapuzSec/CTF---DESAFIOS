<?php 

	$bancoDados = "mysql:dbname=ctf;host=localhost";
	$dbUser = "root";
	$dbPass	= "";

	
	//Ve se a conecção foi feita !	
	try {
		$pdo = new 	PDO($bancoDados, $dbUser, $dbPass);
		//echo "Conectou ao Banco";
		//$sql = "SELECT * FROM  linck594_aplicativo";
		//$sql = $pdo-> query($sql);


	} catch (PDOExeption $erro) {
		echo "Falhou: ".$erro-> getMessage();
	}