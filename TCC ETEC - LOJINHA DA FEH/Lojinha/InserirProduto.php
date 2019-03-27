<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>

<body>
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
    background-color: black; 
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	margin-left:0px;
	margin-top:50px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: #d2d2d2; 
    color: black; 
    border: 2px solid #000000;
}

.button1:hover {
    background-color: black;
    color: white;
}

/*fim.////////////////////////////////*/
input[type="text"]{
	width:300px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
			border-radius:8px;
		border-style:none;
		margin-right:286px;
		margin-top:-15px;
	
	
}
input[type="preco"]{
	width:165px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
			border-radius:8px;
		border-style:none;
		margin-right:414px;
	
}
input[type="number"]{
	width:130px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
			border-radius:8px;
		border-style:none;
		margin-right:450px;
		margin-top:-20px;
	
}
input[type="file"]{
	width:400px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:15px;
			border-radius:8px;
		border-style:none;
		margin-right:180px;
		margin-top:-20px;
	
}

input[type="descricao"]{
	width:200px;
	height:80px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
			border-radius:8px;
		border-style:none;
		margin-right:380px;
		
	
}
input[type="fornecedor"]{
	width:260px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
			border-radius:8px;
		border-style:none;
		margin-right:320px;
	
}

input[type="tipo"]{
	width:200px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
			border-radius:8px;
		border-style:none;
		margin-right:380px;
}
input[type="cep"]{
	width:200px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
			border-radius:8px;
		border-style:none;
		margin-right:380px;
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
	margin-left:258px;
	}

	.textcanto1{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:353px;
	}
	.textcanto2{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:355px;
	}
		.textcanto3{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:308px;
	}
		.textcanto4{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:365px;
	}
			.textcanto5{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:323px;
	}
			.textcanto6{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:310px;
	}
				.textcanto7{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin-bottom:10px;
	margin-left:272px;
	}

			.bt{
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin:20px 80px 10px 0px;



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
	
.txtDescricao{

	font-size:12px;
	float:left;
	margin-left:20px;
	min-width:300px;
	min-height:110px;
	max-width:300px;
	max-height:110px;
	margin-bottom:15px;	
}
	

	
	}



</style>

</head>
	<div class="fixed" id="fixa">
		
    
 	 <a href="Admin.php"><img src="imagens/novoLogo.png"  class="imglogo" /></a>
    
    


            
            </div>


</style>
<body div class="fundo">

<div class="central">
<form method="post" enctype="multipart/form-data" action="cadastrarProduto.action.php">
<div class="textcanto1"> Nome</div><input type="text" name="nomeProduto"  placeholder="Digite o nome do produto" /><br /></br>
<div class="textcanto2"> Preço</div><input type="preco" name="precoProduto" placeholder="00.00" /> <br /></br>
<div class="textcanto3"> Quantidade</div><input type="number" name="quantidadeProduto" placeholder="0" /><br /><br/><br/>
<div class="textcanto4"> Foto</div><input type="file" name="fotoProduto"  /><br /></br></br>
<div class="textcanto5"> Descrição</div><textarea name="descricaoProduto"  class="txtDescricao"></textarea><br /></br></br>
<div class="textcanto6"> Fornecedor</div><input type="fornecedor" name="fornecedorProduto" placeholder="Digite o fornecedor do produto" /><br><br><br>
<div class="textcanto7"> Tipo de Produto</div><select name="tipoProduto" style="width:200px; margin-right:382px; border-radius:8px; border-style:none;">
	<option value="">Selecione o Tipo</option>
	<?php
	
	include_once "Classes/Connection.class.php";
	
	$con = new Connection();
	
	$busca = "Select nome from tbltiposprodutos";
	
	$lista = mysqli_query($con->con, $busca);
	
	while($listaa = mysqli_fetch_assoc($lista)){
		
			echo "<option value=$listaa[nome]>$listaa[nome]</option>";
	}
	?>
    </select>

    <input type="submit" class="button button1" name="btnInserir">
</form>
</div>



<body>
</body>
</html>