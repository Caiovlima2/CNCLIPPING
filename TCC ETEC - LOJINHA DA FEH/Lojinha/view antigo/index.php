<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lojinha da Feh</title>
<script src="../jquery-3.1.1.js"></script>
<link rel="stylesheet" type="text/css" href="hover.css" />
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<!--<link rel="stylesheet" type="text/css" href="index.css" />-->

<script src="../efeitos.js"></script>

<script>
</script>

<style>


.button2 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
	float:left;
	height:100%;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: black; 
    color: white; 
}

.button1:hover {
    background-color: black;
    color: rgba(255,204,0,1);
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 20px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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


	#bt_menuu{
	display:none;	
	}
<!----------------------------------------------------------
label[for="bt_menuu"]{
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

.menuu{
	width:100%;
	height:10px;
	background-color:#000000;
	font-family:'Arial';	
}
.menuu ul{
	list-style:none;
	position:relative;
		
}
.menuu ul li{
	width:200px;
	height:75px;
	float:left;	
}
.menuu a{
	padding:20px;
	display:block;
	text-decoration:none;
	text-align:center;
	background-color:#000000;
	color:#fff;
}
.menuu ul ul{
	position:absolute;
	visibility:hidden;	
	
}
.menuu ul li:hover ul{
	visibility:visible;	
}
.menuu a:hover{
	background-color:#f4f4f4;
	color:#555;	
		color:rgba(51,0,51,1);

}
.menuu ul ul li{
	float:none;
	border-bottom:solid1px #ccc;	
}
.menuu ul ul li a{
	background-color:#555;	
}
.NomeColor a:hover{
	background-color:#f4f4f4;

		color:rgba(51,0,51,1);

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
	.PrimeiraBarra{
	
		width:100%;
	height:40px;
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
	max-width:150px;
	height:70px;
	margin-left: -20px;
	margin-top: -20px;
	margin-right: 70px;
	
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
	max-width:1250px;
	height:100%;
	background-color:#d2d2d2;
	border:solid 3px #000000;
	margin-top:30px;
	margin-left:80px;
	float:left;	


	

	

}

	.box-games{	
	width:100%;
	max-width:250px;
	height:100%;
	
	background-color:#28536B;
	border:solid 3px  #FFFFF0;
	padding:20px;
	color:white;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:18px;
	text-align:center;
	float:left;
	margin:5px;
	border-top-left-radius:20px;
	border-bottom-right-radius:20px;
	cursor:pointer;
	
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
	
	
@media (min-width : 2100px) {
	

	.meio{
	width:100%;
	height:100%;
	background-color:#d2d2d2;
	border:solid 3px #000000;
	text-align:right;
	margin-top:120px;
	margin-left:-800px;
	
	


	

	

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
	width:200px;
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
	margin-left:20px;
	float:left;
	position:static;
	
	}	
	
	

	
/* CSS Document */



}
@media(max-width:930px){
	
	.meio{
		width:100%;
	max-width:400px;
	height:100%;
	background-color:#d2d2d2;
	border:solid 3px #000000;
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
	max-width:390px;
		



	
	}
	
.divPesquisa{
	

	margin-left:458px;
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
			margin-top:15px;


	
	}

	

		.login{
	
	margin-left:-195px;

	
	

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
	margin-left:463px;
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
			margin-top:10px;

	
	}
		






}

@media(max-width:530px){
	
.PrimeiraBarra{
	
		width:100%;
	height:40px;
	background-color:rgba(0,0,0,1);
	position:inherit;
	}
	
	.button2 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
	float:left;
	height:100%;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: black; 
    color: white; 
}

.button1:hover {
    background-color: black;
    color: rgba(255,204,0,1);
}
		.meio{
width:310px;
	height:100%;
	background-color:#d2d2d2;
	border:solid 3px #000000;
	text-align:right;
	margin-top:170px;
	margin-left:40px;
	


	

	

}
	
	
label[for="bt_menu"]{
		display:block;	
					position:absolute;

	}
	#bt_menu:checked ~.menu{
		margin-left:0;

	}
	.menu{
		margin-top:5px;
		margin-left: -100%;
		transition:all .4s;	
		
					position:absolute;

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
	min-width:370px;
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
				position:absolute;

		



	
	}

.divPesquisa{
	

	margin-left:255px;
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
	max-width:190px;
	height:90px;
		margin-top:15px;
		position:absolute;

	


	
	}
	
		.login{
	
	margin-left:136px;
	
		position:absolute;

	

	}
	
		.imgCarrinho{
	
	max-width:50px;
	margin-top:15px;
	width: 100%;
	height:60px;
		position:absolute;


	
	}
	
		.Carrinho{
	
	width:100%;
	max-width:50px;
	margin-top:-80px;
	position:static;
	height:90px;
	margin-left:310px;
	float:left;
	
	}
	

.imglogo{

	
		width:100%;
	max-width:130px;
	height:90px;
	margin-left:-10px;
	margin-top:10px;
			position:absolute;

	
	}




}
@media(max-width:1300px){
	

	.meio{
	width:100%;
	max-width:800px;
	height:100%;
	background-color:#d2d2d2;
	border:solid 3px #000000;
	text-align:right;
	margin-top:120px;
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
	margin-left:20px;
	float:left;
	position:static;
	
	}	
	
	

	
/* CSS Document */



}
@media(max-width:930px){
	
	.meio{
		width:100%;
	max-width:400px;
	height:100%;
	background-color:#d2d2d2;
	border:solid 3px #000000;
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
	max-width:390px;
		



	
	}
	
.divPesquisa{
	

	margin-left:458px;
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
			margin-top:15px;


	
	}

	

		.login{
	
	margin-left:-195px;

	
	

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
	margin-left:463px;
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
	margin-left:30px;

	
	}
		






}

@media(max-width:530px){
	
.PrimeiraBarra{
	
		width:100%;
	height:40px;
	background-color:rgba(0,0,0,1);
	position:inherit;
	}
	
	.button2 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
	float:left;
	height:100%;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: black; 
    color: white; 
}

.button1:hover {
    background-color: black;
    color: rgba(255,204,0,1);
}
		.meio{
width:310px;
	height:100%;
	background-color:#d2d2d2;
	border:solid 3px #000000;
	text-align:right;
	margin-top:170px;
	margin-left:40px;
	


	

	

}
	
	
label[for="bt_menu"]{
		display:block;	
					position:absolute;

	}
	#bt_menu:checked ~.menu{
		margin-left:0;

	}
	.menu{
		margin-top:5px;
		margin-left: -100%;
		transition:all .4s;	
					position:absolute;

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
	min-width:370px;
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
				position:absolute;

		



	
	}

