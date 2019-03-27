<?php

	include_once "../Classes/Login.class.php";

	$log = new Login();

	$log->setEmail($_POST["emailCliente"]);

	$log->setSenha(md5($_POST["senhaCliente"]));

	$log->Logar();



?>