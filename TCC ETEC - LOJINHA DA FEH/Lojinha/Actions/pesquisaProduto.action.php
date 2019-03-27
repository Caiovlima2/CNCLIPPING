<?php 

	$pesquisa = $_POST['pesquisa'];

	echo $pesquisa;

	header("location:../View/Principal.php?pesquisa=$pesquisa");

?>