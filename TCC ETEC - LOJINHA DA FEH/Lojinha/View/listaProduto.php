<?php
	include_once "../Classes/Connection.class.php";
	$con = new Connection();
?>
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
	$('#imagem').hide(0);
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

</head>

<body>
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


<!-- Modal INSERIR-->
<div class="modal fade" id="modalInserir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <form method="post" enctype="multipart/form-data" id="form-inserir" action="../Actions/cadastrarProduto.action.php" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inserir Produto</h4>
      </div>
      <div class="modal-body">
         <p>Nome:</p> <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" name="nomeProduto" placeholder="Nome do Produto">

        <p style="margin-top: 10px;">Preço:</p> <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" name="precoProduto" placeholder="Preço do Produto">

        <p>Quantidade:</p> <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" name="quantidadeProduto" placeholder="Quantidade do Produto">

        <p>Descrição:</p> <textarea class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" name="descricaoProduto" placeholder="Descrição do Produto"> </textarea>

        <p>Foto:</p> <input type="file" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" name="imagemProduto" placeholder="" onchange="readURL(this)">
       <div id="imagem" class="img-thumbnail"> <img src="" class="img-thumbnail" id="fotoProduto"></div>


        <p>Tipo do Produto:</p> <select class="form-control" name="tipoProduto">
        <option value="">Selecione o Tipo</option>
  <?php
  
  $busca = "Select nome from tbltiposprodutos";
  
  $lista = mysqli_query($con->con, $busca);
  
  while($listaa = mysqli_fetch_assoc($lista)){
    
      ?><option value="<?php echo "$listaa[nome]" ?>"><?php echo "$listaa[nome]"; ?></option> <?php } ?>
    </select>

    <p>Estoque Mínimo do Produto</p> <input type="text" class="form-control" name="estoque" placeholder="Ex: 100">

  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <input type="submit" class="btn btn-primary btn-danger" value="Inserir" name="btnInserir">   
      </div>
      </form>
    </div>
  </div>
</div>
  
	<h4 style="margin-bottom:10px;" class="text-center">OBS: Produtos com a cor cinza estão desativados</h4>
    <div class="table-responsive">
    
    <table class="table table-striped">
    <form action="listaProduto.php" method="post">
    	<tbody>
        <th class="active"> Pesquisar um produto </th>
        <th class="active"> <input type="text" name="pesquisa"> </th>
        <th class="active"> <input type="submit" value="Pesquisar"> </th>
        </tbody>
     </form>  
      
    
    	<tbody>
        	
            <th class="active text-center"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Código do Produto </th>
            
            <th class="active text-center"> Nome do Produto </th>
                  
        	<th class="active text-center"> Preço do Produto </th>        
        
        	<th class="active text-center"> Quantidade em Estoque </th>
            
            <th class="active text-center"> Alterar </th>
            
            <th class="active text-center"> Inativar/Ativar Produto </th>
        	
            <th class="active text-center"> Gerar Relatório Detalhado </th>
        
        
        <?php	
		
		include_once "../Classes/Produto.Class.php";
		
		$produto = new Produto();
		if(!isset($_POST['pesquisa'])){
		$busca = $produto->retornaProduto();
		}else if(isset($_POST['pesquisa'])){
			$con = new Connection();
			 $pesquisa = $_POST['pesquisa']; $busca = mysqli_query($con->con, "select * from tblEstoque where nomeProduto like '%$pesquisa%' or tipoProduto like '%$pesquisa%'")
		;};
		while($busca2 = mysqli_fetch_assoc($busca)){
			
			if($busca2['ativacaoProduto'] == 0){
			echo "<tr class=table table-striped style=background-color:#c6bbbb;>
			
			<td class=text-center> $busca2[codigoProduto] </td>
			<td class=text-center> $busca2[nomeProduto] </td>
			<td class=text-center> R$". number_format($busca2['precoProduto'],2,',','.') ." </td>
			<td class=text-center> $busca2[quantidadeProduto] </td>
			<td class=text-center><a href=AlterarProduto.php?codigo=$busca2[codigoProduto] style=cursor:pointer><button class='btn btn-primary'> Alterar </button></a></td>
			<td class=text-center><a href=../Actions/ativacaoProduto.action.php?codigo=$busca2[codigoProduto]&acao=ativar style=cursor:pointer><button class='btn btn-primary' style=width:150px;>Ativar Produto </button></a></td>
			<td class=text-center><a href=relatorioDetalhado.php?tipo=produto&codigo=$busca2[codigoProduto] target=_blank><button class='btn btn-primary'> Gerar Relatório Detalhado </button></a></td>
			
			</tr>
			";	}else{
				
				echo "<tr class=table table-striped>
			
			<td class=text-center> $busca2[codigoProduto] </td>
			<td class=text-center> $busca2[nomeProduto] </td>
			<td class=text-center> R$". number_format($busca2['precoProduto'],2,',','.') ." </td>
			<td class=text-center> $busca2[quantidadeProduto] </td>
			<td class=text-center><a href=AlterarProduto.php?codigo=$busca2[codigoProduto] style=cursor:pointer><button class='btn btn-danger'> Alterar </button></a></td>
			<td class=text-center><a href=../Actions/ativacaoProduto.action.php?codigo=$busca2[codigoProduto]&acao=desativar style=cursor:pointer><button class='btn btn-danger' style=width:150px;	> Desativar	</button></a></td>
			<td class=text-center><a href=relatorioDetalhado.php?tipo=produto&codigo=$busca2[codigoProduto] target=_blank><button class='btn btn-danger'> Gerar Relatório Detalhado </button></a></td>
			
			</tr>
			";
				
			}
			
		}
		
		?>
        
        
        </tbody>
    </table>
</div>

</body>
</html>