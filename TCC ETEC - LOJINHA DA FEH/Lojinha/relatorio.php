<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Relatório</title>
</head>

<body>

<?php

	include('connect.php');
	
	$busca = mysql_query("select * from tblEstoque where codigoProduto = 24");
	
	$linha = mysql_fetch_array($busca);
	
	echo "<table width='100%' border='1'>
  <tr>
    <th scope='col'>Código do Produto: $linha[codigoProduto]</th>
  </tr>
</table>";
	echo "<table width='100%' border='1'>
  <tr>
    <th scope='col'>Nome do Produto: $linha[nomeProduto]</th>
  </tr>
</table>";
	echo "<table width='100%' border='1'>
  <tr>
    <th scope='col'>Quantidade do Produto: $linha[quantidadeProduto]</th>
  </tr>
</table>";
	echo "<table width='100%' border='1'>
  <tr>
    <th scope='col'>Fornecedor: $linha[fornecedorProduto]</th>
  </tr>
</table>";

	echo "<table width='100%' border='1'>
  <tr>
    <th scope='col'>Tipo de Produto: $linha[tipoProduto]</th>
  </tr>
</table>";

	echo "<table width='100%' border='1'>
  <tr>
    <th scope='col'>Preço Produto: $linha[precoProduto]</th>
  </tr>
</table>";

	echo "<table width='100%' border='1'>
  <tr>
    <th scope='col'>Descrição: $linha[descricaoProduto]</th>
  </tr>
</table>";

	echo "<table width='100%' border='1'>
  <tr>
    <th scope='col'><img src=$linha[imagemProduto] style=width:200px;	></th>
  </tr>
</table>";
	
	

?>

</body>
</html>