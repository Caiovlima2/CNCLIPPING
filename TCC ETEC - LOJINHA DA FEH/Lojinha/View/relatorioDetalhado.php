<?php include_once "../Classes/Connection.class.php"; $con = new Connection();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../jquery/jquery-1.8.1.min.js"></script>
<title>Relatório Detalhado</title>
<script src="../jquery-3.1.1.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>

  <?php if(isset($_GET['tipo'])){ ?>

    <?php if($_GET['tipo'] == "produto"){ 

      $sql = "select * from tblEstoque where codigoProduto = " . $_GET['codigo'];

      $busca = mysqli_query($con->con,$sql);

      $busca = mysqli_fetch_assoc($busca);
      
      echo "";

      ?>

      <div style="width: 300px; margin: 0 auto;"><img src="../imagens/LogoLojinha.png" class="img-responsive" alt="Responsive image" style="width:300px;"></div>

      <img src= <?php echo "$busca[imagemProduto]"; ?> class="img-responsive img-thumbnail center-block" alt="Responsive image" style="width: 250px; margin: 0 auto;">
      <form>
      <div class="form-group">
        <strong><p class="text-center" style="margin-top: 10px;">Código:</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value="<?php echo "$busca[codigoProduto]" ?>" disabled />
      </div>

      <div class="form-group">
        <strong><p class="text-center" style="margin-top: 10px;">Nome:</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value="<?php echo "$busca[nomeProduto]" ?>" disabled />
      </div>

      <div class="form-group">
        <strong><p class="text-center">Preço:</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value="R$ <?php echo number_format($busca['precoProduto'],2,',','.') ?>" disabled>
      </div>

      <div class="form-group">
        <strong><p class="text-center">Quantidade em Estoque:</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value="<?php echo "$busca[quantidadeProduto]" ?>" disabled>
      </div>

      <div class="form-group">
        <strong><p class="text-center">Tipo do Produto:</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value="<?php echo "$busca[tipoProduto]" ?>" disabled>
      </div>
        

      <div class="form-group">
        <strong><p class="text-center">Ativação do Produto:</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value="<?php if($busca['ativacaoProduto'] == 1){ echo "Ativo";}else{echo "Inativo";} ?>" disabled>
      </div>

      <div class="form-group">
        <strong><p class="text-center">Descrição do Produto:</p></strong>
        <textarea type="text" class="form-control text-center" id="exampleInputEmail1" disabled><?php echo "$busca[descricaoProduto]" ?></textarea>
      </div>

    </form>
    <strong><p class="text-right">Data de emissão:</p></strong>
    <strong><p class="text-right"><?php date_default_timezone_set('America/Sao_Paulo'); $date = date('d/m/Y H:i:s', time()); echo $date; ?></p></strong>
    <?php }else if($_GET['tipo'] == "venda"){ 
	
	$busca = "select * from tblCompra where codigoCompra = $_GET[codigo]";
	
	$busca = mysqli_query($con->con, $busca);
		
	$busca = mysqli_fetch_assoc($busca);
	
	$busca2 = "select * from tblItemCompra where codCliente = $busca[codCliente] and codCompra = $busca[codigoCompra] order by codProduto";
		
	$busca2 = mysqli_query($con->con, $busca2);
		
	$status = "";
	  
	  if($busca['statusCompra'] == 1){
			
			$status = "Aguardando Pagamento";  
		  
		}else if($busca['statusCompra'] == 2){
				
			$status = "Separando pedido";
				
			}else if($busca['statusCompra'] == 3){
				
				$status = "Pedido Enviado";
					
			}else if($busca['statusCompra'] == 4){
				
				$status = "Pedido Entregue";
				
				}else if($busca['statusCompra'] == 0){
					
					$status = "Pedido Cancelado";
					
					}
	?>
		
    <div style="width: 300px; margin: 0 auto;"><img src="../imagens/LogoLojinha.png" class="img-responsive" alt="Responsive image" style="width:300px;"></div>
	 <form>
      <div class="form-group">
        <strong><p class="text-center" style="margin-top: 10px;">Código:</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value="<?php echo "$busca[codigoCompra]" ?>" disabled />
      </div>

      <div class="form-group">
        <strong><p class="text-center" style="margin-top: 10px;">Data da compra:</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value="<?php echo $busca["dataCompra"]; ?>" disabled />
      </div>

      <div class="form-group">
        <strong><p class="text-center">Quantidades em itens comprados::</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value=" <?php echo $busca["quantidadeCompra"] ?>" disabled>
      </div>

      <div class="form-group">
        <strong><p class="text-center">Status do Pedido:</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value="<?php echo "$status" ?>" disabled>
      </div>

      <div class="form-group">
        <strong><p class="text-center">Código do Cliente:</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value="<?php echo "$busca[codCliente]" ?>" disabled>
      </div>
        

      <div class="form-group">
        <strong><p class="text-center">Valor da Compra:</p></strong>
        <input type="text" class="form-control text-center" id="exampleInputEmail1" value="R$<?php echo number_format($busca["valorCompra"],2,',','.'); ?>" disabled>
      </div>

    </form>

    <table class="table table-striped">
    <tbody>
      <th class="active"> Código do Produto </th>
      <th class="active"> Nome do Produto </th>
      <th class="active"> Quantidade Comprada </th>
      <th class="active"> Valor Unitário </th>
      <th class="active"> Valor Total </th>
    </tbody>
    <?php while($busca3 = mysqli_fetch_assoc($busca2)){ 

      echo "
    <tr>

      <td> $busca3[codProduto] </td>
      <td> $busca3[nome] </td>
      <td> $busca3[quantidade] </td>
      <td> $busca3[valorUnitario] </td>
      <td> $busca3[valorTotal] </td>

    </tr>";




      }?>
    
    </table>

    <strong><p class="text-right">Data de emissão:</p></strong>
    <strong><p class="text-right"><?php date_default_timezone_set('America/Sao_Paulo'); $date = date('d/m/Y H:i:s', time()); echo $date; ?></p></strong>
    <?php } ?>
    
  <?php } ?>
</body>
</html>