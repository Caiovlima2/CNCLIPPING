<?php
	
	include_once "Connection.class.php";

	class Login{

		private $email;
		private $senha;

		function Logar(){

			session_start();
			$con = new Connection();
			$sql = mysqli_query($con->con, "select * from tblCliente where emailCliente = '$this->email' and senhaCliente = '$this->senha';");

			$rows = mysqli_num_rows($sql);

			if($rows == 1){
				$user = mysqli_fetch_assoc($sql);
				$_SESSION['usuario']['codigo'] = $user['codigoCliente'];
				$_SESSION['usuario']['nome'] = $user['nomeCliente'];
				$_SESSION['usuario']['nivel'] = $user['nivelCliente'];
				$_SESSION['usuario']['logado'] = "Sim";

				if($user['nivelCliente'] == 1){

					echo "<script>alert('Seja Bem Vindo Administrador!')</script>";
					header("refresh:0;url=../View/Admin.php");
				
				}else{
					echo "<script>alert('Login realizado com sucesso!')</script>";
					header("refresh:0;url=../View/Principal.php");
					
				}
			}else{

				echo "<script>alert('Usuário e/ou senha inválido(s)')</script>";
				header("refresh:0;url=../View/Principal.php");
				return false;
			}

		}

		function Deslogar(){

			session_destroy();
			header("location:../View/Principal.php");
		}





	function setEmail($email){

		$this->email = $email;

	}

	function getEmail(){

		return $this->email;
	}

	function setSenha($senha){

		$this->senha = $senha;
	}

	function getSenha(){

		return $this->senha;
	}

}

?>