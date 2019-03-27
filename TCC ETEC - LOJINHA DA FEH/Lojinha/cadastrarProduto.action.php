<?php

	include ('Produto.class.php');
	
	$produto = new Produto();
	
	$produto->setNome($_POST['nomeProduto']);
	
	$produto->setImagem($_FILES['fotoProduto']);
	
	$produto->setPreco(number_format($_POST['precoProduto'],2,',','.'));
	
	$produto->setQuantidade($_POST['quantidadeProduto']);
	
	$produto->setDescricao($_POST['descricaoProduto']);
	
	$produto->setFornecedor($_POST['fornecedorProduto']);
	
	$produto->setTipo($_POST['tipoProduto']);
	
	$produto->adicionarProduto();


?>