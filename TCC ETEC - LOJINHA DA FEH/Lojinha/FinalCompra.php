<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perfil</title>
</head>
<style>

input[type="numCartao"]{
	width:200px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
			border-radius:8px;
		border-style:none;
		margin-right:30px;
		margin-top:10px;
	
}
input[type="Outros"]{
	width:200px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
			border-radius:8px;
		border-style:none;
		margin-right:30px;

	
}
.central1{
	width:100%;
	max-width:940px;
	height:100px;
	margin:0 auto;
	background-color:#FFFFFF;
	border:solid 3px #000000;
	padding:30px;
	text-align:right;
	margin-top:125px;
	margin-left:248px;
	
}

                      		.Quantidade{
		height:99px;
		width:200px;
		float:left;
	
	}
		.text{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-top:30px;
	color:#000000;
	
	}
			.textTotal{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:16px;
	margin-top:30px;
	color:#000000;
	
	}
	
			.textQuantidade{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:50px;
	margin-top:30px;
	color:#AAAAAA;
	
	}
    
    		.textFRETE{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-top:30px;
	color:#AAAAAA;
	
	}
    	
				.subtotal{
	height:99px;
		width:200px;
		float:left;
		margin-left:-40px;
	
	}
				.frete{
	height:99px;
		width:150px;
		float:left;
	
	}
					.total{
	height:99px;
		width:150px;
		float:left;
	
	}
	
	.nome{
	height:99px;
		width:200px;
		float:left;
	
	}

*{
	padding:0px;
	margin:0px;	
}

section{
	margin:50px auto;
	width:1025px;
	height:150px;	
}

.menu{
	width:100%;
	height:60px;
	background-color:#222;
	font-family:'Arial';	
}
.menu ul{
	list-style:none;
	position:relative;	
}
.menu ul li{
	width:150px;
	float:left;	
}
.menu a{
	padding:20px;
	display:block;
	text-decoration:none;
	text-align:center;
	background-color:#222;
	color:#fff;
}
.menu ul ul{
	position:absolute;
	visibility:hidden;	
}
.menu ul li:hover ul{
	visibility:visible;	
}
.menu a:hover{
	background-color:#f4f4f4;
	color:#555;	
}

.menu ul ul li{
	float:none;
	border-bottom:solid1px #ccc;	
}
.menu ul ul li a{
	background-color:#555;	
}
label[for="bt_menu"]{
	padding:5px;
	background-color:#222;
	color:#fff;
	font-family:"Arial";
	text-align:center;
	font-size:30px;
	cursor:pointer;
	width:50px;
	height:50px;	
}
.textcanto{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:50px;
	margin-top:30px;
	color:#676767;
	}
.textcanto1{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:14px;
	margin-bottom:10px;
	margin-left:15px;
	margin-top:5px;
	color:#000001;
	}
.textcanto2{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:24px;
	margin-bottom:10px;
	margin-left:-110px;
	margin-top:70px;
	color:#000000;
	}	

.textcanto3{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-top:30px;
	margin-left:192px;
	
	color:#676767;
	}	
	
	.textcanto4{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-top:30px;
	margin-left:273px;
	
	color:#676767;
	}	
	
		.textcanto5{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:16px;
	}
	
		
		.textcanto6{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:14px;
	margin-bottom:10px;
	margin-left:15px;
	margin-top:-30px;
	color:#000001;
	}
	
			.textcanto7{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:14px;
	margin-bottom:10px;
	margin-left:15px;
	margin-top:10px;
	color:#676767;
	}
	
	.PrecoEntrega
	{
				width:75px;
				height:40px;
				float:left;
				margin-top:5px;
	}
		.DiasEntrega
	{
				width:75px;
				height:40px;
				float:left;
				margin-top:5px;


	}
		.PrecoSEDEX
	{
				width:100px;
				height:40px;
				float:left;
				margin-top:5px;


	}

	
	#bt_menu{
	display:none;	
	}
	label[for="bt_menu"]{
	display:none;	
	}
	
		body{
	background-attachment:fixed;
	background-size:100%;
	background-color: #FFFFF0;;
	margin:0;
	margin-left:0;
	margin-right:0;
	width:100%;
	background-repeat:no-repeat;
	background-size:cover;
	}
	

