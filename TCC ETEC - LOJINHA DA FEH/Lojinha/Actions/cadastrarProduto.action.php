<?php

	include ('../Classes/Produto.class.php');
	
	$produto = new Produto();
	
	$produto->setNome($_POST['nomeProduto']);
	
	$produto->setImagem($_FILES['imagemProduto']);
	
	$preco = $_POST['precoProduto'];
	
	$preco = str_replace(",",".",$preco,$i);
	
	$produto->setPreco($preco);
	
	$produto->setQuantidade($_POST['quantidadeProduto']);
	
	$produto->setDescricao($_POST['descricaoProduto']);
	
	$produto->setTipo($_POST['tipoProduto']);

	$produto->setEstoque($_POST['estoque']);
	
	$produto->adicionarProduto();

?>