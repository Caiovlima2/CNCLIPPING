<?php

	include('../Classes/Cliente.class.php');
	
	$cliente = new Cliente();
	
	$cliente->setNome($_POST['nome']);
	
	$cliente->setCPF($_POST['cpf']);
	
	$cliente->setRG($_POST['rg']);
	
	$cliente->setTelefoneCasa($_POST['telefone']);
	
	$cliente->setTelefoneCel1($_POST['celular']);
	
	$cliente->setTelefoneCel2($_POST['celular2']);
	
	$cliente->setMoradia($_POST['moradia']);
	
	$cliente->setSenha(md5($_POST['senha']));
	
	$cliente->setEmail($_POST['email']);
	
	$cliente->setCep($_POST['cep']);
	
	$cliente->setEndereco($_POST['rua']);	
		
	$cliente->setComplemento($_POST['complemento']);
	
	$cliente->setNumero($_POST['numero']);
	
	$cliente->setDataNasc($_POST['datanasc']);
	
	$cliente->adicionarCliente();


?>