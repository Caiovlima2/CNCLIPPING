<?php

	include_once "../Classes/Produto.class.php";
	
	$produto = new Produto;
	
	$produto->setId($_POST['codigoProduto']);
	
	$produto->setQuantidade($_POST['quantidadeProduto']);
	
	$produto->aumentaEstoque();


?>