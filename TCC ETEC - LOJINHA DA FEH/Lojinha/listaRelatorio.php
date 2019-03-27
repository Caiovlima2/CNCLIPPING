<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="Admin.css" rel="stylesheet" type="text/css" /> 
<script src="jquery/jquery-1.8.1.min.js"></script>
<title>Relatórios</title>
</head>

<style>
body

	{
		background-color:#666666;
			margin:0;


	
	}
#menu ul {
	padding:0px;
	
	margin:0px;
	margin-top:-120px;
	background-color:;
	list-style:none;
	margin-left:300px;
	
	
	
}
#menu ul li { display: inline; 
}
#menu ul li a {
	padding: 2px 10px;
	width:60px;

	display: inline-block;
	transition: background-color 1s , color 1s , border-bottom 1s; 
	transition-timing-function: ease-out;
	margin-left:100px;
	
	margin-right:50px;
	margin-top:13px; 
	/* visual do link */
	/*background-image:url(gamer.png);*/
	color: #fff;
	text-decoration: none;
	border-bottom:3px solid #fff;
	
}
#menu ul li a:hover {
	background-color:#000;
	color: #FFF;
	border-bottom:3px solid #000;
	width:60px;

	
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
		
		

			.Inserir{
	

	
		width:100%;
	max-width:200px;
	height:90px;
	float:left;
	background-color:rgba(255,255,255,1);
		

	}
	
	
		

.fundo{
	width:100%px;
	height:400px;
	background-color: #FFFFF0;

}
.texto{
	
	font-family:calibri;
	font-style:italic;
	font-size:20px;
    text-align: start;
 	text-decoration:blink;
	margin: 120px 10px 40px 0px;
	color:#FFF;
	}
	 img{
	width:200px;
	height:120px;
	float: left;
}
.mine{
	background-color:#FFF;
	width:80px;
	height:80px;
	
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

.slcPesquisa{

	width: 300px;
	height: 50px;
	margin-top: 10px;
	margin-left: 20px;
	font-size: 20px;

}

.txtPesquisa{

	font-size: 20px;
	float:left;
	margin-left: 100px;

}

.btnEnviar{

	width: 200px;
	height: 50px;
	margin-top: -10px;

}

.quadrosFmr{

	width: 1300px;
	float:left;
	margin-left: 70px;
	margin-top:10px;
	background-color:white;

}

.txtFmr{

	font-size: 20px;
	float:left;
	margin-left: 50px;


}

.filtro{
	
	margin-top:10px;
	width:1000px;
	height:50px;
	float:left;
	position:absolute;
	margin-left:400px;
	
}

</style>

<script>

 $(document).ready(function() {    
		
		$("#filtroProduto").hide(0);
		$("#filtroCliente").hide(0);
		$("#filtroVenda").hide(0);
	
});

function verificaFiltro(){

	var count;
	var texto;


}

function mudaOpcao(){
	
	if(document.getElementById('optProduto').selected){
	
	escondeDiv();
	$("#filtroProduto").fadeIn(200);
			
	}else if(document.getElementById('optCliente').selected){
	
	escondeDiv();
	$("#filtroCliente").fadeIn(200);
			
	}else if(document.getElementById('optVenda').selected){
		
	escondeDiv();
	$("#filtroVenda").fadeIn(200);
		
	}
		
}

function escondeDiv(){
	
		$("#filtroProduto").hide(0);
		$("#filtroCliente").hide(0);
		$("#filtroVenda").hide(0);
	
}

</script>

<body>
	
<div class="fixed" id="fixa">
    
		<a href="index.php"><img src="imagens/novoLogo.png"  class="imglogo" /></a>
 
        <a href="Listar.php"> <button class="button" style="vertical-align:middle"><span>Listar </span></button></a>

 	    <a href="InserirProduto.php"><button class="button" style="vertical-align:middle"><span>Inserir </span></button></a>
    
        <a href="AlterarProduto.php"><button class="button" style="vertical-align:middle"><span>Alterar </span></button></a>

        <a href="listaRelatorio.php"><button class="button" style="vertical-align:middle"><span>Relatório </span></button></a>

         
    
</div>


<div style="margin-bottom:110px;">
	
	<form method="post" enctype="multipart/form-data">
		
		<p class="txtPesquisa">Deseja listar qual tabela</p>

		<select name="tipoPesquisa" class="slcPesquisa" onchange="mudaOpcao()">
	
    		<option value="nada">Seleciona qual relatório deseja fazer</option>
			<option value="Produto" id="optProduto">Produtos</option>
			<option value="Cliente" id="optCliente">Clientes</option>
			<option value="Venda" id="optVenda">Vendas</option>

		</select>

		<input type="submit" name="btnEnviar" class="btnEnviar" value="Listar">
       
		<input type="submit" name="btnRelatorio" class="btnEnviar" value="Gerar Relatório Cadastral">

		<input type="submit" name="btnRelatorioFiltrado" class="btnEnviar" value="Gerar Relatório Filtadro">		
        
   		
            
    </form>
            
        

</div>

<?php 
	
	include_once "Classes/Connection.class.php";
	include_once "Produto.Class.php";

	$con = new Connection();
	$produto = new Produto();

	if(isset($_POST['btnEnviar'])){

		if($_POST['tipoPesquisa'] == "Produto"){
		$busca = $produto->retornaProduto();

		$produto->listaRelatorio($busca);
		}

	}

		


	
?>

</body>

</html>
