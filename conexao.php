<?php

	$dadosServidor="mysql:dbname=bd_uniasselvi;host=localhost";
	$user="root";
	$pass='s1imagine01';

	try{

		$conecta=new PDO($dadosServidor, $user, $pass);

		


	}catch(PDOException $e){

		echo "Erro: ".$e->getMessage();

	}

?>