<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../jquery/jquery-1.8.1.min.js"></script>
<title>Admin</title>
<script src="../jquery-3.1.1.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

<script>

$(document).ready(function(e) {
});
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
      $('#imagem').slideUp(0).delay(500);
            $('#fotoProduto').attr('src', e.target.result);
      $('#imagem').slideToggle(500);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

</script>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>

<?php

	if(isset($_GET['codigo'])){
	
		include_once "../Classes/Connection.class.php";
		
		$con = new Connection();
		
		$val = "select * from tblEstoque where codigoProduto = $_GET[codigo]";
		
		$val = mysqli_query($con->con, $val);
		
		$val = mysqli_fetch_assoc($val);	
		
	}

?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="Admin.php">Lojinha da Feh</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" data-toggle="modal" data-target="#modalInserir">Inserir Produto <span class="sr-only">(current)</span></a></li>
         <li><a href="listaEstoque.php">Verificar Estoque</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opções <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="listaProduto.php">Listar Produtos</a></li>
            <li><a href="listaCliente.php">Listar Clientes</a></li>
            <li><a href="listaVenda.php">Listar Vendas</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="relatorioCadastral.php?tipo=Estoque">Gerar Relatório Completo de Estoque</a></li>
            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="relatorioCadastral.php?tipo=Produto" target="_blank">Cadastral de Produtos</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="relatorioCadastral.php?tipo=Cliente" target="_blank">Cadastral de Clientes</a></li>
             
            <li role="separator" class="divider"></li>
            <li><a href="relatorioCadastral.php?tipo=Venda" target="_blank">Cadastral de Vendas</a></li>
            <li><a href="relatorioCadastral.php?tipo=VendasMes" target="_blank">Produtos Mais Vendidos do Mês</a></li>
            <li><a href="relatorioCadastral.php?tipo=VendasAno" target="_blank">Produtos Mais Vendidos do Ano</a></li>

            <li role="separator" class="divider"></li>
            <li><a href="relatorioCadastral.php?tipo=Estoque" target="_blank">Completo de Estoque</a></li>
            
            
          </ul>
        </li>
      </ul>    
      <ul class="nav navbar-nav navbar-right">         
        <li class="active"><a href="../Actions/deslogar.action.php" role="button" aria-haspopup="true" aria-expanded="false">Deslogar</a>          
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<form class="form-horizontal" action="../Actions/alteraProduto.action.php" method="post">
  <div class="form-group col-xs-11">
    <label for="inputEmail3" class="col-sm-2 control-label">Código do Produto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputCodigo" name="codigoProduto" value="<?php echo "$val[codigoProduto]" ?>" readonly>
    </div>
  </div>
  
  <div class="form-group col-xs-11">
    <label for="inputPassword3" class="col-sm-2 control-label">Nome do Produto:</label>
    <div class="col-sm-10">
      <input type="text" name="nomeProduto" class="form-control" id="inputNome" placeholder="Nome do Produto" value="<?php echo "$val[nomeProduto]"; ?>">
    </div>
  </div>
  
  <div class="form-group col-xs-11">
    <label for="inputEmail3" class="col-sm-2 control-label">Preço do Produto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="precoProduto" id="inputPreco" placeholder="00,00" value="<?php echo number_format($val['precoProduto'],2,',','.') ?>">
    </div>
  </div>
  
    <div class="form-group col-xs-11">
    <label for="inputPassword3" class="col-sm-2 control-label">Quantidade em Estoque:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNome" name="quantidadeProduto" placeholder="Qauntidade do Produto" value="<?php echo "$val[quantidadeProduto]"; ?>">
    </div>
  </div>
  
  <div class="form-group col-xs-11">
    <label for="inputPassword3" class="col-sm-2 control-label">Descrição do Produto:</label>
    <div class="col-sm-10">
      <textarea  type="text" class="form-control" id="inputNome" name="descricaoProduto" placeholder="Descrição do Produto"> <?php echo $val['descricaoProduto'] ?> </textarea>
    </div>  
   </div>
   
   
    <div class="form-group col-xs-11">
    <label for="inputPassword3" class="col-sm-2 control-label">Tipo de Produto:</label>
    <div class="col-sm-10">
      <select type="text" class="form-control" id="inputNome" name="tipoProduto">
      
      	<option value="<?php echo "$val[tipoProduto]" ?>"><?php echo "$val[tipoProduto]" ?></option>
	<?php
	
	include_once "../Classes/Connection.class.php";
	
	$con = new Connection();
	
	$busca = "Select nome from tbltiposprodutos";
	
	$lista = mysqli_query($con->con, $busca);
	
	while($listaa = mysqli_fetch_assoc($lista)){
		
			echo "<option value='".$listaa['nome']."'>".$listaa['nome']."</option>";
	}
	?>
      
      </select>
    </div>
  </div>

  <div class="form-group col-xs-11">
  <label for="inputEstoque" class="col-sm-2 control-label"> Estoque Mínimo do Produto: </label>
  <div class="col-sm-10">
    <input type="text" name="estoque" class="form-control" placeholder="Estoque Mínimo" value="<?php echo "$val[estoquemin]" ?>">
  </div>
  </div>

  <div class="form-group col-xs-11">
  <label for="inputEstoque" class="col-sm-2 control-label"> Foto: </label>
  <div class="col-sm-10">  
  <input type="file" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" name="imagemProduto" onchange="readURL(this)">
  <div id="imagem" class="img-thumbnail"> 
  <img src="<?php echo "$val[imagemProduto]" ?>" class="img-thumbnail" id="fotoProduto">
  </div>
  </div>
  </div>
  <button type="submit" class="btn btn-lg btn-block btn-danger">Alterar</button>

  <a href="listaProduto.php"><button type="button" class="btn btn-lg btn-block">Cancelar</button></a>
   
</form>



</body>
</html>