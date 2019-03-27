
 <?php

	include_once "Connection.class.php";
		
	class Cliente{
		
		private $codigoCliente;
		private $nomeCliente;
		private $cpfCliente;
		private $rgCliente;
		private $telcasaCliente;
		private $telcelCliente;
		private $telceldoisCliente;
		private $senhaCliente;
		private $usernameCliente;
		private $emailCliente;
		private $enderecoCliente;
		private $nivelCliente;
		private $cepCliente;
		private $ativacaoCliente;
		private $statusCliente;
		private $datanascCliente;
		private $moradiaCliente;
		private $complementoCliente;
		private $numeroCliente;
		private $problema;
		private $texto;
		
		function adicionarCliente(){
		
		$sql = "insert into tblCliente (`nomeCliente`, `cpfCliente`, `rgCliente`, `telcasaCliente`, `telcelCliente`, `telcelClientedois`, `senhaCliente`, `emailCliente`, `enderecoCliente`, `nivelCliente`, `cepCliente`, `statusCliente`, `moradiaCliente`, `complementoCliente`, `numerocasaCliente`, `datanascCliente`) 
			values 
			('$this->nomeCliente', '$this->cpfCliente', '$this->rgCliente', '$this->telcasaCliente', '$this->telcelCliente', '$this->telceldoisCliente', '$this->senhaCliente', '$this->emailCliente', '$this->enderecoCliente', 0, '$this->cepCliente', 0, '$this->moradiaCliente', '$this->complementoCliente', '$this->numeroCliente', '$this->datanascCliente')";
						
			$con = new Connection();
			
			mysqli_query($con->con, $sql);

			session_start();

			require_once("PHPMailerAutoload.php");
			
			$codigo = mysqli_insert_id($con->con);

			$msg = "<html>";
			$msg.= "<div style='background-color:#F4FA58'>";			
			$msg.= "<h3 style='text-align:center'> Olá $this->nomeCliente </h3></br>";
			$msg.= "</div>";
			$msg.= "<p style='text-align:center'>Você se cadastrou recentemente no site da Lojinha da Feh</p></br>";
			$msg.= "<p style='text-align:center'>Acesse o link abaixo para conseguir confirmar sua conta:</p></br>";
			$msg.= "<p style='text-align:center'><a href='localhost:8080/Lojinha/AtivarConta.php?codigo=$codigo'>Ative clicando aqui!</a></p>";
			$msg.= "</html>";


			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->Host = 'smtp.live.com';
			$mail->CharSet = 'UTF-8';
			$mail->Port = 25;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = "testelojinha@hotmail.com";
			$mail->Password = "tcclojinha123";
            $mail->IsHTML(true);
			
			$mail->setFrom("testelojinha@hotmail.com", "Email de Confirmação");
			$mail->addAddress("$this->emailCliente");
			$mail->Subject = "Lojinha da Feh";
			$mail->Body = $msg;
			$mail->AltBody = $mail->Body;
			
			
			
			if($mail->send()) {
				$_SESSION["success"] = "Mensagem enviada com sucesso";
				echo "<script>alert('Cadastro realizado com sucesso! Verifique seu email para confirmar sua conta')<script/>;";
				header("refresh:0;url=../View/Principal.php");
			} else {
				$_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
				echo "<script>alert('Falha ao realizar cadastro aguarde um tempo e tente novamente!')</script>";
				$sql = "delete from tblCliente where codigoCliente = '$codigo'";
				mysqli_query($con->con, $sql);
				header("refresh:0;url=../View/Principal.php");
			}
			
			header("refresh:0;url=../View/Principal.php");
			die();
			
		}

		function enviaContato(){

			require_once("PHPMailerAutoload.php");

			$msg = "<html>";
			$msg.= "<div>";			
			$msg.= "<h3 style='text-align:center'> Olá Fernanda </h3></br>";
			$msg.= "</div>";
			$msg.= "<p style='text-align:center'>Você recebeu um e-mail de contato de $this->nomeCliente</p></br>";
			$msg.= "<p style='text-align:center'>Problema: $this->problema</p></br>";
			$msg.= "<p style='text-align:center'>Descrição do Problema: $this->texto</p>";
			$msg.= "</html>";

			session_start();
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->Host = 'smtp.live.com';
			$mail->CharSet = 'UTF-8';
			$mail->Port = 25;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = "testelojinha@hotmail.com";
			$mail->Password = "tcclojinha123";
            $mail->IsHTML(true);
            $mail->setFrom("testelojinha@hotmail.com", "Email de Confirmação");
			$mail->addAddress("testelojinha@hotmail.com");
			$mail->Subject = "Lojinha da Feh";
			$mail->Body = $msg;
			$mail->AltBody = $mail->Body;

			if($mail->send()){
				$_SESSION["success"] = "Mensagem enviada com sucesso";
				echo "<script>alert('E-mail enviado com sucesso')<script/>;";
				header("refresh:0;url=../View/Principal.php");
			}else{
				$_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
				echo "<script>alert('Falha ao enviar e-mail de contato!')</script>";
				header("refresh:0;url=../View/Principal.php");
			}


		}

		function retornaCliente(){

			$sql = "select * from tblCliente";

			$con = new Connection();

			$busca = mysqli_query($con->con, $sql);

			return $busca;
		}

		function alteraDados(){

			$con = new Connection();
			
			$sql = "update tblCliente set nomeCliente = '$this->nomeCliente', emailCliente = '$this->emailCliente', telcasaCliente = '$this->telcasaCliente', telcelCliente = '$this->telcelCliente', telcelClientedois = '$this->telceldoisCliente', cpfCliente = '$this->cpfCliente', rgCliente = '$this->rgCliente', cepCliente = '$this->cepCliente', enderecoCliente = '$this->enderecoCliente', moradiaCliente = '$this->moradiaCliente', numerocasaCliente = '$this->numeroCliente'";

			if(mysqli_query($con->con, $sql)){

				echo "<script>alert('Registro alterado com sucesso!')</script>";
				header("refresh:0;url=../View/perfilCliente.php");
			}else{

				echo "<script>alert('Erro ao alterar registro!')</script>";
				header("refresh:0;url=../View/perfilCliente.php");
			}

		}

		function setCodigo($codigoCliente){
			$this->codigoCliente = $codigoCliente;			
		}

		function setNome($nomeCliente){
			$this->nomeCliente = $nomeCliente;			
		}
			
		function getNome(){
			return $this->nomeCliente;
		}
			
		function setCPF($cpfCliente){
			$this->cpfCliente = $cpfCliente;
		}
		
		function getCPF(){
			return $this->cpfCliente;
		}
			
		function setRG($rgCliente){
			$this->rgCliente = $rgCliente;
		}
		
		function getRG(){
			return $this->rgCliente;
		}
			
		function setTelefoneCasa($telcasaCliente){
			$this->telcasaCliente = $telcasaCliente;
		}
		
		function getTelefoneCasa(){
			return $this->telcasaCliente;
		}
		
		function setTelefoneCel1($telcelCliente){
			$this->telcelCliente = $telcelCliente;	
		}
		
		function getTelefoneCel1(){
			return $this->telcelCliente;	
		}
		
		function setTelefoneCel2($telceldoisCliente){
			$this->telceldoisCliente = $telceldoisCliente;
		}
		
		function getTelefoneCel2(){
			return $this->telceldoisCliente;	
		}
		
		function setSenha($senhaCliente){
			$this->senhaCliente = $senhaCliente;	
		}
		
		function getSenha(){
			return $this->senhaCliente;	
		}
		
		function setUsername($usernameCliente){
			$this->usernameCliente = $usernameCliente;	
		}
		
		function getUsername(){
			return $this->usernameCliente;	
		}
		
		function setEmail($emailCliente){
			$this->emailCliente = $emailCliente;
		}
		
		function getEmail(){
			return $this->emailCliente;	
		}
		
		function setEndereco($enderecoCliente){
			$this->enderecoCliente = $enderecoCliente;	
		}
		
		function getEndereco(){
			return $this->enderecoCliente;	
		}
		
		function getNivel(){
			return $this->nivelCliente;	
		}
		
		function setCep($cepCliente){
			$this->cepCliente = $cepCliente;
		}
		
		function getCep(){
			return	$this->cepCliente;
		}
		
		function getAtivacao(){
			return $this->ativacaoCliente;	
		}
		
		function getStatus(){
			return $this->statusCliente;	
		}		
		
		function setDataNasc($datanascCliente){
			$this->datanascCliente = $datanascCliente;	
		}
		
		function getDataNasc(){
			return $this->datanascCliente;	
		}

		function setMoradia($moradiaCliente){
			$this->moradiaCliente = $moradiaCliente;	
		}
		
		function getMoradia(){
			return $this->moradiaCliente;	
		}
		
		function setComplemento($complementoCliente){
			$this->complementoCliente = $complementoCliente;	
		}
		
		function getComplemento(){
			return $this->complementoCliente;	
		}
		
		function setNumero($numeroCliente){
			$this->numeroCliente = $numeroCliente;	
		}
		
		function getNumero(){
			return $this->numeroCliente;	
		}

		function setProblema($problema){
			$this->problema = $problema;			
		}
		function getProblema(){
			return $this->problema;
		}
		function setTexto($texto){
			$this->texto = $texto;
		}
		function getText(){
			return $this->texto;
		}



	}
?>