<?php 

	include_once "connection.class.php";
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require	'../PHPMailer/src/SMTP.php';

	class Usuario{

		private $idUsuario;
		private $nomeUsuario;
		private $emailUsuario;
		private $senhaUsuario;
		private $nivelUsuario;

	function cadastrarUsuario(){

		$con = new Connection();

		$sql = "INSERT INTO tblUsuario (`nomeUsuario`, `emailUsuario`, `senhaUsuario`) VALUES ('$this->nomeUsuario', '$this->emailUsuario', '$this->senhaUsuario');";
		mysqli_query($con->con, $sql);
		$id = mysqli_insert_id($con->con);

		//Load composer's autoloader
		//require 'vendor/autoload.php';

		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //Server settings
		    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'caio.vlima@hotmail.com';                 // SMTP username
		    $mail->Password = '516300caio';                           // SMTP password
		    $mail->SMTPSecure = 'tsl';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('caio.vlima@hotmail.com', 'CNClipping');
		    $mail->addAddress($this->emailUsuario, $this->nomeUsuario);     // Add a recipient
		   
		    //Content
		    
		    
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Confirmação e alteração de senha CNClipping';
		    $mail->Body    = '<html>
		    	<b>Olá '.$this->nomeUsuario.'</b></p>
		    	<h3>Você foi cadastrado no sistema de orçamentos da CNClipping para seguir com o procedimento acesse o link a seguir</h3></p>
		    	<a>localhost/cnclipping/View/alterasenha.view.php?id='.$id.'</a></p></p></p>

		    	<h2>Se o link não estiver indo com o clique, apenas copie e cole na barra de endereço do navegador.</h2>

		    	<html>';

		    $mail->send();
		    echo "<script>alert('Um email para a confirmação e a alteração da senha foi enviado! Verifique na sua caixa de entrada e prossiga com o procedimento de cadastramento.')</script>";
		    header("refresh:0;url=../View/index.php");
		} catch (Exception $e) {

			$sql = "DELETE FROM tblUsuario WHERE codigoUsuario = $id;";
			mysqli_query($con->con, $sql);
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}

	}

	function alteraSenha(){

		$con = new Connection();

		$sql = "UPDATE tblUsuario SET senhaUsuario = $this->senhaUsuario WHERE codigoUsuario = $this->idUsuario;";

		if(mysqli_query($con->con, $sql)){

			echo "<script>alert('Senha alterada com sucesso!')</script>";
			header("refresh:0; location:../View/index.php");

		}else{

			header("refresh:0; location:../View/alterasenha.php?id=$this->idUsuario");

		}


	}


	function setNome($nomeUsuario){

		$this->nomeUsuario = $nomeUsuario;

	}

	function getNome(){

		return $this->nomeUsuario;

	}

	function setEmail($emailUsuario){

		$this->emailUsuario = $emailUsuario;

	}

	function getEmail(){

		return $this->emailUsuario;
		
	}

	function setSenha($senhaUsuario){

		$this->senhaUsuario = $senhaUsuario;
		
	}

	function getSenha(){

		return $this->senhaUsuario;

	}

	function setId($idUsuario){

		$this->idUsuario = $idUsuario;
	}





	}
?>