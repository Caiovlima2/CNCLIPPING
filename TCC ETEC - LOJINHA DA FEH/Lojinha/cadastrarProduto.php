<?php

	include ('Produto.class.php');
	
	$produto = new Produto();
	
	$produto->setNome($_POST['nomeProduto']);
	
	$produto->setImagem($_FILES['fotoProduto']);
	
	$produto->setPreco($_POST['precoProduto']);
	
	$produto->setQuantidade($_POST['quantidadeProduto']);
	
	$produto->setDescricao($_POST['descricaoProduto']);
	
	$produto->setFornecedor($_POST['fornecedorProduto']);
	
	$produto->setTipo($_POST['tipoProduto']);
	
	$produto->adicionarProduto();


?>