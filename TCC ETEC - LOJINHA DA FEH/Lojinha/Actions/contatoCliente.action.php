<?php 

	include "../Classes/Cliente.class.php";

	$cli = new Cliente();

	$cli->setNome($_POST['nome']);

	$cli->setEmail($_POST['email']);

	$cli->setProblema($_POST['problema']);

	$cli->setTexto($_POST['texto']);

	$cli->enviaContato();


?>