<?php include_once "Produto.class.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lojinha da Feh</title>
<link rel="stylesheet" type="text/css" href="hover.css" />

<style type="text/css">

body {
 padding: 0;
}

.fundo{
	background-color:#FFFFF0;
	    background-size: cover;
	margin: 0;
	
	
	}
.central{
	width:1000px;
	height:100%;
	margin:0 auto;
	background-color:#d2d2d2;
	border:solid 3px #000000;
	padding:30px;
	text-align:right;
	margin-top:50px;
	

	

}

/*botao/////////////////////////////////////////////////*/
.button {
  display: inline-block;
  height:100px;
  border-radius: 4px;
  margin-right:45px;
  background-color: #570001;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 15px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button1 {
  display: inline-block;
    height:100px;

  margin-right:90px;
  border-radius: 4px;
  background-color: #0B3A04;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 15px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
/*fim.////////////////////////////////*/
input[type="text"]{
	width:300px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
			border-radius:8px;
		border-style:none;
		margin-right:186px;
		margin-top:-15px;
	
}
select{
	width:205px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	
}

.div-opc{
	float:left;
	width:60px;
}
.textcanto{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:55px;
	}

	.textcanto1{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:55px;
	}
	.textcanto2{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:55px;
	}
		.textcanto3{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:400px;
	
	}

			.bt{
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin:20px 80px 10px 0px;



	}

a.classe1:link, a.classe1:visited {
	text-decoration:underline ;
	color:#000000;
	
	}
a.classe1:hover {
	text-decoration: underline; 
	color: #333;
}
a.classe1:active {
	text-decoration: none
	}



		
	.logo{
	
	width:200px;
	height:100px;
	
	float:left;
	
	}
	


		
	

.imglogo{

	
	
		width:100%;
	max-width:200px;
	height:90px;
	margin-left:20px;
	
	}

#conteudo{
	width:100%;
	height:90px;

	
	}
.fixed{
	
		width:100%;
	height:90px;
	background-color:#222;

	
	}
	
.quadroProduto{
	
	width:1000px;
	height:200px;
	
}

.imgProduto{
	
	width:170px;
	height:150px;
	float:left;
	
}

.txtProduto{

	text-align:center;	
	font-size:20px;
	float:left;
	margin-left:80px;
	margin-top:60px;
	
}

	
	}



</style>

<script>

	function Excluir(codigo){
	
	resposta = confirm("Deseja excluir o registro "+ codigo +"?");
	if(resposta == true){
		window.location.href = 'excluirProduto.php?codigoProduto='+codigo;
		/*$.ajax({url:'excluirProduto.php?codigoProduto='+codigo,
				success: function(retorno){
				carregar('listar.php');
		
				}
			})*/
		}
	};

</script>


</head>
<body div class="fundo">
	<div class="fixed" id="fixa">
		
    
 	 <a href="Admin.php"><img src="imagens/novoLogo.png"  class="imglogo" /></a>
    
            </div>



   
	<div class="central">
		
		<?php
		
		$produto = new Produto();
		
		$lista = $produto->retornaProduto();
		
		while($quadro = mysqli_fetch_assoc($lista)){
			
		echo "<div class=quadroProduto>
		
		<img src=".$quadro['imagemProduto']." class=imgProduto />
		<p class=txtProduto> $quadro[nomeProduto] </p>
		<p class=txtProduto> R$". number_format($quadro['precoProduto'],2,',','.') ."</p>
		<p class=txtProduto>Quantidade: $quadro[quantidadeProduto]</p>
		<a href=AlterarProduto.php?codigoProduto=".$quadro['codigoProduto']."><img src=imagens/alteraricon.ico style=width:100px;</a>
		<a onclick=Excluir(codigo=$quadro[codigoProduto])><img src=imagens/excluiricon.png style=width:100px;></a>
		</div>
		"	;
			
		}
		
		?>

    </div>
	
</body>
</html>