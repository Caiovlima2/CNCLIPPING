<?php
	
	include_once "../Classes/Connection.class.php";

	class Produto{		
		
		private $idProduto;
		private $precoProduto;
		private $quantidadeProduto;
		private $nomeProduto;
		private $imagemProduto;
		private $descricaoProduto;
		private $pasta;
		private $nomeFoto;
		private $tipoProduto;
		private $imagemMudadaProduto;
		private $pesquisa;
		private $estoquemin;
		
		function adicionarProduto(){
				
				
				$this->pasta = "../bdFotos/";
				$this->nomeFoto = md5(time()). ".jpg";
				$this->nomeFinal = $this->pasta.$this->nomeFoto;
				move_uploaded_file($this->imagemProduto['tmp_name'],$this->nomeFinal);

				$con = new Connection();
				
				$sql = "INSERT INTO tblestoque (precoProduto, 
				quantidadeProduto, 
				nomeProduto, 
				descricaoProduto,
				imagemProduto, 
				tipoProduto, 
				ativacaoProduto,
				estoquemin) 

				 VALUES 
				
				('$this->precoProduto', 
				'$this->quantidadeProduto', 
				'$this->nomeProduto', 
				'$this->descricaoProduto', 
				'$this->nomeFinal',
				'$this->tipoProduto',
				'1',
				'$this->estoquemin' )";
				
				if(mysqli_query($con->con, $sql)){				

				echo "<script>alert('Produto cadastrado com sucesso!')</script>";								
				header('refresh:0;url=../View/Admin.php');

				}else{
					
				echo "<script>alert('Erro ao cadastrar produto! Tente Novamente.')</script>";
				header("refresh:0;../View/Admin.php");
					
				}
				
		}
			
		function alterarProduto(){
			
			$con = new Connection();

			if(!empty($this->imagemMudadaProduto)){
			
				$this->pasta = "bdFotos/";
				$this->nomeFoto = md5(time()). ".jpg";
				$this->nomeFinal = $this->pasta.$this->nomeFoto;
				move_uploaded_file($this->imagemMudadaProduto['tmp_name'],$this->nomeFinal);
				
				$sql = "update `tblestoque` set `nomeProduto` = '$this->nomeProduto', `precoProduto` = '$this->precoProduto', `quantidadeProduto` = '$this->quantidadeProduto', `descricaoProduto` = '$this->descricaoProduto', `tipoProduto` = '$this->tipoProduto', `imagemProduto` = '$this->nomeFinal', `estoquemin` = '$this->estoquemin' where `codigoProduto` = '$this->idProduto'";

				

				if(mysqli_query($con->con, $sql)){

					echo "<script>alert('Produto foi alterado com sucesso!')</script>";
					header('refresh:0;url=../View/listaProduto.php');

				}else{

					echo "<script>alert('Erro ao salvar alteração, aguarde alguns instantes e tente novamente!')</script>";
					header('refresh:0;url=../View/listaProduto.php');

				}

				
			}else{
			
			$sql = "update tblEstoque set nomeProduto = '$this->nomeProduto', precoProduto = '$this->precoProduto', quantidadeProduto = '$this->quantidadeProduto', descricaoProduto = '$this->descricaoProduto', tipoProduto = '$this->tipoProduto', estoquemin = '$this->estoquemin' where codigoProduto = '$this->idProduto'";
			
				if(mysqli_query($con->con, $sql)){

					echo "<script>alert('Produto alterado com sucesso!')</script>";
					header('refresh:0;url=../View/listaProduto.php');

				}else{

					echo "<script>alert('Falha ao alterar produto tente novamente mais tarde!')</script>";
					header('refresh:0;url=../View/listaProduto.php');

				}

				header('refresh:0;url=../View/listaProduto.php');
			}
			
		}
		
		function excluirProduto(){
		
		$con = new Connection();
				
		$busca = "Select * from `tblestoque` where `codigoProduto` = '$this->idProduto'";
		$produto = mysqli_query($con->con, $busca);
		$produto = mysqli_fetch_assoc($produto);
		
		$delete = "Delete from `tblestoque` where `codigoProduto` = '$this->idProduto';";
		
	
		if(mysqli_query($con->con, $delete)){
			unlink($produto['imagemProduto']);
		echo "<script>alert('Produto excluido com sucesso do sistema!')</script>";
			}						
			
		header('refresh:0;url=Listar.php');
		
		}
		
		function listaPesquisa($pesquisa){
		
		$con = new Connection();
		
		$sql = "select * from tblEstoque where nome like '%$this->pesquisa%' or tipoProduto like '%$this->pesquisa%'";
		
			
		if($pesquisa = mysqli_query($con->con, $sql)){
		
		return $pesquisa;

		};
		
		
		}
			
		function retornaProduto(){

			$con = new Connection();

			$busca = "SELECT * FROM tblEstoque ORDER BY codigoProduto";
			
			$busca = mysqli_query($con->con, $busca);

			return $busca;
			
		}

		function listaRelatorio($busca){

			while($produto = mysqli_fetch_assoc($busca)){
				
				echo "<div class=quadrosFmr>
					<p class=txtFmr> $produto[nomeProduto] </p>
					<p class=txtFmr> $produto[tipoProduto] </p>	
					<p class=txtFmr> $produto[quantidadeProduto] </p>
					<a href=RelatorioDetalhado.php?tabela=$_POST[tipoPesquisa]&codigoProduto=$produto[codigoProduto]><p class=txtFmr style=cursor:pointer;> Gerar Relatório Detalhado</p></a>
					

				</div>";

			}

		}

		function relatorioDetalhado($codigo){

		$data = date("d/m/Y", mktime(gmdate("d"), gmdate("m"), gmdate("Y")));
		$hora = date("H:i:s", mktime(gmdate("H")-3, gmdate("i"), gmdate("s")));

			$con = new Connection();

			$produto = new Produto();

			$sql = "select * from tblEstoque where codigoProduto = '" . $codigo . "'";

			$busca = mysqli_query($con->con, $sql);

			$busca = mysqli_fetch_assoc($busca);

			echo "<img src=imagens/novoLogo.png class=imgRelatorio>
			<div class=nomeProduto>Nome : $busca[nomeProduto]</div>
			<div class=quantidadeProduto>Quantidade : $busca[quantidadeProduto]</div> 
			<div class=precoProduto>Preço do Produto: ". number_format($busca['precoProduto'],2, ',', '0') ."</div>
			<div class=descricaoProduto>Descrição : $busca[descricaoProduto]</div>
			<div> <img src=".$busca['imagemProduto']." class=imagem/></div>
			$data
			$hora



			";

		}
		
		function listaProduto($busca){
			
			while($quadro = mysqli_fetch_assoc($busca)){

        echo"

		";}
		}

		
		function aumentaEstoque(){
			
			$con = new Connection();
			$sql = "update tblEstoque set quantidadeProduto = " . $this->quantidadeProduto ." where codigoProduto = " . $this->idProduto .";";
			if(mysqli_query($con->con,$sql)){
			
				echo "<script>alert('Quantidade aumentada com sucesso!')</script>";
				header("refresh:0;url=../View/Admin.php");
				
			}else{
			
				echo "<script>alert('Erro ao aumentar quantidade. Tente novamente!')</script>";
				header("refresh:0;url=../View/listaEstoque.php");
				
			}
			
		}
			
		
		function setId($idProduto){
			
			$this->idProduto = $idProduto;
			
			}
			
		function getId(){
				
			return $this->idProduto;
				
		}
				
		function setQuantidade($quantidadeProduto){
			
			$this->quantidadeProduto = $quantidadeProduto;
			
		}
			
		function getQuantidade(){
				
			return $this->quantidadeProduto;
				
		}
				
		function setNome($nomeProduto){
					
			$this->nomeProduto = $nomeProduto;
					
		}
			
		function getNome(){
					
			return $this->nomeProduto;
						
		}
					
		function setImagem($imagemProduto){
						
			$this->imagemProduto = $imagemProduto;
						
		}
						
		function getImagem(){
							
			return $this->imagemProduto;
							
		}
						
		function setDescricao($descricaoProduto){
							
			$this->descricaoProduto = $descricaoProduto;
							
		}
							
		function getDescricao(){
								
			return $this->descricaoProduto;	
								
		}
						
		function setPreco($precoProduto){
										
			$this->precoProduto = $precoProduto;
									
		}
										
		function getPreco(){
											
			return $this->precoProduto;	
											
		}
		
		function setTipo($tipoProduto){
		
			$this->tipoProduto = $tipoProduto;
			
		}
		
		function getTipo(){
		
			return $this->tipoProduto;	
			
		}
		
		function setImagemNova($imagemMudadaProduto){
		
			$this->imagemMudadaProduto = $imagemMudadaProduto;
			
		}
		
		function setPesquisa($pesquisa){
			
			$this->pesquisa = $pesquisa;
			
		}
		
		function getPesquisa(){
		
			return $pesqusa;
			
		}

		function setEstoque($estoquemin){

			$this->estoquemin = $estoquemin;
		}

		function getEstoque(){

			return $this->estoquemin;
		}
		
	
								
							
	
		
	}

?>