input[type="submit"]{
	width:200px;
	text-align:center;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	background-color:#FFF;
		margin-right:20px; 
		margin-top:60px;	
		cursor:pointer;	
}
.bt{
	width:150px;
	text-align:center;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	background-color:#FFF;
		margin-top:25px;	
		cursor:pointer;	
}
	.textoPesquisa{
	

	height:38px;
	margin-top:29px;
	margin-left:40px;
	float:left;
	font-size:30px;
	border-top:solid;
	border-bottom:solid;
	border-color:#FFF;
	width:100%;
	max-width:500px;
	



	
	}
	
	
.divPesquisa{
	

	margin-left:758px;
	margin-top:29px;
	cursor:pointer;
	border-top:solid;
	border-right:solid;
	border-bottom:solid;
	position:absolute;
	border-color:#FFF;
	width:100%;
	max-width:50px;
	height:38px;


	}
		
.btnPesquisa{
	

	
		width:100%;
	max-width:45px;
	height:30px;	
	margin-top:4px;
	margin-left:3px;
	
	}
	
.imgProduto{
	
	width:200px;
	height:200px;	
}

.btnCarrinho{
	
	font-size:20px;	
	width:240px;
	margin-left:-20px;
	
		
}

.btnCarrinho:hover{

	background-color:rgba(255,255,255,1);
	box-shadow:rgba(0,0,0,1) 4px 4px 4px;
	transition:1s;
	
}

.btnCompra{

	width:240px;
	font-size:20px;
	margin-left:-20px;
	margin-top:15px;
		
}

.txtBotao{

	text-align:center;	
	cursor:pointer;
	color:rgba(0,0,0,1);
	
}

.txtNome{

	color:black;
	margin-top:-15px;
	margin-bottom:-15px;	
	font-size:20px;
	text-align:center;
	font-weight:bold;
	height:50px;
	
}

.txtPreco{
	
	font-size:20px;
	margin-bottom:-20px;
	color:black;
	text-align:center;
		
}
	



#conteudo{
	width:100%;
	height:90px;

	
	}
.fixed{
	
		width:100%;
	height:90px;
	background-color:rgba(0,0,0,1);
	
	}
	
	.logo{
	

	
		width:100%;
	max-width:200px;
	height:90px;
	margin-left:15px;
	float:left;
	
	}
	
	
.imglogo{

	
		width:100%;
	max-width:200px;
	height:90px;
	
	}
		

	

	.imgLogin{
		

	
		width:100%;
	max-width:200px;
	height:90px;

	
	}
	
		.login{
	

		margin-left:150px;

		width:100%;
	max-width:200px;
	height:90px;
	float:left;

	

	}
	

	.meio{
	width:100%;
	max-width:1000px;
	height:100%;
	min-height:500px;
	background-color:#ffffff;
	border:solid 3px #000000;
	
	text-align:right;
	margin-top:50px;
	margin-left:250px;
	


	

	

}
	.nomeProduto
	{
		
	width:600px;
	float:right;
	height:100px;
	
		}
			.precoProduto
	{

	width:600px;
		float:right;
	height:300px;
	background-color:rgba(0,255,0,1);

	
		}

		
	.fotoProduto
		{
		width:400px;
	margin-top:1px;
	height:400px;
	
		}
		
		.Dados
			{
		width:250px;
	margin-top:-58px;
	height:250px;
	background-color:#cccccc;
		border:solid 3px #000000;
	margin-left:50px;
		}
		
				.Dados1
			{
		width:250px;
	height:50px;
	background-color:rgba(204,204,204,1);
		border:solid 3px #000000;
	margin-top:75px;
	margin-left:380px;
		}
		
						.Dados2
			{
		width:250px;
	height:400px;
	background-color:rgba(204,204,204,1);
		border:solid 3px #000000;
	float:right;
	margin-top:-255px;
	margin-right:30px;
		}
		
		.FotoCartao{
			width:249px;
				height:40px;
				
				

			}
		

	
	.imgCarrinho{
	
	max-width:50px;
	margin-top:15px;
	width: 100%;
	height:60px;
	

	
	}
	
		.Carrinho{
	
	width:100%;
	max-width:50px;
	height:90px;
	margin-left:70px;
	float:left;
	position:static;
	
	}	
		.ibagem
	{
		width:240px;
		height:200px;
		background-color:#fffff1;
		margin-left:5px;
		
	}
	
	
