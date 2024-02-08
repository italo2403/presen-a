<?php
include("conexao.php");
	$nome=$_POST['nome'];
	$turma=$_POST['turma'];
	
	
	$sql = "INSERT INTO cadastro (nome, turma, dia_hora) VALUES ('$nome', '$turma', NOW())";
	if(mysqli_query($conexao, $sql)){
		header("Location: index.html");
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}
	
	mysqli_close($conexao);
?>