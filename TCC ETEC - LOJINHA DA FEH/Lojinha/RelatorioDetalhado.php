<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="Admin.css" rel="stylesheet" type="text/css" /> 
<script src="jquery/jquery-1.8.1.min.js"></script>
</head>
<style>

.imgRelatorio{

	width: 700px;
	height: 300px;
	margin-left: 350px;

}

.nomeProduto{

	width: 100%;
	height: 100px;
	font-size: 40px;
	text-align: center;

}

.quantidadeProduto{

	width: 100%;
	text-align: center;
	height: 100px;
	font-size: 30px;

}

.precoProduto{

	width: 100%;
	font-size: 30px;
	text-align: center;
	height: 100px;
	margin-top: -20px;

}

.descricaoProduto{

	width: 100%;
	height: 100px;
	font-size: 30px;
	text-align: center;
	margin-top: -30px;

}

.fornecedorProduto{

	width: 100%;
	height: 100px;
	margin-top: -25px;
	text-align: center;
	font-size: 30px;

}

.imagem{

	width: 500px;
	height: 500px;

}

</style>

<?php 
	
	include_once "Produto.class.php";

	if($_GET['tabela'] == "Produto"){

		$produto = new Produto();

		$produto->relatorioDetalhado($_GET['codigoProduto']);

	}


?>