@media(max-width:1300px){
	

	.meio{
	width:100%;
	max-width:850px;
	height:100%;
	background-color:#d2d2d2;
	border:solid 3px #000000;
	min-height:550px;
	text-align:right;
	margin-top:100px;
	margin-left:80px;
	
	


	

	

}

	*{
	padding:0px;
	margin:0px;	
}

section{
	margin:50px auto;
	width:1025px;
	height:150px;	
}

.menu{
	width:100%;
	height:60px;
	background-color:#222;
	font-family:'Arial';	
}
.menu ul{
	list-style:none;
	position:relative;	
}
.menu ul li{
	width:150px;
	float:left;	
}
.menu a{
	padding:20px;
	display:block;
	text-decoration:none;
	text-align:center;
	background-color:#222;
	color:#fff;
}
.menu ul ul{
	position:absolute;
	visibility:hidden;	
}
.menu ul li:hover ul{
	visibility:visible;	
}
.menu a:hover{
	background-color:#f4f4f4;
	color:#555;	
}
.menu ul ul li{
	float:none;
	border-bottom:solid1px #ccc;	
}
.menu ul ul li a{
	background-color:#555;	
}
label[for="bt_menu"]{
	padding:5px;
	background-color:#222;
	color:#fff;
	font-family:"Arial";
	text-align:center;
	font-size:30px;
	cursor:pointer;
	width:50px;
	height:50px;	
}
	#bt_menu{
	display:none;	
	}
	label[for="bt_menu"]{
	display:none;	
	}
	

#conteudo{
	width:100%;
	height:90px;

	
	}
.fixed{
	
		width:100%;
	height:90px;
	background-color:rgba(0,0,0,1);
	
	}
	
		.textoPesquisa{
	

	height:38px;
	margin-top:29px;
	margin-left:40px;
	float:left;
	font-size:30px;
	border-top:solid;
	border-bottom:solid;
	border-color:#FFF;
	width:100%;
	max-width:300px;
	



	
	}
	
.divPesquisa{
	

	margin-left:558px;
	margin-top:29px;
	cursor:pointer;
	border-top:solid;
	border-right:solid;
	border-bottom:solid;
	position:absolute;
	border-color:#FFF;
	width:100%;
	max-width:50px;
	height:38px;


	}
		
.btnPesquisa{
	

	
		width:100%;
	max-width:45px;
	height:30px;	
	margin-top:4px;
	margin-left:3px;
	
	}
			.imgLogin{
		

	
		width:100%;
	max-width:200px;
	height:90px;

	
	}
	
		.login{
	

		margin-left:80px;

		width:100%;
	max-width:200px;
	height:90px;
	float:left;

	

	}
	
		.imgCarrinho{
	
	max-width:50px;
	margin-top:15px;
	width: 100%;
	height:60px;
	

	
	}
	
		.Carrinho{
	
	width:100%;
	max-width:50px;
	height:90px;
	margin-left:30px;
	float:left;
	position:static;
	
	}	
	
	

	
/* CSS Document */



}
@media(max-width:930px){
	
	.meio{
		width:100%;
	max-width:450px;
	height:100%;
	background-color:#d2d2d2;
	border:solid 3px #000000;
	min-height:650px;
	text-align:right;
	margin-top:100px;
	margin-left:80px;
	


	

	

}
	
label[for="bt_menu"]{
		display:block;	
	}
	#bt_menu:checked ~.menu{
		margin-left:0;
	}
	.menu{
		margin-top:5px;
		margin-left: -100%;
		transition:all .4s;	
	}
	.menu ul li{
		width:100%;
		float:none;	
	}
	.menu ul ul{
		position:static;
		overflow:hidden;
		max-height:0;
		transition:all .4s;	
	}
	.menu ul li:hover ul{
		height:auto;
		max-height:200px;
		
	}
	
	.fixed{
	
		width:100%;
	height:200px;
	background-color:rgba(0,0,0,1);
	
	}
	#conteudo{
	width:100%;
	height:200px;

	
	}
		.textoPesquisa{
	

	height:38px;
	margin-top:120px;
	margin-left:-150px;
	float:left;
	font-size:30px;
	border-top:solid;
	border-bottom:solid;
	border-color:#FFF;
	width:100%;
	max-width:400px;
		



	
	}
	
