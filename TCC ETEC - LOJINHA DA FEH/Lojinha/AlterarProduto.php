<?php include_once "Produto.class.php"; include_once "Classes/Connection.class.php";?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alterar produto</title>

<body>
<style type="text/css">
body {
 padding: 0;
	background-color: #FFFFF0;
	    background-size: cover;
	margin: 0;
	
}

.fundo{

	
	}
.central{
	width:400px;
	height:100%;
	margin:0 auto;
	background-color:#d2d2d2;
	border:solid 3px #000000;
	margin-right:485PX;
	padding:30px;
	text-align:right;
	margin-top:50px;
	

	

}


input[type="text"]{
	width:200px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
		border-radius:8px;
		border-style:none;

	
	
}
input[type="date"]{
	width:200px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
		border-radius:8px;
				border-style:none;


	
}
input[type="tel"]{
	width:200px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
		border-radius:8px;
				border-style:none;


	
}
input[type="password"]{
	width:200px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
		border-radius:8px;

}
input[type="submit"]{
	width:250px;
	text-align:center;
	margin-top:10px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	background-color:#FFF;
		border-radius:8px;

}
input[type="number"]{
	width:200px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
		border-radius:8px;
				border-style:none;


}
.div-opc{
	float:left;
	width:60px;
}
.textcanto{
	float:left;
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;


	}

			.bt{
    font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	margin:20px 80px 10px 0px;



	}



	
		

	
		.ibagem{
	
	width:225px;
	height:215px;
	background-image:url(carretel-da-linha-e-das-agulhas-16866094.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	margin-left:50px;

	
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



	}
a.classe1:link, a.classe1:visited {
	text-decoration:underline ;
	color:#000000;
	}
a.classe1:hover {
	text-decoration: underline; 
	color: #FFFFFF;
}
a.classe1:active {
	text-decoration: none
	}



</style>

</head>
	<div class="fixed" id="fixa">
		 <a href="index.php"><img src="imagens/novoLogo.png"  class="imglogo" /></a>
    
    


            
            </div>

<body>
<div class="fundo">

</div>    

<div class="central">
<?php
	
	$produto = new Produto();
	$con = new Connection();
	$codigo = $_GET['codigoProduto'];

	$sql = "select * from tblEstoque where codigoProduto = '" . $codigo . "';";
		
	$produto = mysqli_fetch_assoc(mysqli_query($con->con, $sql));
	
?>

<form method="post" enctype="multipart/form-data" action="alteraProduto.php">
<div class="textcanto"> Código :</div><input type="text" name="codigoProduto" value="<?php echo $produto['codigoProduto']?>" /><br /></br> 
<div class="textcanto"> Nome :</div><input type="text" name="nomeProduto" value="<?php echo $produto['nomeProduto']?>"/><br /></br>
<div class="textcanto"> Preço :</div><input type="text" name="precoProduto" value="<?php echo number_format($produto['precoProduto'], 2, ',', '.')?>"  /><br /></br>
<div class="textcanto"> Quantidade :</div><input type="number" name="quantidadeProduto" value="<?php echo $produto['quantidadeProduto']?>"/><br /><br/>
<div class="textcanto"> Descrição :</div><input type="text" name="descricaoProduto" value="<?php echo $produto['descricaoProduto']?>" /><br /></br>
<div class="textcanto"> Fornecedor :</div><input type="text" name="fornecedorProduto" value="<?php echo $produto['fornecedorProduto']?>"><br><br>
<div class="textcanto"> Foto :</div><input type="file" name="fotoProduto" /><img src="<?php echo $produto['imagemProduto']?>" class="ibagem"><br /></br>
<div class="textcanto"> Tipo de Produto</div>
<select name="tipoProduto" style="width:200px; height:20px; margin-right:2px; border-radius:8px; border-style:none;">
	<option value=""><?php echo "$produto[tipoProduto]" ?></option>
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


<div 
</div>
</div>
<div class="bt"><input type="submit" name="btnInserir" value="Alterar" /><br / >
</form>
</div>

<?php
if(isset($_POST['btnInserir'])){
	header('location:Admin.php');
}
?>


<body>
</body>
</html>