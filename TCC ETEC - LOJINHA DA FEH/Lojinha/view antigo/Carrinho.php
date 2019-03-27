<?php 
if(!isset($_SESSION)){session_start();}
include_once "../Classes/Carrinho.class.php";
include_once "../Classes/Login.class.php";

$log = new Login();
$car = new Carrinho();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Carrinho</title>
<script>
function carregar(pagina){
		$.ajax({url:pagina,
				success: function(retorno){
				$('#conteudo').html(retorno);
		}});
}

</script>
<style>
@charset "utf-8";


body

	{
		background-color:#666666;
			margin:0;


	
	}

.fixed{
	
		width:100%;
	height:90px;
	background-color:#222;

	
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
		

		

.fundo{
	width:100%px;
	height:400px;
	background-color: #FFFFF0;

}

	 img{
	width:200px;
	height:120px;
	float: left;
}

/*botao/////////////////////////////////////////////////*/

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #222;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  margin-left:750px;
  padding: 20px;
  width: 400px;
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
/*fim.////////////////////////////////*/
.central{
	width:900px;
	height:100px;
	margin:0 auto;
	background-color:#FFFFFF;
	border:solid 3px #000000;
	padding:30px;
	text-align:right;
	margin-top:110px;
	margin-left:150px;
	

	

}
.central1{
	width:900px;
	height:100px;
	margin:0 auto;
	background-color:#FFFFFF;
	border:solid 3px #000000;
	padding:30px;
	text-align:right;
	margin-top:50px;
	margin-left:150px;
	

	

}

		.textPro{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:30px;
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
		.text{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	
	margin-top:30px;
	color:#000000;
	
	}
.produtoFoto{
	height:99px;
	width:100px;
			float:left;
	}
	.produtoNome{
	background-color:#FFFFFF;
	height:99px;
	width:250px;
	float:left;
	margin-left: 130px;
	margin-right: -80px;
	}
.quantidade{
	background-color:#FFFFFF;
	height:99px;
		width:250px;
		float:left;	
	}
.valorUnita{
		background-color:#FFFFFF;
	height:99px;
		width:250px;
		float:left;
	
	}
	
	.subtotal{
		background-color:#FFFFFF;
	height:99px;
		width:250px;
		float:left;
	
	}
		.frete{
		background-color:#FFFFFF;
	height:99px;
		width:250px;
		float:left;
	
	}

	
			.total{
		background-color:#FFFFFF;
	height:99px;
		width:150px;
		float:left;
	
	}
	
				.calcFRETE{
		background-color:#FFFFFF;
	height:99px;
		width:250px;
		float:left;
	
	}
	
	
	
	input[type="quantidade"]{
	width:10px;
	height:20px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;


		
}
	input[type="text"]{
	width:130px;
	height:15px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	float:left;
	margin-left:-120px;
	margin-top:65px;


		
}
/*/////////////////////////////////////////botao*/
.button5 {
    background-color:#F8E48E; /* Green */
    border: none;
    color: white;
	width:25px;
	height:25px;

    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
	margin-top:30px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button6 {
    background-color: white; 
    color: black; 
    border: 2px solid #F8E48E;
}
.button6:hover {
    background-color: #F8E48E;
    color: white;
}

.button7 {
    background-color: #F8E48E; /* Green */
    border: none;
    color: white;
	width:25px;
	height:25px;
	margin-right:118px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
	margin-top:30px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button8 {
    background-color: white; 
    color: black; 
    border: 2px solid #F8E48E;
}
.button8:hover {
    background-color: #F8E48E;
    color: white;
}
.button9 {
    background-color: #F8E48E; /* Green */
    border: none;
    color: black;
	width:55px;
	height:22px;
	margin-right:52px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
	margin-top:64px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button10 {
    background-color: black; 
    color: #AAAAAA; 
    border: 2px solid #F8E48E;
}
.button10:hover {
    background-color: #F8E48E;
    color: black;
}
.button11 {
    background-color: #F8E48E; /* Green */
    border: none;
    color: black;
	width:200px;
	height:50px;
	margin-top:40px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
	margin-left:920px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button12 {
    background-color: black; 
    color: #000000; 
    border: 2px solid #F8E48E;
}
.button12:hover {
    background-color: #F8E48E;
    color: white;
}
/*/////////////////////////////////////////botao*/
	.textCarrinho{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:38px;
	margin-bottom:10px;
	margin-left:30px;
	margin-top:-100px;
	color:#AAAAAA;
	
	}

	.txtQuantidade{

		width: 50px;
		text-align: center;
		cursor: not-allowed;



	}
</style>
</head>

<body div class="fundo">
    
	<div class="fixed" id="fixa">
    
		 <a href="index.php"><img src="imagens/novoLogo.png"  class="imglogo" /></a>
         
          <a href="index.php"> <button class="button" style="vertical-align:middle"><span>Continuar Comprando </span></button></a>

</div>

<div class="central">
<div class="textCarrinho">Carrinho</div>
<div class="produtoFoto">
</div>
<div class="produtoNome">
<div class="textPro">Produto exemplo</div>
</div>            
<div class="quantidade">
<input type="submit" class="button5 button6" value="-
">
<input type="quantidade" name="quantidadeProduto" style="width: 50px; text-align: center; cursor: not-allowed;" placeholder="0" />
<input type="submit" class="button7 button8" value="+">
</div>      
<div class="valorUnita">
<div class="text">R$ 109,09</div>
</div>
      </div>      
<div class="central1">
<div class="subtotal">
<div class="text">Subtotal: R$ 219,80</div>
</div>
<div class="frete">
<div class="textFRETE">Calcular o frete:</div>
<input type="text" /><button class="button9 button10">Calcular</button>
</div>
<div class="calcFRETE">
	<div class="textFRETE">Cálculo do frete</div>
</div>
<div class="total">
		<div class="text">Total: R$ 231,62</div>
</div>
</div>

<button class="button11 button12">Concluir compra</button>



<?php 	
	
	if(isset($_GET['acao']) && $_GET['acao'] == "aumentar" && isset($_GET['codigo'])){

		$codigo = $_GET['codigo'];
		$car->aumentarQuantidade($codigo);

	}

	if(isset($_GET['acao']) && $_GET['acao'] == "diminuir" && isset($_GET['codigo'])){

		$codigo = $_GET['codigo'];
		$car->diminuirQuantidade($codigo);

	}

	if(isset($_GET['acao']) && $_GET['acao'] == "add" && isset($_GET['codigo'])){

		$codigo = $_GET['codigo'];
		$car->adicionarProduto($codigo);
	}

	if(!isset($_SESSION['carrinho']) || count($_SESSION['carrinho']) == 0){

	echo "<h1 style=text-align:center>Carrinho Vazio<h1>";
}else{

	$car->mostraCarrinho();

}

?>

<body>
</body>
</html>