.divPesquisa{
	

	margin-left:468px;
	margin-top:120px;
	cursor:pointer;
	border-top:solid;
	border-right:solid;
	border-bottom:solid;
	position:absolute;
	border-color:#FFF;
	width:100%;
	max-width:50px;
	height:38px;


	}
		
.btnPesquisa{
	

	
		width:100%;
	max-width:45px;
	height:30px;	
	margin-top:4px;
	margin-left:3px;
	
	}
		.imgLogin{
		

	
		width:100%;
	max-width:200px;
	height:90px;
	margin-left:100px;

	
	}
	
		.login{
	

	
		width:100%;
		margin-top:-150px;
	max-width:200px;
	height:90px;
	margin-left:180px;
	float:left;

	

	}
	
		.imgCarrinho{
	
	max-width:50px;
	margin-top:15px;
	width: 100%;
	height:60px;
	

	
	}
	
		.Carrinho{
	
	width:100%;
	max-width:50px;
			margin-top:-150px;

	height:90px;
	margin-left:480px;
	float:left;
	
	}
	
		.logo{
	

	
		width:100%;
	max-width:200px;
	height:90px;
	float:left;
	
	}
	
	
.imglogo{

	
		width:100%;
	max-width:200px;
	height:90px;
	margin-left:50px;
	
	}
		






}

@media(max-width:530px){
		.meio{
		width:100%;
	max-width:310px;
	height:100%;
	background-color:#d2d2d2;
	border:solid 3px #000000;
	min-height:550px;
	text-align:right;
	margin-top:150px;
	margin-left:80px;
	


	

	

}
	
	
label[for="bt_menu"]{
		display:block;	
	}
	#bt_menu:checked ~.menu{
		margin-left:0;
	}
	.menu{
		margin-top:5px;
		margin-left: -100%;
		transition:all .4s;	
	}
	.menu ul li{
		width:100%;
		float:none;	
	}
	.menu ul ul{
		position:static;
		overflow:hidden;
		max-height:0;
		transition:all .4s;	
	}
	.menu ul li:hover ul{
		height:auto;
		max-height:200px;
		
	}
	
	.fixed{
	
		width:100%;
	height:250px;
	background-color:rgba(0,0,0,1);
	
	}
	#conteudo{
	width:100%;
	height:200px;

	
	}
		.textoPesquisa{
	

	height:38px;
	margin-top:120px;
	margin-left:-200px;
	float:left;
	font-size:30px;
	border-top:solid;
	border-bottom:solid;
	border-color:#FFF;
	width:100%;
	max-width:240px;
		



	
	}

.divPesquisa{
	

	margin-left:258px;
	margin-top:120px;
	cursor:pointer;
	border-top:solid;
	border-right:solid;
	border-bottom:solid;
	position:absolute;
	border-color:#FFF;
	width:100%;
	max-width:50px;
	height:38px;


	}
		

		.imgLogin{
		

	
		width:100%;
	max-width:200px;
	height:90px;
	margin-left:100px;

	
	}
	
		.login{
	

	
		width:100%;
		margin-top:-150px;
	max-width:170px;
	height:90px;
	margin-left:47px;
	float:left;

	

	}
	
		.imgCarrinho{
	
	max-width:50px;
	margin-top:15px;
	width: 100%;
	height:60px;
	

	
	}
	
		.Carrinho{
	
	width:100%;
	max-width:50px;
	margin-top:-150px;
	position:relative;
	height:90px;
	margin-left:300px;
	float:left;
	
	}
	
		.logo{
	

	
		width:100%;
	max-width:200px;
	height:90px;
	float:left;
	
	}

.imglogo{

	
		width:100%;
	max-width:130px;
	height:90px;
	margin-left:0px;
	
	}



}





      /* estilos */



</style>
<body>

