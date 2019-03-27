<?php session_start(); include "../Classes/Login.class.php"; include_once "../Classes/Connection.class.php"; include"../Classes/Produto.class.php"; $con = new Connection(); $prod = new Produto();?>
<!DOCTYPE html>
<html lang="iso-8859-1">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lojinha da Feh - Materiais de Artesanato</title>
	<link href="https://fonts.googleapis.com/css?family=Advent+Pro|Amaranth|Arima+Madurai|Convergence|Dancing+Script|Kanit|Lobster|Oleo+Script" rel="stylesheet">   
     <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000 
    })
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
  <body>

<!--MODAL CONTATO-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalContato">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Contato</h4>
      </div>
      <div class="modal-body">
        <form action="../Actions/contatoCliente.action.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome" name="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Problema:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Problema" name="problema">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descreva seu problema:</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="Problema" name="texto"></textarea>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-danger">Enviar e-mail</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
        <li><a href="#" data-toggle="modal" data-target="#modalContato">CONTATO</a></li>
      </ul>
      <form class="navbar-form navbar-left" method="post" action="../Actions/pesquisaProduto.action.php">
        <div class="form-group">
          <input type="text" name="pesquisa" class="form-control" placeholder="O que procura?" style="margin-top:5px;">
        </div>
        <button type="submit" class="btn btn-default pesquisa"><img src="../imgs/pesquisa.png" style="height:20px; width:17px;"></button>
      </form>
         <ul class="nav navbar-nav navbar-right">
        <li><a href="Carrinho.php"><img src="../imgs/carrinho.png" style="height:40px; width:40px; margin-top:-10px;"></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../imgs/login" style="height:38px; width:38px; margin-top:-10px;"><span class="caret"></span></a>
          <ul class="dropdown-menu">

          <?php if(!isset($_SESSION['usuario']['logado'])){ ?>
            
            <li><a href="#" data-toggle="modal" data-target="#modalLogin">Entrar</a></li>
            <li><a href="Cadastro.php">Cadastrar-se</a></li>

          <?php }else{ ?>

            <li><a href="perfilCliente.php">Perfil</a></li>
            <li><a href="#">Alterar Senha</a></li>
            <li class="separator"></li>
            <li><a href="#">Sair</a></li>
      
          <?php } ?>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>   
   
    
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../imgs/SERA.png" alt="..." class="img-responsive">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="../imgs/CHACH.png" alt="..." class="img-responsive">
      <div class="carousel-caption">
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</html>