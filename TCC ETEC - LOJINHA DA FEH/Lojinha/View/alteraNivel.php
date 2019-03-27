<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar Nível</title>
</head>

<body>

<?php 
	
	include_once "../Classes/Connection.class.php";
	$con = new Connection();
	
	if(isset($_GET['codigo'])){
		
		if(isset($_GET['acao'])){
			
		$action = $_GET['acao'];
		$cod = $_GET['codigo'];
		
		if($action == "Aumentar"){
		
			$sql = "update tblCliente set nivelCliente = " . 1 . " where codigoCliente = " . $cod . ";";
			
			if(mysqli_query($con->con, $sql)){
				
				echo "<script>alert('Esse usuário foi promovido a Administrador');</script>";
				header("refresh:0;url=listaCliente.php");
			}else{
			
				echo "<script>alert('Erro ao promover usuário, aguarde e tente novamente.');</script>";
				header("refresh:0;url=listaCliente.php");	
				
			}
		}
			
			if($action == "Diminuir"){
			
				$sql = "update tblCliente set NivelCliente = " . 0 . " where codigoCliente = " . $cod . ";";
				
				if(mysqli_query($con->con, $sql)){
					
					echo "<script>alert('Administrador  rebaixado a um usuário normal!');</script>";
					header("refresh:0;url=listaCliente.php");
									
				}else{
				
				echo "<script>alert('Erro ao rebaixar administrador a usuário, aguarde e tente novamente.');</script>";
				header("refresh:0;url=listaCliente.php");	
				
					}
				}		
				
			
			
		}	
			
	}else{
				
				echo "<script>alert('Não há dados aqui, selecione uma função');</script>";
				header("refresh:0;url=Admin.php");
		
	


	}
?>




</body>
</html>