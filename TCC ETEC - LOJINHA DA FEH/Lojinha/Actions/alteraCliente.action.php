<?php 
	
	session_start();

	include "../Classes/Cliente.class.php";

	$cli = new Cliente();

	$cli->setCodigo($_SESSION['usuario']['codigo']);

	$cli->setNome($_POST['nome']);

	$cli->setEmail($_POST['email']);

	$cli->setTelefoneCasa($_POST['telefone']);

	$cli->setTelefoneCel1($_POST['telefonecel']);

	$cli->setTelefoneCel2($_POST['telefonecel2']);

	$cli->setCPF($_POST['cpf']);

	$cli->setRG($_POST['rg']);

	$cli->setCep($_POST['cep']);

	$cli->setEndereco($_POST['endereco']);

	$cli->setMoradia($_POST['moradia']);

	$cli->setNumero($_POST['numerocasa']);

	$cli->alteraDados();

?>