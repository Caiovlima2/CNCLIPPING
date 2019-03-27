<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
</html>

<?php

	include "../Classes/Connection.class.php";
	
	$con = new Connection();
	
	if(!isset($_GET['acao'])){
	
		echo "<script>alert('Não existe ação aqui, seleciona uma função!')</script>";
		header("refresh:0;url=../View/Admin.php");
		
	}else if($_GET['acao'] == "ativar"){
	
		$codigo = $_GET['codigo'];
		
		$sql = "UPDATE tblestoque SET ativacaoProduto = 1 WHERE codigoProduto = " . $codigo;
		
		if(!mysqli_query($con->con, $sql)){
		
			echo "<script>alert('Erro ao ativar produto, tente novamente!')</script>";
			header("refresh:0;url=../View/listaProduto.php");
			
		}else{
		
			echo "<script>alert('Produto ativado com sucesso!')</script>";
			header("refresh:0;url=../View/listaProduto.php");
						
		}
		
	}else if($_GET['acao'] == "desativar"){
	
		$codigo = $_GET['codigo'];
		
		$sql = "UPDATE tblestoque SET ativacaoProduto = 0 WHERE codigoProduto = " . $codigo;
		
		if(!mysqli_query($con->con, $sql)){
		
			echo "<script>alert('Erro ao desativar produto, tente novamente!')</script>";
			header("refresh:0;url=../View/listaProduto.php");
			
		}else{
		
			echo "<script>alert('Produto desativado com sucesso!')</script>";
			header("refresh:0;url=../View/listaProduto.php");
						
		}
	}

?>