<div id="conteudo">


	<div class="fixed" id="fixa">
		
        	<div class="logo">
    
    	 <a href="index.php"><img src="imagens/novoLogo.png"  class="imglogo" /></a>
    
    </div>
    
        <form enctype="multipart/form-data">
    
    	<input type="text" id="pesquisa" name="pesquisa" class="textoPesquisa" onkeypress="pesquisaTemp()"/>
        
        <div class="divPesquisa">
       	 <a href="#" onclick=""><img src="imagens/PESQ.png" class="btnPesquisa"/></a>
        </div>
    
    </form>
    
	
        
        	<div class="login">

    
		 <a href="OpcaoEntrar.php"><img src="cadastroo.png" class="imgLogin"/></a>
        

			</div>
            
            
                    
        	<div class="Carrinho">

    
			 <a href="Carrinho.php"><img src="carrinhoo.png" class="imgCarrinho"/></a>
        

			</div>
            
            </div>

    <input type="checkbox" id="bt_menu" />
    <label for="bt_menu">&#9776;</label>
    <nav class="menu">
    	<ul>
        	<li><a href="#">Home</a>
            </li>
            <li><a href="#">Serviços</a>
            </li>
            <li><a href="#">Categorias</a>
            	<ul>	
                	<li><a href="#">MDF</a>
                    </li>
                    <li><a href="#">Canetas</a>
                    </li>
                    <li><a href="#">Acessórios Decoração</a>
                    </li>
                    <li><a href="#">Pincéis</a>
                    </li>
                    <li><a href="#">Tintas</a>
                    </li>
                    <li><a href="#">Ferramentas</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">Contato</a>
            </li>
            <li><a href="#">Quem Somos?</a>
            </li>
    	</ul>
    </nav>


  </div>
  <div class="central1">
<div class="nome">
<div class="text">Produto Exemplo </div>
</div>
<div class="Quantidade">
<div class="textQuantidade">Qtd: 1 </div>

</div>
<div class="subtotal">
	<div class="textFRETE">Subtotal : R$ 184,70</div>
</div>
<div class="frete">
	<div class="textFRETE">Frete : R$ 9,94</div>
</div>
<div class="total">
		<div class="textTotal">Total: R$ 231,62</div>
</div>

</div>

		  

	<div class="meio">
   

          <div class="textcanto"> Dados Cadastrais</div>
                    <div class="textcanto3">Entrega</div>
                                        <div class="textcanto4">Pagamento</div>



    	
      <div class="Dados1">
                 <div class="PrecoEntrega">
                                 <div class="textcanto7">R$ 9,94</div>

					</div>
                    <div class="DiasEntrega">
                                                     <div class="textcanto7">4 dias</div>

                    </div>
                    <div class="PrecoSEDEX">
                                                     <div class="textcanto7">SEDEX</div>

</div>
</div>

  
         <div class="Dados">
                <div class="textcanto6"> Nome: Victor Rodrigues</div>
				<div class="textcanto1">Sexo:Masculino</div>
                <div class="textcanto1">Data de nascimento: Abril 9, 2000</div>
                <div class="textcanto1">Email: vitor6297@gmail.com</div>
                <div class="textcanto1">Telefone celular: (11) 96091-4318</div>
		        <div class="textcanto1">Telefone residencial: (11) 2568-1399</div>
                <div class="textcanto1"> Endereço: Rua Alfred Robert, 369</div>

        
        </div>
        
                 <div class="Dados2">
				                 <div class="FotoCartao">
                                 <img src="bandeiras-de-cartao.png" width="249px" height="40px">
        
        </div>
 <input type="numCartao" name="numCartao" placeholder="Número do cartão"></br></br>
  <input type="Outros" name="numCartao" placeholder="Validade"></br></br>
  <input type="Outros" name="numCartao" placeholder="Nome do titular"></br></br>
  <input type="Outros" name="numCartao" placeholder="Cod de Segurança"></br></br>
  <input type="Outros" name="numCartao" placeholder="Cod de Segurança"></br></br>
<input type="NumCartao" name="Parcela" list="Parcela" placeholder="Escolha...">
<datalist id="Parcela" >

 <option value="À vista">
    <option value="2x de R$ 82,97 sem juros">
    
    <option value="3x de R$ 55,31 sem juros">
    <option value="4x de R$ 41,48 sem juros">
    <option value="5x de R$ 33,19 sem juros">
    <option value="6x de R$ 27,66 sem juros">
    <option value="7x de R$ 23,70 sem juros">
    <option value="8x de R$ 20,74 sem juros">
    <option value="9x de R$ 18,44 sem juros">
    <option value="10x de R$ 16,59 sem juros">
    <option value="11x de R$ 15,08 sem juros">
        <option value="12x de R$ 13,83 sem juros">


</datalist>
               <input type="submit" name="bt_gravar" value="Finalizar compra"/> <br / >

 
        
        </div>
 
   			
               
				
   
   






   
   
   </div>  
</body>
</html>