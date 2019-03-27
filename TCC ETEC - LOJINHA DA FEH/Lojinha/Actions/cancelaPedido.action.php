<?php 

	include_once "../Classes/Connection.class.php";

	$con = new Connection();

	$codigo = $_POST['codigo'];

	$sql = "update tblcompra set statusCompra = 0";

	if(mysqli_query($con->con, $sql)){

		echo "<script>alert('Pedido cancelado com sucesso!')</script>";
		header("refresh:0;url=../View/meusPedidos.php");

	}else{

		echo "<script>alert('Erro ao cancelar pedido, tente novamente!')</script>";
		header("refresh:0;url=../View/meusPedidos.php");


	}


?>