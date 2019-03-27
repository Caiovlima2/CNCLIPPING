<?php	
	
	include_once "../Classes/Venda.class.php";
	
	$con = new Connection();
	
	$codigo = $_GET['codigo'];
	
	$status = $_GET['status'] + 1;
	
	$sql = "update tblCompra set statusCompra = $status where codigoCompra = $codigo";
	
	if(mysqli_query($con->con, $sql)){
		
		echo "<script>alert('Status atualizado com sucesso')</script>";	
		header("refresh:0;url=../View/listaVenda.php");
	
	}else{
	
		echo "<script>alert('Erro ao atualizar status!')</script>";	
		header("refresh:0;url=../View/listaVenda.php");
		
	}
?>	