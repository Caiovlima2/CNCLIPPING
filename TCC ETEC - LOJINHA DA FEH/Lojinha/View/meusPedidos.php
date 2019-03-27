<?php session_start();

include_once "../Classes/Connection.class.php";

$con = new Connection();

$pesquisa = mysqli_query($con->con, "SELECT * FROM tblcompra WHERE codCliente = ". $_SESSION['usuario']['codigo'] ." ORDER BY codigoCompra DESC");

?>

<!DOCTYPE html>
<html lang="iso-8859-1">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lojinha da Feh - Meus Pedidos</title>
	<link href="https://fonts.googleapis.com/css?family=Advent+Pro|Amaranth|Arima+Madurai|Convergence|Dancing+Script|Kanit|Lobster|Oleo+Script" rel="stylesheet">   
     <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},800);
		});
    });

</script>
<script>
	$(document).ready(function() {
		$(window).scroll(function(){
			if($(this).scrollTop() > 200){
				$('.go-top').fadeIn(200);
			}else{
				$('.go-top').fadeOut(200);	
			}
		});
			$('.go-top').click(function(event){
				event.preventDefault();
				
				$('html, body').animate({scrollTop:0},300);
			});

      $('#modalConfirm').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
      })

      });

</script>
  </head>
  <body div class="bodycarrinho">
	<div class="cotainer-fluid">
    	<nav class="navbar navbar-default menu">
  <div class="container-fluid menu" style="	margin-top:30px;margin-left:30px;
">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header menu" style="height:90px;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand fernanda" href="Principal.php" style="color:#DA1E1E;">Lojinha da Feh</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav menuL">
		<li><a href="QuemSomos.php">QUEM SOMOS</a></li>
        <li><a href="Principal.php#produtos">PRODUTOS</a></li>
        <li><a href="" data-toggle="modal" data-target="modalContato">CONTATO</a></li>
     
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="O que procura?" style="margin-top:5px;">
        </div>
        <button type="submit" class="btn btn-default pesquisa"><img src="../imgs/pesquisa.png" style="height:20px; width:17px;"></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><img src="../imgs/carrinho.png" style="height:40px; width:40px; margin-top:-10px;"></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../imgs/login" style="height:38px; width:38px; margin-top:-10px;"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Fazer Login</a></li>
            <li><a href="perfilCliente.html">Perfil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
            <div class="container-fluid">
    			<div class="row">
                    <table class="table table">
                    	<tr>
                              <td class="active" style="text-align:left; font-weight:bold;">LISTAGEM DE PEDIDOS</td>
                              <td class="active"></td>
                              <td class="active"></td>
                              <td class="active"></td>
                              <td class="active"></td>
                              <td class="active"></td>
                        </tr>
                        <tr>
                              <td class="active">Código do Pedido</td>
                              <td class="active">Data do Pedido</td>
                              <td class="active">Situação do Pedido</td>
                              <td class="active">Total</td>
                              <td class="active">Cancelar Pedido</td>
                              <td class="active">Detalhes do Pedido</td>
                        </tr>
                        <?php $i = 0; while($busca = mysqli_fetch_assoc($pesquisa)){ 
                            $codigo = $busca['codigoCompra'];
                            $date = new DateTime($busca['dataCompra']);
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

                            if($i % 2 == 0){
                              
                              ?>
                            <tr>
                            <td class="info" style="background-color:#900;color:rgba(204,204,204,1);"><?php echo $busca['codigoCompra'] ?></td>
                            <td class="info" style="background-color:#900;color:rgba(204,204,204,1);"><?php echo date_format($date, 'd/m/Y H:i:s') ?></br></td>
                            <td class="info" style="background-color:#900;color:rgba(204,204,204,1);"><?php echo $status ?></td>
                            <td class="info" style="background-color:#900;color:rgba(204,204,204,1);">R$ <?php echo number_format($busca['valorCompra'],2,',','.') ?></br></td>
                            <td class="info" style="background-color:#900;color:rgba(204,204,204,1);"><a data-toggle="modal" data-target="#modalConfirm" data-whatever="<?php echo $busca['codigoCompra']; ?>"><button class="btn btn-danger">Cancelar Pedido</button></a></br></td>
                            <td class="info" style="background-color:#900;color:rgba(204,204,204,1);"><a href="relatorioDetalhado.php?tipo=venda&codigo=<?php echo $busca['codigoCompra'] ?>" target="_blank"><button class="btn btn-danger">Detalhes do Pedido</button></a></br></td>
                            
                            </tr>
                            <?php }else{ ?>
                         <tr>
                            <td class="active"><?php echo $busca['codigoCompra'] ?></td>
                            <td class="active"><?php echo date_format($date, 'd/m/Y H:i:s') ?></br></td>
                            <td class="active"><?php echo $status ?></td>
                            <td class="active">R$ <?php echo number_format($busca['valorCompra'],2,',','.') ?></br></td>
                            <td class="active"><a data-toggle="modal" data-target="#modalConfirm" data-whatever="<?php echo $busca['codigoCompra']; ?>"><button class="btn btn-default">Cancelar Pedido</button></a></br></td>
                            <td class="active"><a href="relatorioDetalhado.php?tipo=venda&codigo=<?php echo $busca['codigoCompra'] ?>" target="_blank"><button class="btn btn-default">Detalhes do Pedido</button></a></br></td>
                        </tr>
                        <?php }$i++;} ?>
					</table>
                 </div>
                </div>
        </div>
    </div>
	
    <div class="container-fluid">
                 <div class="row" >
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 rodape"  style="margin-top:50px;">
                            <h1 style="margin-left:100px;">© Copyright 2017 Lojinha da Feh / Design by</h1> 
                            <h1 style="font-weight:bold; margin-top:-33px; margin-left:490px;">Future Innovation</h1> 
                            <h1 style="font-family: 'Arima Madurai', cursive;font-size:16px; margin-top:-32px;float:right; margin-right:250px;"> SIGA A FEH </h1>
                           <a href="https://www.facebook.com/" target="_blank"><img src="../imgs/facefeh.png" style="height:40px;display: block; width:40px; float:right;cursor:pointer; margin-top:-50px;margin-right:180px;"> </a>
                           <a href="https://www.facebook.com/" target="_blank"> <img src="../imgs/whatsfeh.png" style="height:45px; width:45px;margin-top:-52px;cursor:pointer; float:right; margin-right:120px;"> </a></div>
                     </div>
                    </div> 
                   
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
    <a href="#" class="go-top"><img src="../imgs/gototop.png" style="width:60px; height:60px;" /></a>

    <form action="../Actions/cancelaPedido.action.php" method="post">
    <div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Deseja mesmo cancelar o pedido?</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Código do Pedido</label>
            <input type="text" class="form-control" id="recipient-name" name="codigo" readonly>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Sim</button>
      </div>
    </div>
  </div>
</div>
</form>

  </body>
</html>	