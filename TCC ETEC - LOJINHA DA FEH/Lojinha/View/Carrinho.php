<?php include_once "../Classes/Carrinho.class.php";

  $car = new Carrinho();

  if(isset($_GET['acao'])){

    if($_GET['acao'] == "add"){

      $car->adicionarProduto($_GET['codigo']);

    }else if($_GET['acao']== "diminuir"){

      $car->diminuirQuantidade($_GET['codigo']);

    }else if($_GET['acao'] == "aumentar"){

      $car->aumentarQuantidade($_GET['codigo']);

    }else if($_GET['acao'] == "delete"){

      $car->deletarProduto($_GET['codigo']);

    }

  }

?>
<!DOCTYPE html>
<html lang="iso-8859-1">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lojinha da Feh - Carrinho</title>
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
      
      <a class="navbar-brand fernanda" href="Principal.php" style="color:#DA1E1E;">Lojinha da Feh</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
   
  </div><!-- /.container-fluid -->
</nav>

</div>
	<!--<div class="container-fluid">
    	<div class="row">
        	<div class="carrinho">
            	<h1>Carrinho Vazio</h1>
            </div>-->
            <?php $car->mostraCarrinho(); ?>
                    
                    
                     <table class="table table tabelaTotal"></table>
                     <form method="post">
                     <button name="btnComprar" type="submit" class="btn btn-success" style="float:right; margin-top:150px; margin-right:-490px;"><img src="../imgs/carrinhobranco.png" style="height:35px; width:35px;margin-right:10px;">COMPRAR<br><p><small>Adicionar ao carrinho</small></p>
                    </button></form>
                    <a href="Principal.php"><button type="button" class="btn btn-success" style="float:left; margin-top:150px;width:380px;">ESCOLHER MAIS PRODUTOS<br>
                    </button></a>
                    </div>
                    </div>
            
        </div>
    </div>
	<br>
    
    <div class="container-fluid">
    
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 rodape" style="margin-top:0;">
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

  <?php if(isset($_POST['btnComprar'])){

     include_once "../Classes/Venda.class.php";

    $vend = new Venda();
    
    $vend->realizarVenda();

    } ?>
</html>	