.divPesquisa{
	

	margin-left:255px;
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
	max-width:190px;
	height:90px;
		margin-top:15px;
		position:absolute;

	


	
	}
	
		.login{
	
	margin-left:136px;
	
		position:absolute;

	

	}
	
		.imgCarrinho{
	
	max-width:50px;
	margin-top:15px;
	width: 100%;
	height:60px;
		position:absolute;


	
	}
	
		.Carrinho{
	
	width:100%;
	max-width:50px;
	margin-top:-80px;
	position:static;
	height:90px;
	margin-left:310px;
	float:left;
	
	}
	


}



      /* estilos */




</style>

</head>

<body>

<div class="container" style="background-color: black; width: 100%	">
  <form class="navbar-form navbar-left" role="search" style="height: 50px; width: 100%; margin-top: 20px;">
<img src="../imagens/LogoLojinha.png" class="img-responsive imglogo" alt="Responsive image" style="float: left;">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Pesquise" name="pesquisa" style="width: 500px;">
  </div>
  <button type="submit" class="btn btn-danger" name="btnPesquisar">Pesquisar</button>


	<button type="button" class="btn btn-danger" style="margin-left: 150px;" data-toggle="modal" data-target="#modalLogin">Logar</button>
	<a href="CadastroCliente.php"><button type="button" class="btn btn-danger" >Cadastar</button></a>

	<?php
	if(!isset($_SESSION)){
	?>
	<?php
	}else if($_SESSION["logado"] == "sim"){
	?>
	<span class="label btn-danger" style="position: absolute; margin-left: -158px; height: 34px;"><p style="margin-top: 10px;" id="lblNome">Olá NOME</p></span>
	<?php
	}
	?>
	
	<?php
	if(!isset($_SESSION)){
	?>
	<?php
	}else{
	?>
	<div class="btn-group" style="position: absolute; margin-left: -83px;" id="btnOpcao">
  <button type="button" class="btn dropdown-toggle  btn-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Mais Opções <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Minha Conta</a></li>
    <li><a href="#">Meus Pedidos</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Sair</a></li>
  </ul>
</div>
	<?php
	}
	?>

	

	<a href="#"><img src="../imagens/carrinho.fw.png" class="img-responsive imglogo" alt="Responsive image" style="float: right; width: 50px; height: 30px; margin-top: 2px; margin-right: 70px;"></a>

	</form>

</div>

     <?php
        
		if(isset($_POST['btnPesquisar'])){
		
			
				header("location:index.php?pesquisa=$_POST[pesquisa]");
		}
		
		?>
	

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

	<div class="meio">

    <?php

        include_once("../Classes/Produto.class.php");
		include_once "../Classes/Connection.class.php";
	
	if(isset($_GET['pesquisa'])){
	
	
	$con = new Connection();
	
	$produto = new Produto();
	
	$sql = "select * from tblEstoque where nomeProduto like '%$_GET[pesquisa]%' or tipoProduto like '%$_GET[pesquisa]%'";
	
	$busca = mysqli_query($con->con, $sql);
	
	$produto->listaProduto($busca);	
		
	}else{
		
		 include_once("../Classes/Login.class.php");

        $log = new Login();
		
        $produto = new Produto();

        $busca = $produto->retornaProduto();

    	$produto->listaProduto($busca);    
    
	}
       


    ?>

   </div>  
	
</body>
</html>