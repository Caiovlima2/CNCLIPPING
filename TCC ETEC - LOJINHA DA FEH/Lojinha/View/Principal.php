<?php session_start(); include "../Classes/Login.class.php"; include_once "../Classes/Connection.class.php"; include"../Classes/Produto.class.php"; $con = new Connection(); $prod = new Produto();
  
  $itens_por_pagina = 10;

  @$pagina = intval($_GET['pagina']);

  $pagina = $pagina * 10;

  if(isset($_GET['pesquisa'])){ 
    $pesquisa = $_GET['pesquisa'];
    $sql = "SELECT * FROM `tblestoque` where ativacaoProduto = '1' and nomeProduto like '%$pesquisa%' or tipoProduto like '%$pesquisa%' ORDER BY `codigoProduto` ASC LIMIT $pagina, $itens_por_pagina";}else{

  $sql = "select * from tblEstoque where ativacaoProduto = 1 ORDER BY `tblEstoque`.`codigoProduto` ASC limit $pagina, $itens_por_pagina";}

  $prod = mysqli_query($con->con, $sql);

  $busca = mysqli_fetch_assoc($prod);

  $num = mysqli_num_rows($prod);

  if(isset($_GET['pesquisa'])){$num_total = mysqli_query($con->con, "select * from tblestoque where nomeProduto like '%$pesquisa%' or tipoProduto like '%$pesquisa%' where ativacaoProduto = 1");}else{

  $num_total = mysqli_query($con->con, "select * from tblestoque");}

  @$num_total = mysqli_num_rows($num_total);

  $num_paginas = ceil($num_total / $itens_por_pagina);

?>
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
    <script src="../js/bootstrap.min.js"></script>
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
        <li><a href="#produtos">PRODUTOS</a></li>
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
            <li><a href="meusPedidos.php">Meus Pedidos</a></li>
            <li class="separator"></li>
            <li><a href="../Actions/deslogar.action.php">Sair</a></li>
      
          <?php } ?>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>

  <?php if(!isset($_GET['pesquisa'])){ ?>
    <section id="header" style="margin-top:-15px;">
    	<div class="container-fluid">
        
        	<div class="row">
            	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../imgs/galeria3.jpg" alt="..." style="height:550px; width:100%;">
          <div class="carousel-caption">
            Arte com pincéis
          </div>
        </div>
    <div class="item">
      <img src="../imgs/galeria9.jpg" alt="..." style="height:550px;width:100%;">
      <div class="carousel-caption">
       	Linhas
      </div>
    </div>
     <div class="item">
      <img src="../imgs/galeria8.jpg" alt="..." style="height:550px;width:100%;">
      <div class="carousel-caption">
      </div>
    
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
          </div>
      	</div>
      </div>
    </section>

    <?php } ?>
    <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-12 col-lg-12 produtosarea" style="height:450px;">
                		<h1 style="text-decoration:none;"><a name="produtos"> Nossos Produtos</a></h1>
                        
                        <ul class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-group">

                        <?php 

                          $sql = "select t.nome, count(tipoProduto) as quant from tblestoque e
                                inner join tbltiposprodutos t
                                WHERE t.nome = e.tipoProduto
                                GROUP BY tipoProduto";

                                $tipos = mysqli_query($con->con, $sql);

                                while($t = mysqli_fetch_assoc($tipos)){ 


                        ?>
                              <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3 list-group-item">
                                    <a href="Principal.php?pesquisa=<?php echo $t['nome'] ?>"><span class="badge"><?php echo "$t[quant]"; ?></span>
                                    <?php echo "$t[nome]"; ?></a>
                              </li>
                              <?php } ?>
                						</ul>
                        </div>
                     </div>
                  </div>


                  

                         <?php if($num > 0){
                         do{ ?>

                         <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 produto" style="float: left; margin-left: 30px; margin-bottom:10px;">
                            <div class="hoverzoom">
                                    <img src="<?php echo "$busca[imagemProduto]"; ?>" style="width: 250px; height: 230px;">
                                    <div class="retina">
                                        <p>R$ <?php echo number_format($busca["precoProduto"],2,',','.'); ?></p>
                                        <p><?php if($busca["quantidadeProduto"] > 0){echo "Produto Disponível";}else{echo "Produto Indisponível";} ?></p>
                                        <a href="<?php echo "DetalhesProduto.php?codigo=$busca[codigoProduto]" ?>">Saiba mais</a>
                                    </div>
                               </div>
                            <p><?php echo $busca["nomeProduto"];?></p>
                         </div> 


                         <?php }while($busca = mysqli_fetch_assoc($prod));} ?>

                           <div class="container-fluid">
          						  <div class="row">
                                       <nav aria-label="Page navigation">
                                                  <ul class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pagination" style="float:left;">
                                                    <li>
                                                      <a href="Principal.php?pagina=0" aria-label="Previous"class="navegar">
                                                        <span aria-hidden="true">&laquo;</span>
                                                      </a>
                                                    </li>

                                                    <?php for($i=0;$i<$num_paginas;$i++){ 
                                                      if(isset($_GET['pesquisa'])){?>
                                                    <li><a href="Principal.php?pagina=<?php echo $i; ?>&pesquisa=<?php echo $_GET['pesquisa'] ?>"><?php echo $i+1 ?></a></li>
                                                    <?php }else{ ?>
                                                    
                                                    <li><a href="Principal.php?pagina=<?php echo $i; ?>"><?php echo $i+1 ?></a></li>
                                                    
                                                    <?php }} ?>
                                                    <li>
                                                      <a href="Principal.php?pagina=<?php echo $num_paginas - 1; ?>" aria-label="Next" class="navegar">
                                                        <span aria-hidden="true">&raquo;</span>
                                                      </a>
                                                    </li>
                                                  </ul>
                                        </nav>  
                                     </div>
                                </div>
               		  </div>
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
    </div>
    <a href="#" class="go-top"><img src="../imgs/gototop.png" style="width:60px; height:60px;" /></a>

    <!--   CRIAÇÃO DO MODAL  LOGIN    -->

    <div class="modal fade" tabindex="-1" role="dialog" id="modalLogin">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <form enctype="multipart/form-data" action="../Actions/Logar.action.php" method="post">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <p>Email:</p> <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" name="emailCliente" placeholder="Seu Email">

        <p style="margin-top: 10px;">Senha:</p> <input type="password" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" name="senhaCliente" placeholder="Sua Senha">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-danger">
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->   
  </div>

  </body>
</html>	