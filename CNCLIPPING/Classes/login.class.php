<?php
	
	include_once "connection.class.php";

	class Login{

		private $email;
		private $senha;

		function Logar(){

			session_start();
			$con = new Connection();
			$sql = mysqli_query($con->con, "select * from tblUsuario where emailUsuario = '$this->email' and senhaUsuario = '$this->senha';");

			$rows = mysqli_num_rows($sql);

			if($rows == 1){
				$user = mysqli_fetch_assoc($sql);
				$_SESSION['usuario']['codigo'] = $user['codigoUsuario'];
				$_SESSION['usuario']['nome'] = $user['nomeUsuario'];
				$_SESSION['usuario']['nivel'] = $user['nivelUsuario'];
				$_SESSION['usuario']['logado'] = "Sim";

				echo "<script>alert('Bem Vindo ".$_SESSION['usuario']['nome']."')</script>";
				header("refresh:0;url=../View/index.php");
			}

		}

		function Deslogar(){

			session_destroy();
			header("location:../View/index.php");
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