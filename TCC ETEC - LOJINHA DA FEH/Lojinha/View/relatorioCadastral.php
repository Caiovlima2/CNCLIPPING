<?php
	include_once "../Classes/Connection.class.php";
	$con = new Connection();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../jquery/jquery-1.8.1.min.js"></script>
<title>Relatório Cadastral</title>
<script src="../jquery-3.1.1.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>

<?php if($_GET['tipo'] == "Estoque"){ ?>

<div style="width:300px;margin:0 auto;"><img src="../imagens/LogoLojinha.png" class="img-responsive" alt="Responsive image" style="width:300px;"></div>
<div class="table-responsive">
<table class="table table-striped">
  <tbody>
  	
    	<th class="active text-center"> Código do Produto </th>
		
        <th class="active text-center"> Nome do Produto </th>
        
        <th class="active text-center"> Quantidade em Estoque </th>
          
  </tbody>
  	
    	<?php 
		
			$sql = "select * from tblEstoque";
			
			$busca = mysqli_query($con->con, $sql);

				
				while($linha = mysqli_fetch_assoc($busca)){
				echo "<tr class=table table-striped>
								
						<td class=text-center> $linha[codigoProduto] </td>
						<td class=text-center> $linha[nomeProduto] </td>";
						if($linha['quantidadeProduto'] < $linha['estoquemin']){ echo "
						<td class=text-center style=color:red> $linha[quantidadeProduto] </td>";}
						 else{ echo " <td class=text-center> $linha[quantidadeProduto] </td>
				</tr>
				";	
						}
				}
		$date = date('m/d/Y h:i:s a', time());
		
		?>
  		
</table>
<a href="Admin.php"><button type="button" class="btn btn-danger" style="float:left; margin-left:80%;">Voltar</button></a> 
<?php echo "<h5 class=text-right>Data de Emissão: $date<h5>";?>
</div>
<?php } ?>


<?php if($_GET['tipo'] == "Produto" ) { ?>

	<div style="width:300px;margin:0 auto;"><img src="../imagens/LogoLojinha.png" class="img-responsive" alt="Responsive image" style="width:300px;"></div>
	<div class="table-responsive">
	<table class="table table-striped">
  		<tbody>
  	
    		<th class="active text-center"> Código do Produto </th>
		
        	<th class="active text-center"> Nome do Produto </th>
        
       		<th class="active text-center"> Quantidade em Estoque </th>
        
        	<th class="active text-center"> Tipo do Produto </th>
            
            <th class="active text-center"> Ativação do Produto </th>
          
          	<th class="active text-center"> Preço do Produto </th>
          
  	</tbody>
  	
    	<?php 
		
			$sql = "select * from tblEstoque";
			
			$busca = mysqli_query($con->con, $sql);

				
				while($linha = mysqli_fetch_assoc($busca)){
				echo "<tr class=table table-striped>
								
						<td class=text-center> $linha[codigoProduto] </td>
						<td class=text-center> $linha[nomeProduto] </td>";
						if($linha['quantidadeProduto'] < 100){ echo "
						<td class=text-center style=color:red> $linha[quantidadeProduto] </td>";}
						else{ echo " <td class=text-center> $linha[quantidadeProduto] </td>";}
						 
						 echo " <td class=text-center> $linha[tipoProduto] </td>
						 		".//<td class=text-center> $linha[ativacaoProduto] </td>
								"<td class=text-center> </td>
								 <td class=text-center> ".number_format($linha['precoProduto'],2,'.',',')." </td>
				</tr>
				";	
						
				}
		$date = date('m/d/Y h:i:s a', time());
		
		?>
  		
</table>
<a href="Admin.php"><button type="button" class="btn btn-danger" style="float:left; margin-left:80%;">Voltar</button></a> 
<?php echo "<h5 class=text-right>Data de Emissão: $date<h5>";?>
</div>


<?php } ?>

<?php if($_GET['tipo'] == "Cliente" ) { ?>

	<div style="width:300px;margin:0 auto;"><img src="../imagens/LogoLojinha.png" class="img-responsive" alt="Responsive image" style="width:300px;"></div>
	<div class="table-responsive">
	<table class="table table-striped">
  		<tbody>
  	
    		<th class="active text-center"> Código do Cliente </th>
		
        	<th class="active text-center"> Nome do Cliente </th>
        	
            <th class="active text-center"> CPF do Cliente </th>
        	
            <th class="active text-center"> RG do Cliente </th>
            
       		<th class="active text-center"> E-mail do Cliente </th>
        
        	<th class="active text-center"> Número de Telefone do Cliente </th>
            
            <th class="active text-center"> Status do Cliente </th>
          
          	<th class="active text-center"> Endereço do Cliente </th>
            
            <th class="active text-center"> Data de Nascimento do Cliente </th>
          
          	
  	</tbody>
  	
    	<?php 
		
			$sql = "select * from tblCliente";
			
			$busca = mysqli_query($con->con, $sql);

				
				while($linha = mysqli_fetch_assoc($busca)){
				echo "<tr class=table table-striped>
								
						<td class=text-center> $linha[codigoCliente] </td>
						<td class=text-center> $linha[nomeCliente] </td>
						<td class=text-center> $linha[cpfCliente] </td>
						<td class=text-center> $linha[rgCliente] </td>
						<td class=text-center> $linha[emailCliente] </td>
						<td class=text-center> $linha[telcasaCliente] </td>
						";if($linha['statusCliente'] == 0){ 
						
							echo"<td class=text-center> Inativo </td>"; 
						
						}else if($linha['statusCliente'] == 1){
						
							echo "<td class=text-center> Ativo </td>";
						
						} echo "
						<td class=text-center> $linha[enderecoCliente] </td>
						<td class=text-center> ". date("d/m/Y ", strtotime($linha['datanascCliente'])) ."</td>
				</tr>
				";	
						
				}
		$date = date('d/m//Y h:i:s a', time());
		
		?>
  		
</table>
<button type="button" class="btn btn-danger" style="float:left; margin-left:80%;">Voltar</button></a> 
<?php echo "<h5 class=text-right>Data de Emissão: $date<h5>";?>
</div>


<?php }else if($_GET['tipo'] == "Venda"){ ?>
	<div style="width:300px;margin:0 auto;"><img src="../imagens/LogoLojinha.png" class="img-responsive" alt="Responsive image" style="width:300px;"></div>
	<div>
		<table class="table table-striped">
		<tbody>
			
		<th class="active">Código da Compra</th>
		<th class="active">Valor da Compra</th>
		<th class="active">Data da Compra</th>
		<th class="active">Quantidade de Itens Comprados</th>
		<th class="active">Código do Cliente</th>
		<th class="active">Status da Compra</th>

		</tbody>
	<?php $venda = "select * from tblCompra"; 

	$venda = mysqli_query($con->con, $venda);

	while($vendas = mysqli_fetch_assoc($venda)){
							$date = new DateTime($vendas['dataCompra']);
                               $status = "";
    
                            if($vendas['statusCompra'] == 1){
                                
                              $status = "Aguardando Pagamento";  
                                
                            }else if($vendas['statusCompra'] == 2){
                                  
                              $status = "Separando pedido";
                                  
                            }else if($vendas['statusCompra'] == 3){
                                  
                              $status = "Pedido Enviado";
                                    
                            }else if($vendas['statusCompra'] == 4){
                                  
                              $status = "Pedido Entregue";
                                  
                            }else if($vendas['statusCompra'] == 0){
                                    
                              $status = "Pedido Cancelado";
                                    
                            }   
	?>
	<tr>

		<td><?php echo $vendas['codigoCompra']; ?></td>
		<td><?php echo number_format($vendas['valorCompra'],2,',','.') ?></td>
		<td><?php echo date_format($date, 'd/m/T H:i:s') ?></td>
		<td><?php echo $vendas['quantidadeCompra'] ?></td>
		<td><?php echo $vendas['codCliente'] ?></td>
		<td><?php echo  $status ?></td>
	</tr>

	<?php } ?>

	</table>
</div>
<?php }else if($_GET['tipo'] == "VendasMes"){ ?>

	<div style="width:300px;margin:0 auto;"><img src="../imagens/LogoLojinha.png" class="img-responsive" alt="Responsive image" style="width:300px;"></div>
	<div>	

	<table class="table table-striped">
	<tbody>
		
	<th class="active">Código do Produto</th>
	<th class="active">Nome do Produto</th>
	<th class="active">Quantidade Vendida</th>


	</tbody>
	<?php

	$ano = date('Y');


	$mes = date('m');
	 $sql = "SELECT i.codProduto, COUNT(i.codProduto) as quantidade, e.nomeProduto FROM tblitemcompra i INNER JOIN tblestoque e ON i.codProduto = e.codigoProduto INNER JOIN tblCompra c on c.codigoCompra = i.codCompra WHERE c.dataCompra BETWEEN '$ano-$mes-01' AND '$ano-$mes-30' GROUP BY i.codProduto ORDER BY COUNT(i.codProduto) DESC LIMIT 5";

	 $compras = mysqli_query($con->con, $sql);
 	
 	while ($compra = mysqli_fetch_assoc($compras)) {?>

	 <tr>
	 <td><?php echo $compra['codProduto']  ?></td>
	 <td><?php echo $compra['nomeProduto']  ?></td>
	 <td><?php echo $compra['quantidade']  ?></td>
	 </tr> 

	 <?php } ?>

	 </table>
<?php }else if($_GET['tipo'] == "VendasAno"){ ?>

	<div style="width:300px;margin:0 auto;"><img src="../imagens/LogoLojinha.png" class="img-responsive" alt="Responsive image" style="width:300px;"></div>
	<div>	

	<table class="table table-striped">
	<tbody>
		
	<th class="active">Código do Produto</th>
	<th class="active">Nome do Produto</th>
	<th class="active">Quantidade Vendida</th>


	</tbody>
	<?php

	$ano = date('Y');

	 $sql = "SELECT i.codProduto, COUNT(i.codProduto) as quantidade, e.nomeProduto FROM tblitemcompra i INNER JOIN tblestoque e ON i.codProduto = e.codigoProduto INNER JOIN tblCompra c on c.codigoCompra = i.codCompra WHERE c.dataCompra BETWEEN '$ano-01-01' AND '$ano-12-30' GROUP BY i.codProduto ORDER BY COUNT(i.codProduto) DESC LIMIT 5";

	 $compras = mysqli_query($con->con, $sql);
 	
 	while ($compra = mysqli_fetch_assoc($compras)) {?>

	 <tr>
	 <td><?php echo $compra['codProduto']  ?></td>
	 <td><?php echo $compra['nomeProduto']  ?></td>
	 <td><?php echo $compra['quantidade']  ?></td>
	 </tr> 

	 <?php } ?>

	 </table>



<?php } ?>
</body>
</html>