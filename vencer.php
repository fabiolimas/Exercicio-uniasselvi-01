<?php


require "conexao.php";


	$id=$_GET['id'];
$sql="UPDATE listadehabitos set status='V' where id='$id'";
$conecta->query($sql);

header("Location:index.php");


?>