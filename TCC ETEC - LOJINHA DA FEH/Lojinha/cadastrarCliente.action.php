<?php

	include('\Classes\Cliente.class.php');
	
	$cliente = new Cliente();
	
	$cliente->setNome($_POST['nomeCliente']);
	
	$cliente->setCPF($_POST['cpfCliente']);
	
	$cliente->setRG($_POST['rgCliente']);
	
	$cliente->setTelefoneCasa($_POST['telefoneCliente']);
	
	$cliente->setTelefoneCel1($_POST['telefonecelCliente']);
	
	$cliente->setTelefoneCel2($_POST['telefonecel2Cliente']);
	
	$cliente->setMoradia($_POST['tipoCasa']);
	
	$cliente->setSenha(md5($_POST['senhaCliente']));
	
	$cliente->setEmail($_POST['emailCliente']);
	
	$cliente->setCep($_POST['cepCliente']);
	
	$cliente->setEndereco($_POST['enderecoCliente']);	
		
	$cliente->setComplemento($_POST['complementoCliente']);
	
	$cliente->setNumero($_POST['numeroCasa']);
	
	$cliente->setDataNasc($_POST['datanascCliente']);
	
	$cliente->adicionarCliente();


?>