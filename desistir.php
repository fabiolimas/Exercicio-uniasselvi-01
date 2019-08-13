<?php
	
	require "conexao.php";

	$id=$_GET['id'];

	$sql="DELETE FROM listadehabitos where id='$id'";
	$conecta->query($sql);

	header("Location:index.php");



?>