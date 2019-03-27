<?php


	include('Produto.class.php');
	
	$Produto = new Produto();

	$Produto->setId($_POST['codigoProduto']);	

	$Produto->setNome($_POST['nomeProduto']);
	
	$Produto->setDescricao($_POST['descricaoProduto']);
	
	@$Produto->setPreco(number_format($_POST['precoProduto']),0,'.',',');

	$Produto->setFornecedor($_POST['fornecedorProduto']);
	
	$Produto->setQuantidade($_POST['quantidadeProduto']);
	
	if(!empty($_FILES['fotoProduto']['name'])){
	
	$Produto->setImagemNova($_FILES['fotoProduto']);
	
	}
	
	$Produto->setTipo($_POST['tipoProduto']);
	
	$Produto->alterarProduto();
	

?>