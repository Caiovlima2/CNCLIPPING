<?php

include('Produto.class.php');

$produto = new Produto();

$produto->setId($_GET['codigoProduto']);

$produto->excluirProduto();


?>