<?php
	require "conexao.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Habitos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div id="interface">
<div class="center">
	<h1>Novo Hábito</h1>

	<form method="post" action="#">
		Nome:<input type="text" name="nome"><br><br>
		<input type="submit" name="" value="Criar" class="btnvencer">
	</form>
	
	<?php

	if(isset($_POST['nome']) && !empty($_POST['nome'])){

		$nome=$_POST['nome'];

		$sql="INSERT INTO `listadehabitos` (id, habito, status)values(NULL,'$nome','A')";
		$conecta->query($sql);

		header("Location: index.php");


	}else{

		echo "";
	}


	


	?>


</div>
</div>

</body>
</html>