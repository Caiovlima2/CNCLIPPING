<?php


	include_once "../Classes/Produto.class.php";
	
	$Produto = new Produto();

	$Produto->setId($_POST['codigoProduto']);	

	$Produto->setNome($_POST['nomeProduto']);
	
	$Produto->setDescricao($_POST['descricaoProduto']);
	
	$preco = $_POST['precoProduto'];
	
	$preco = str_replace(",",".",$preco,$i);
	
	$Produto->setPreco($preco);
	
	$Produto->setQuantidade($_POST['quantidadeProduto']);
	
	if(!empty($_FILES['imagemProduto']['name'])){


	$Produto->setImagemNova($_FILES['imagemProduto']);
	
	}
	
	$Produto->setTipo($_POST['tipoProduto']);

	$Produto->setEstoque($_POST['estoque']);

	$Produto->alterarProduto();
	

?>