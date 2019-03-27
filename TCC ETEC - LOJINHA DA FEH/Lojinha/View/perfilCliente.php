<?php session_start();
include_once "../Classes/Connection.class.php";
$con = new Connection();

$busca = "select * from tblCliente where codigoCliente = ".$_SESSION['usuario']['codigo'];

$busca = mysqli_query($con->con, $busca);

$busca = mysqli_fetch_assoc($busca);

$status = "";

if($busca["statusCliente"] == 1){$status = "Ativo";}else{$status = "Inativo";};
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Perfil</title>
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Advent+Pro|Amaranth|Arima+Madurai|Convergence|Dancing+Script|Kanit|Lobster|Oleo+Script" rel="stylesheet">   
     <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/perfilCliente.css" rel="stylesheet">
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

    function validaDados(){

    	if(verificaNome == true){

    		return true;
    	}else{

    		return false;
    	}

    }

    function ativaCampo(){

    	document.getElementById('nome').readOnly = !document.getElementById('nome').readOnly;
    	document.getElementById('email').readOnly = !document.getElementById('email').readOnly;
    	document.getElementById('telefone').readOnly = !document.getElementById('telefone').readOnly;
    	document.getElementById('telefonecel').readOnly = !document.getElementById('telefonecel').readOnly
    	document.getElementById('telefonecel2').readOnly = !document.getElementById('telefonecel2').readOnly
    	document.getElementById('cpf').readOnly = !document.getElementById('cpf').readOnly
    	document.getElementById('rg').readOnly = !document.getElementById('rg').readOnly
    	document.getElementById('cep').readOnly = !document.getElementById('cep').readOnly
    	document.getElementById('endereco').readOnly = !document.getElementById('endereco').readOnly
    	document.getElementById('numerocasa').readOnly = !document.getElementById('numerocasa').readOnly
    	document.getElementById('moradia').readOnly = !document.getElementById('moradia').readOnly

    }
    $(document).ready(function(){
    var fmr = document.getElementById("formDados");

    fmr.addEventListener("focusout", verificaNome);
    fmr.addEventListener("focusout", verificaEmail);
    fmr.addEventListener("focusout", verificaCPF);
    fmr.addEventListener("focusout", verificaCEP);

});
    function verificaNome(){

    	nome = document.getElementById("nome").value;

    	if(nome == ""){

    		document.getElementById("divNome").className = 'form-group has-error';
    		return false;
    	}
    	if(nome !== ""){

    		document.getElementById("divNome").className = 'form-group has-success';
    		return true;
    	}

    }

    function verificaEmail(){

    	email = document.getElementById("email").value;
    	var verificacao;

    	$.ajax({ 
                url: '../Actions/verificaEmail.action.php', 
                type: 'POST', 
                data:{"email" : email}, 
                success: function(data) { 
                data = $.parseJSON(data); 
                $("#resposta").text(data.email);
                verificacao = data.email;
                console.log(verificacao);
		if(verificacao == "true"){

        			document.getElementById("divEmail").className = 'form-group has-success';
					return true;
        		}else if(verificacao == "false"){

        			document.getElementById("divEmail").className = 'form-group has-error';
					return false;

       			}
            } 
        });
		
    }

    function verificaCPF(){

    var verificacao = "";
    cpf = document.getElementById("cpf").value;
    var Soma;
    var Resto;
    Soma = 0;
	if (cpf == "00000000000") verificacao = "false";
    
	for (i=1; i<=9; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
	Resto = (Soma * 10) % 11;
	
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(cpf.substring(9, 10)) ) verificacao = "false";
	
	Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
	
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(cpf.substring(10, 11) ) ) verificacao = "false";

    if(verificacao == ""){

    	document.getElementById("divCpf").className = 'form-group has-success';
		return true;

    }else if(verificacao == "false"){

    	document.getElementById("divCpf").className = 'form-group has-error';
		return false;

   		 }
    }

    function verificaCEP(){

    	cep = document.getElementById("cep").value;
    	if(cep == ""){

    		document.getElementById("divCep").className = 'form-group has-error';
			return false;
    	}
    	else if(cep !== ""){

    		document.getElementById("divCep").className = 'form-group has-success';
			return true;
    	}
    }
	
	function validaDados(){
	
		if(verificaCPF() == true && verificaNome() == true && verificaCEP() == true){
		return true;	
		}else{
			alert('Preencha os campos corretamente para alterar seus dados!');
		return false;	
		}
		
	}


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
        <button type="submit" class="btn btn-primary">Enviar e-mail</button>
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
		<div class="container-fluid">
        	<div class="row">
            	<div class="boxDados">
                        <div class="boxInforma">
                         <button class="btn btn-danger form-control" onclick="ativaCampo();"> Alterar Dados </button>
                            <form method="post" onSubmit="return validaDados()" action="../Actions/alteraCliente.action.php" id="formDados">
                            <!--PROVISORIO************ ADC OS CAMPOS NECESSARIOS-->
                                 <div class="form-group" id="divNome">
                                  <h1>NOME:(*)</h1><input id="nome" class="form-control" type="text" name="nome" value="<?php echo "$busca[nomeCliente]"; ?>" readonly>
                                  </div>
                                  <div class="form-group" id="divEmail">
                                  <h1>EMAIL:(*)</h1><input id="email" class="form-control" type="text" name="email" value="<?php echo "$busca[emailCliente]"; ?>"	 readonly>
                                  </div>
                                  <div class="form-group" id="divTelefone">
                                  <h1>TELEFONE:</h1><input id="telefone" class="form-control" type="text" name="telefone" value="<?php echo "$busca[telcasaCliente]"; ?>" readonly>
                                  </div>
                                  <div class="form-group" id="divTelefoneCel">
                                  <h1>TELEFONE CELULAR 1:</h1><input id="telefonecel" class="form-control" type="text" name="telefonecel" value="<?php echo "$busca[telcelCliente]"; ?>" readonly>
                                  </div>
                                  <div class="form-group" id="divTelefoneCel2">
                                  <h1>TELEFONE CELULAR 2:</h1><input id="telefonecel2" class="form-control" type="text" name="telefonecel2" value="<?php echo "$busca[telcelClientedois]"; ?>" readonly>
                                  </div>
                                  <div class="form-group" id="divCpf">
                                  <h1>CPF:(*)</h1><input id="cpf" class="form-control" type="text" name="cpf" value="<?php echo "$busca[cpfCliente]"; ?>" readonly>
                                  </div>
                                  <div class="form-group" id="divRg">
                                  <h1>RG:(*)</h1><input id="rg" class="form-control" type="text" name="rg" value="<?php echo "$busca[rgCliente]"; ?>" readonly>
                                  </div>
                                  <div class="form-group" id="divCep">
                                  <h1>CEP:(*)</h1><input id="cep" class="form-control" type="text" name="cep" value="<?php echo "$busca[cepCliente]"; ?>" readonly>
                                  </div>
                                  <div class="form-group" id="divRua">
                                  <h1>RUA:(*)</h1><input id="endereco" class="form-control" type="text" name="endereco" value="<?php echo "$busca[enderecoCliente]"; ?>" readonly>
                                  </div>
                                  <div class="form-group" id="divMoradia">
                                  <h1>MORADIA:(*)</h1><input id="moradia" class="form-control" type="text" name="moradia" value="<?php echo "$busca[moradiaCliente]" ?>" readonly>
                                  </div>
                                  <div class="form-group" id="divNumero">
                                  <h1>NÚMERO DA CASA:(*)</h1><input id="numerocasa" class="form-control" type="text" name="numerocasa" value="<?php echo "$busca[numerocasaCliente]" ?>" readonly>
                                  </div>
                                  <div class="form-group" id="divStatus">
                                 <h1>ATIVAÇÃO</h1><input id="ativacao" class="form-control" type="text" name="ativacao" value="<?php echo "$status"; ?>" readonly>
                                 </div>
 
                                 <input type="submit" id="btEnviar" name="btEnviar" value="Enviar Dados" class="btn btn-danger form-control">                       
                            </form>
                            <p></p><br>
                        </div>
                 </div>
			</div>
		</div>

    

</body>
</html>