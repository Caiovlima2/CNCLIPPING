<?php
	session_start();

	include_once "Connection.class.php";

	class Carrinho{

		function adicionarProduto($codigo){

			$k = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;

			$car = @$_SESSION['carrinho'];	
			
			for($i = 0; $i < count($car); $i++){

				if($car[$i]['codigoProduto'] == $codigo){

					$car[$i]['quantidadeProduto']++;
					$car[$i]['subtotal'] = $car[$i]['quantidadeProduto'] * $car[$i]['precoProduto'];
					unset($_SESSION['carrinho']);
					$_SESSION['carrinho'] = $car;
					return false;

				}

			}


			$con = new Connection();
			$sql = mysqli_query($con->con, "select * from tblEstoque where codigoProduto = ". $codigo);

			$produto = mysqli_fetch_assoc($sql);

			$_SESSION['carrinho'][$k]['codigoProduto'] = $produto['codigoProduto'];
			$_SESSION['carrinho'][$k]['nomeProduto'] = $produto['nomeProduto'];
			$_SESSION['carrinho'][$k]['descricaoProduto'] = $produto['descricaoProduto'];
			$_SESSION['carrinho'][$k]['precoProduto'] = $produto['precoProduto'];
			$_SESSION['carrinho'][$k]['fotoProduto'] = $produto['imagemProduto'];
			$_SESSION['carrinho'][$k]['quantidadeProduto'] = 1;
			$_SESSION['carrinho'][$k]['subtotal'] = $_SESSION['carrinho'][$k]['precoProduto'] * $_SESSION['carrinho'][$k]['quantidadeProduto'];


		}

		function deletarProduto($codigo){

			$car = $_SESSION['carrinho'];

			for($i = 0; $i < count($car); $i++){

				if($car[$i]['codigoProduto'] == $codigo){

					unset($car[$i]);
					sort($car);

				}

			}

			unset($_SESSION['carrinho']);
			$_SESSION['carrinho'] = $car;

			header("location:Carrinho.php");

		}

		function alterarQuantidade($codigo, $quantidade){

			$car = $_SESSION['carrinho'];
			
			for($i = 0; $i < count($car); $i++){
				if($car[$i]['codigoProduto'] == $codigo){

					$car[$i]['quantidadeProduto'] = $car[i]['$quandidade'] + $quantidade;
					$car[$i]['subtotal']  = $car[$i]['quantidadeProduto'] * $car[$i]['precoProduto'];

				}

			}

			unset($_SESSION['carrinho']);
			$_SESSION['carrinho'] = $car;

			header("location:Carrinho.php");

		}


		function mostraCarrinho(){

		$carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();

		$subtotal = $this->getSubTotal();

			echo " <div class=container-fluid>
    			<div class=row>
                    <table class=table table>
                        <tr>
                              <td class=active>Produto(s)</td>
                              <td class=active>Quantidade</td>
                              <td class=active>Valor Unitário</td>
                              <td class=active>Valor Total</td>
                              <td class=active>Remover Produto</td>
                        </tr>
                    ";

		for($i = 0; $i < count($carrinho); $i++){

			if($i%2 == 0){

			echo " <tr>
                        <td class=info style=background-color:#900;color:rgba(204,204,204,1);>".$carrinho[$i]['nomeProduto']."</td>
                        <td class=info style=background-color:#900;color:rgba(204,204,204,1);><a href=Carrinho.php?acao=diminuir&codigo=".$carrinho[$i]['codigoProduto']."><button type=button class='btn btn-danger' style=margin-right:5px;>-</button></a>".$carrinho[$i]['quantidadeProduto']."<a href=Carrinho.php?acao=aumentar&codigo=".$carrinho[$i]['codigoProduto']."><button type=button class='btn btn-danger' style=margin-left:5px;>+</button></br></td>
                        <td class=info style=background-color:#900;color:rgba(204,204,204,1);>R$".number_format($carrinho[$i]['precoProduto'],2,',','.')."</br></td>
                        <td class=info style=background-color:#900;color:rgba(204,204,204,1);>R$".number_format($carrinho[$i]['precoProduto']*$carrinho[$i]['quantidadeProduto'],2,',','.')."</td>
                        <td class=info style=background-color:#900;color:rgba(204,204,204,1);><a href=Carrinho.php?acao=delete&codigo=".$carrinho[$i]['codigoProduto']."><button type=button class='btn btn-danger'>Remover</button></a></td>
                    </tr>
            ";}else{

            	echo "<tr>
                        <td class=active>".$carrinho[$i]['nomeProduto']."</td>
                        <td class=active><a href=Carrinho.php?acao=diminuir&codigo=".$carrinho[$i]['codigoProduto']."><button type=button class='btn btn-default' style=margin-right:5px;>-</button></a>".$carrinho[$i]['quantidadeProduto']."<a href=Carrinho.php?acao=aumentar&codigo=".$carrinho[$i]['codigoProduto']."><button type=button class='btn btn-default' style=margin-left:5px;>+</button></a></br></td>
                    	<td class=active>R$".number_format($carrinho[$i]['precoProduto'],2,',','.')."</br></td>
                        <td class=active>R$".number_format($carrinho[$i]['precoProduto']*$carrinho[$i]['quantidadeProduto'],2,',','.')."</td>
                        <td class=active><a href=Carrinho.php?acao=delete&codigo=".$carrinho[$i]['codigoProduto']."><button type=button class='btn btn-default'>Remover</button></a></td>
                    </tr>";

            }
		}
		  echo "</table>
        ";

	echo "<table class='table table tabelaTotal'>
                        <tr>
                              <td class=active style=background-color:rgba(153,153,153,1);>".count($carrinho) ." Produtos</td>
                              <td class=active style=background-color:rgba(153,153,153,1);></td>
                        </tr>
                             <tr>
                                  <td class=active style=color:#900;>TOTAL:</td>
                                  <td class=active style=color:#900;>R$".number_format($subtotal,2,',','.')."</td>
                            </tr>
                     </table>

                     </div>
	</div>";
		}

		function getSubTotal(){

			$subtotal = 0;
			$car = @$_SESSION['carrinho'];	
			for($i = 0; $i < count($car); $i++){

				$subtotal += $car[$i]['quantidadeProduto'] * $car[$i]['precoProduto'];
			}			

			return $subtotal;

		}

		function diminuirQuantidade($codigo){

			$car = $_SESSION['carrinho'];


		for($i = 0; $i < count($car); $i++){
			if($car[$i]['codigoProduto'] == $codigo){

				if($car[$i]['quantidadeProduto'] == 1){

					echo "<script>alert('Quantidade Inválida!')</script>";
					break;
				}else{

				$car[$i]['quantidadeProduto'] -= 1;
				$car[$i]['subtotal'] = $car[$i]['quantidadeProduto'] * $car[$i]['precoProduto'];
				}
			}
		}

		unset($_SESSION['carrinho']);
		$_SESSION['carrinho'] = $car;


		}

		function aumentarQuantidade($codigo){

			$car = $_SESSION['carrinho'];

		for($i = 0; $i < count($car); $i++){
			if($car[$i]['codigoProduto'] == $codigo){
				$car[$i]['quantidadeProduto'] += 1;
				$car[$i]['subtotal'] = $car[$i]['quantidadeProduto'] * $car[$i]['precoProduto'];
			}
		}

		unset($_SESSION['carrinho']);
		$_SESSION['carrinho'] = $car;
	
		}


		
	}




?>