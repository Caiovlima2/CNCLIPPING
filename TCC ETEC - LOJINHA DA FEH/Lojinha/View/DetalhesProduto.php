<?php session_start(); $codigo=$_GET['codigo']; include_once "../Classes/Connection.class.php"; $con = new Connection(); $busca = mysqli_query($con->con, "select * from tblEstoque where codigoProduto = $codigo"); $busca = mysqli_fetch_assoc($busca); ?>
<!DOCTYPE html>
<html lang="iso-8859-1">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lojinha da Feh - Detalhe Produto</title>
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
      <a class="navbar-brand fernanda" style="color:#DA1E1E;" href="Principal.php">Lojinha da Feh</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav menuL">
		<li><a href="QuemSomos.html">QUEM SOMOS</a></li>
        <li><a href="index.html">PRODUTOS</a></li>
        <li><a href="index.html">PARCEIROS</a></li>
        <li><a href="index.html">CONTATO</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="O que procura?">
        </div>
        <button type="submit" class="btn btn-default pesquisa"><img src="../imgs/pesquisa.png" style="height:20px; width:17px;"></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Carrinho.html"><img src="../imgs/carrinho.png" style="height:40px; width:40px; margin-top:-10px;"></a></li>
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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
       <div class="cotainer-fluid">

        <p class="fernanda text-center" style="color:#DA1E1E; margin-bottom: -40px;"><?php echo "$busca[nomeProduto]"; ?></p>
            <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 informaçoes" style="width:100%;">
                       
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 imgproduto">
                            <img src="<?php echo "$busca[imagemProduto]"; ?>"/>
                        </div>
                       
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 descriçao">
                   			 <h1 > Descrição</h1>
                                <p><?php echo "$busca[descricaoProduto]"; ?></p>
               			 </div>
       			 </div>
       		 </div>
      </div>
      
           		 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 informaçoes2" ">
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 comprar">
                                        <p>Preço:</p>
                                     		<h1> R$ <?php echo number_format($busca["precoProduto"],2,',','.'); ?></h1>
                                          <?php if($busca['quantidadeProduto'] > 0){ ?>
                                          <a href="<?php echo "Carrinho.php?acao=add&codigo=$busca[codigoProduto]"; ?>"><button type="button" name="btAdicionar" class="btn btn-success"><img src="../imgs/carrinhobranco.png" style="height:35px; width:35px;margin-right:10px;")>COMPRAR<br><p>Adicionar ao carrinho</p>
                                          </button></a>
                                          <?php }else{ ?>

                                          <a href="<?php echo "Carrinho.php?acao=add&codigo=$busca[codigoProduto]"; ?>"><button type="button" name="btAdicionar" class="btn btn-success" disabled><img src="../imgs/carrinhobranco.png" style="height:35px; width:35px;margin-right:10px;")>COMPRAR<br><p>Adicionar ao carrinho</p>
                                          </button></a>

                                          <?php } ?>
        	</div>     
            <a href="Principal.php"><button type="button" class="btn btn-success" style="width: 400px; margin-left: 60px; margin-top: 170px;">CONTINUAR COMPRANDO<br><p>Clique aqui!</p></button></a>
        </div>
      </div>
                    
           
        </div>
      </div> 
    </div>

 				 <div class="container-fluid">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 rodape" style="margin-top:20px;">
                                    <h1>© Copyright 2017 Lojinha da Feh / Design by Future Innovation</h1> </br></br>
                                    <h1 style="font-family: 'Arima Madurai', cursive;font-size:16px; margin-top:-32px; float:right; margin-right:200px;"> SIGA A FEH </h1>
                                   <img src="../imgs/facefeh.png" style="height:40px; width:40px;cursor:pointer; margin-top:-45px; float:right;margin-right:100px"> 
                                   <img src="../imgs/whatsfeh.png" style="height:45px; width:45px;margin-top:-45px;cursor:pointer;float:right; margin-right:50px">
                         </div>
                    </div>
             	</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
    <a href="#" class="go-top"><img src="../imgs/gototop.png" style="width:60px; height:60px;" /></a>
  
  	 </body>

</html>	