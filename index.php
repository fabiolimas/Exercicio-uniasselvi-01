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
<div class="center">
	<h1>Lista de Hábitos</h1>

	Cadastre aqui os hábitos  que você tem que vencer para melhorar sua vida!<br><br>

	<table id="tabela">
		<tr>
			<td><b>Hábito</td>
			<td><b>Ações</td>
			</tr>

	<?php

	


	$sql="SELECT * FROM  listadehabitos where status='A'";
	$sql=$conecta->query($sql);

	if($sql->rowCount($sql)>0){

		foreach($sql ->fetchAll() as $dados){

			
			
			echo"<tr id='dados'>";
			echo"<td>".$dados['habito']."</td>";
			echo"<td><a href='vencer.php?id=".$dados['id']."'>Vencer</a> - <a href='desistir.php?id=".$dados['id']."'>Desistir</a></td>";
			echo"</tr>";
				
		}

	}else{

			echo"Você não possui hábitos cadastrados<br> 
			Começe já a mudar sua vida!<br><br>";
			
		}



	?>

<a href='novo.php' ><button class="btn">Cadastrar Hábito</button></a><br><br>

</table>
</div>
<script type="text/javascript">
	
	var dados=document.querySelector('#dados');
	var tabela=document.querySelector('#tabela');

	function mostraTabela(){



	if(dados==""|| dados== null){

		tabela.style.display="none";


	}else{
		tabela.style.display="";
	}
}
mostraTabela();

</script>
</body>
</html>