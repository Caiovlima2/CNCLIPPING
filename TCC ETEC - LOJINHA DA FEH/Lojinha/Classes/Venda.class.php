<?php 

	include_once "Connection.class.php";

	include_once "Carrinho.class.php";

	class Venda{

		function realizarVenda(){

			date_default_timezone_set('America/Sao_Paulo');

			$date = date('Y-m-d H:i:s', time());

			$con = new Connection();	

			$car = new Carrinho();

			$carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();

			$quant = count($carrinho);

			$valor = $car->getSubTotal();

			$codCliente = $_SESSION['usuario']['codigo'];

			$sql = "INSERT INTO tblCompra (valorCompra, statusCompra, dataCompra, quantidadeCompra, codCliente) VALUES ('$valor', '1', '$date', '$quant', '$codCliente');";

			if(mysqli_query($con->con, $sql)){

				for($i = 0; $i < count($carrinho); $i++){

					$codProduto = $carrinho[$i]['codigoProduto'];

					$nome = $carrinho[$i]['nomeProduto'];

					$quant = $carrinho[$i]['quantidadeProduto'];

					$vlUnitario = $carrinho[$i]['precoProduto'];

					$vlTotal = $quant * $vlUnitario;

					$codCliente = $_SESSION['usuario']['codigo'];

					$codCompra = mysqli_query($con->con, "SELECT MAX(codigoCompra) as cod FROM tblCompra");

					$codCompra = mysqli_fetch_assoc($codCompra);

					$codCompra = $codCompra['cod'];

					$sql = "INSERT INTO tblitemcompra (nome, quantidade, valorUnitario, valorTotal, codCliente, codCompra, codProduto) VALUES ('$nome', '$quant', '$vlUnitario', '$vlTotal', '$codCliente', '$codCompra', '$codProduto')";

					mysqli_query($con->con, $sql);
					
				}

				unset($_SESSION['carrinho']);
				echo "<script>window.location='../View/Principal.php';</script>";
				
			}else{

				echo "<script>alert('Erro ao relizar compra!')</script>";
				echo "<script>window.location='../View/Principal.php';</script>";

			}			


		}

	}

 ?>