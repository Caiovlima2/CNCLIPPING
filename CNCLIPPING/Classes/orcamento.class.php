<?php 

	include_once "connection.class.php";
	require_once 'dompdf/autoload.inc.php';

	require_once 'dompdf/lib/html5lib/Parser.php';
	require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
	require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
	require_once 'dompdf/src/Autoloader.php';
	//Dompdf\Autoloader::register();

	use Dompdf\Dompdf;

	use Dompdf\Options;

	class Orcamento{

		private $nomeEmpresa;
		private $nomeCliente;
		private $opt1;
		private $opt2;
		private $opt3;
		private $opt4;
		private $opt5;
		private $opt6;
		private $opt7;
		private $opt8;
		private $titulo1;
		private $titulo2;
		private $titulo3;
		private $monitoramento1;
		private $monitoramento2;
		private $monitoramento3;
		private $cobertura1;
		private $cobertura2;
		private $cobertura3;
		private $investimento1;
		private $investimento2;
		private $investimento3;
		private $data;
		private $tema;
		private $num;
		private $empresa;
		private $desc1;
		private $desc2;
		private $desc3;
		private $desc4;
		private $desc5;
		private $desc6;
		private $desc7;
		private $desc8;
		private $desc9;


		function geraOpt1(){
	


			$con = new connection();

			$sql = "INSERT INTO tblNum(numOrc) VALUES (1)";

			mysqli_query($con->con, $sql);

			$sql = "SELECT MAX(codNum) AS num_max FROM tblNum";

			$sql = mysqli_query($con->con, $sql);

			$num = mysqli_fetch_assoc($sql);

			//echo $num['num_max'];

			//echo $num['num_max'];


			$html = '
	<html>
	
	<head>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<link href="/css/bootstrap.min.css" rel="stylesheet">

	</head>

	<style>

		.fundo{

			opacity: 0.1;
			width: 100%
			heigth: 100%;
			position: absolute;
			margin-top: 10%;
		}

		.tam{

			width: 2480px;
			heigth: 3508px;
		}


			header {
                position: fixed;
                top: -50px;
                left: 0px;
                right: 0px;
                height: 50px;

                text-align: center;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: -10px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                text-align: center;
                line-height: 35px;
            }

            .tt{

            	margin-top: 20px;
            	margin-left: -20px;
            	height: 70px;
            	width: 70px;

            }

	</style>

	<body>


	<div class=tam">
			<header>
            <img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
            </header>

	       <footer>
            Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>
	<img src=../Imagens/icon.png class=fundo>
		
		<br>

		<p style="font-family: Times New Roman; font-size:32px; text-align: center; font-style: italic;">ORÇAMENTO CN CLIPPING</p>

		<p style="font-size:18px;"> São Paulo, '.$this->data.' </p>

		<p> A  '.$this->empresa.'</p>

		<p style="margin-top: -30px;">A/C. '.$this->nomeCliente.'</p>

		<p style"text-align: right> Orçamento n° '. $num['num_max'] .'</p>

		<p style="margin-top: -20px;"> Prezados Senhores: Em atenção a sua solicitação, estamos por meio desta enviando proposta comercial para o fornecimento de serviços de Clipping de Notícias.</p>
		
		<br>

		<p style="font-weight:bold; font-size: 18px; text-align: center;">Especificações</p>

		<br>

		<p> Temas a serem pesquisados: </p>
 
		<p style="text-align: justify"> '.$this->tema.' </p>

		<br>

		<p> Publicações a serem lidas (detalhes em www.cnclipping.com.br): </p>

		<p>•	Jornais e revistas da grande imprensa de São Paulo e do Rio de Janeiro.</p>
		<p>•	A CN Clipping tem acesso a eles no mesmo dia de sua publicação e o envio no período da manhã.</p>
		<p>•	Jornais e revistas de outros Estados e Interior brasileiros.</p>
		<p>•	Podem chegar a São Paulo com até 7 (sete) dias de atraso.</p>
		<p></p>


		</div>

		<br><br><br><br>

		<div class=tam">


		<header>
        	<img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
        </header>

	    <footer>
        	Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>

		<img src=../Imagens/icon.png class=fundo>

		<br>

		<p> Processamento: </p>

		<p>•	Busca dos temas em publicações impressas.</p>
		<p>•	Identificação e marcação do material.</p>
		<p>•	Coleta.</p>
		<p>•	Corte e colagem dos recortes em folhas de papel.</p>
		<p>•	Digitalização de todos os recortes.</p>
		<p>•	Digitação dos dados de identificação dos recortes.</p>
		<p>•	Armazenamento dos dados e dos arquivos de imagens nos servidores da CN Clipping.</p>
		<p>•	Envio do clipping digital de segunda à sexta-feira no período da manhã. Nas segundas-feiras, pode haver atraso por causa do acúmulo das publicações dos dias anteriores (sábado e domingo).</p>
		<p>•	Envio de e-mail para o cliente contendo links para o material coletado.</p>
		<p> Acesso ao material: </p>


		<p>O cliente  poderá ter acesso ao material das seguintes formas:</p>
		<p>•	No site da CN Clipping (www.cnclipping.com.br) - imagens dos recortes.</p>
		<p>•	Recebendo e-mails contendo links para as imagens.</p>
		<p></p>

		</div>

		<br><br><br><br><br><br>

		<div class=tam">

		<header>
        	<img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
        </header>

	    <footer>
        	Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>

		<img src=../Imagens/icon.png class=fundo>

		<br><br><br><br>
		
		<table style="width: 100%; heigth:100%; border: 1px solid black;">
		<tr style="text-align: center;">
			<td>
			<p style="font-style: italic; color: blue;">Pacote de Serviços:</p>
			</td>
		</tr>

		<tr>
			<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping da Mídia Impressa-Digitalizado (jornais e revistas)</p>
		  	</td>			
		  	<td>
		  	'.$this->opt1.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Web sites</p>
		  	</td>
		  	<td>
		  	'.$this->opt2.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Cálculo de Centimetragem</p>
		  	</td>	
		  	<td>
		  	'.$this->opt3.'
		  	</td>	
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Relatório Automático (gerado pelo usuário)</p>
		  	</td>
		  	<td>
		  	'.$this->opt4.'
		  	</td>		
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Acesso Mobile – App IOS e Android</p>
		  	</td>
		  	<td>
		  	'.$this->opt5.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Rádio</p>
		  	</td>
		  	<td>
		  	'.$this->opt6.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Tv</p>
		  	</td>
		  	<td>
		  	'.$this->opt7.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Mídias Sociais</p>
		  	</td>
		  	<td>
		  	'.$this->opt8.'
		  	</td>
		</tr>

		</table>

		<p></p>

		</div>

		<br><br><br><br><br><br><br>

		<div class=tam">

		<header>
        	<img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
        </header>

	    <footer>
        	Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>

		<br><br>

		<img src=../Imagens/icon.png class=fundo>

		<hr style="color: #000000;"></hr>

		<p style="text-align: center;"> Proposta </p>

		<p style="font-weight: bold; text-align: center;"> '.$this->titulo1.' </p>

		<p style="font-weight: bold; font-style: italic;"> Monitoramento :  '.$this->monitoramento1.'</p>

		<p style="font-size: 12px;"> '.$this->desc1.' </p>

		<p> Cobertura :  '.$this->cobertura1.'</p>

		<p style="font-size: 12px;"> '.$this->desc2.' </p>

		<p style="font-weight: bold;"> Investimento Mensal :  '.$this->investimento1.'</p> 

		<p style="font-size: 12px;"> '.$this->desc3.' </p>

		</ul>

		<hr style="color: #000000;"></hr>
		

		<p style="font-weight: bold; font-size: 12px;">Informamos que a CN Clipping, realiza monitoramento de Rádio e Tv - Avulso e Mensal.</p>

		<p><b>CONTRATAÇÃO: </b>Para início da prestação do serviço, por favor solicite, preencha, assine e envie a Ficha de Autorização com pelo menos um dia de antecedência.</p>

		<p><b>PAGAMENTOS: </b>Os pagamentos deverão ser feitos por meio de ficha de compensação bancária (enviada pela CN Clipping ou pelo Banco). Consulte-nos sobre o vencimento na data de contratação.</p>

		<p><b>PRAZO: </b>O prazo mínimo para a prestação do serviço é de 30 dias. O cancelamento antes desse prazo não desobriga o cliente do pagamento do período integral. Os cancelamentos deverão ser informados por fax ou e-mail.</p>

		<p>Para quaisquer dúvidas, pedimos entrar em contato com o setor de atendimento, nos telefones (11) 2537-1264.</p>

		<p style="text-align: right"> Atenciosamente, </p>

		<p style="font-weight: bold; font-style: italic; text-align: right"> CN CLIPPING </p>

		</div>

		</body>
		</html>
		';

		// reference the Dompdf namespace

		$dompdf = new Dompdf();

		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream(date('Y').'orcamento.pdf');

		}

	function geraOpt2(){

			$con = new connection();

			$sql = "INSERT INTO tblNum(numOrc) VALUES (1)";

			mysqli_query($con->con, $sql);

			$sql = "SELECT MAX(codNum) AS num_max FROM tblNum";

			$sql = mysqli_query($con->con, $sql);

			$num = mysqli_fetch_assoc($sql);

			//echo $num['num_max'];

			//echo $num['num_max'];


			$html = '
	<html>
	
	<head>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<link href="/css/bootstrap.min.css" rel="stylesheet">

	</head>

	<style>

		.fundo{

			opacity: 0.1;
			width: 100%
			heigth: 100%;
			position: absolute;
			margin-top: 10%;
		}

		.tam{

			width: 2480px;
			heigth: 3508px;
		}


			header {
                position: fixed;
                top: -50px;
                left: 0px;
                right: 0px;
                height: 50px;

                text-align: center;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: -10px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                text-align: center;
                line-height: 35px;
            }

            .tt{

            	margin-top: 20px;
            	margin-left: -20px;
            	height: 70px;
            	width: 70px;

            }

	</style>

	<body>


	<div class=tam">
			<header>
            <img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
            </header>

	       <footer>
            Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>
	<img src=../Imagens/icon.png class=fundo>
		
		<br>

		<p style="font-family: Times New Roman; font-size:32px; text-align: center; font-style: italic;">ORÇAMENTO CN CLIPPING</p>

		<p style="font-size:18px;"> São Paulo, '.$this->data.' </p>

		<p> A  '.$this->empresa.'</p>

		<p style="margin-top: -30px;">A/C. '.$this->nomeCliente.'</p>

		<p style"text-align: right> Orçamento n° '. $num['num_max'] .'</p>

		<p style="margin-top: -20px;"> Prezados Senhores: Em atenção a sua solicitação, estamos por meio desta enviando proposta comercial para o fornecimento de serviços de Clipping de Notícias.</p>
		
		<br>

		<p style="font-weight:bold; font-size: 18px; text-align: center;">Especificações</p>

		<br>

		<p> Temas a serem pesquisados: </p>
 
		<p style="text-align: justify"> '.$this->tema.' </p>

		<br>

		<p> Publicações a serem lidas (detalhes em www.cnclipping.com.br ): </p>

		<p>•	Jornais e revistas da grande imprensa de São Paulo e do Rio de Janeiro.</p>
		<p>•	A CN Clipping tem acesso a eles no mesmo dia de sua publicação e o envio no período da manhã.</p>
		<p>•	Jornais e revistas de outros Estados e Interior brasileiros.</p>
		<p>•	Podem chegar a São Paulo com até 7 (sete) dias de atraso.</p>
		<p></p>


		</div>

		<br><br><br><br>

		<div class=tam">


		<header>
        	<img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
        </header>

	    <footer>
        	Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>

		<img src=../Imagens/icon.png class=fundo>

		<br>

		<p> Processamento: </p>

		<p>•	Busca dos temas em publicações impressas.</p>
		<p>•	Identificação e marcação do material.</p>
		<p>•	Coleta.</p>
		<p>•	Corte e colagem dos recortes em folhas de papel.</p>
		<p>•	Digitalização de todos os recortes.</p>
		<p>•	Digitação dos dados de identificação dos recortes.</p>
		<p>•	Armazenamento dos dados e dos arquivos de imagens nos servidores da CN Clipping.</p>
		<p>•	Envio do clipping digital de segunda à sexta-feira no período da manhã. Nas segundas-feiras, pode haver atraso por causa do acúmulo das publicações dos dias anteriores (sábado e domingo).</p>
		<p>•	Envio de e-mail para o cliente contendo links para o material coletado.</p>
		<p> Acesso ao material: </p>


		<p>O cliente  poderá ter acesso ao material das seguintes formas:</p>
		<p>•	No site da CN Clipping (www.cnclipping.com.br) - imagens dos recortes.</p>
		<p>•	Recebendo e-mails contendo links para as imagens</p>
		<p>O material digitalizado fica armazenado enquanto durarem os serviços prestados à empresa.</p>
		<p></p>

		</div>

		<br><br><br><br><br><br>

		<div class=tam">

		<header>
        	<img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
        </header>

	    <footer>
        	Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>

		<img src=../Imagens/icon.png class=fundo>

		<br><br><br><br>
		
		<table style="width: 100%; heigth:100%; border: 1px solid black;">
		<tr style="text-align: center;">
			<td>
			<p style="font-style: italic; color: blue;">Pacote de Serviços:</p>
			</td>
		</tr>

		<tr>
			<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping da Mídia Impressa-Digitalizado (jornais e revistas)</p>
		  	</td>			
		  	<td>
		  	'.$this->opt1.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Web sites</p>
		  	</td>
		  	<td>
		  	'.$this->opt2.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Cálculo de Centimetragem</p>
		  	</td>	
		  	<td>
		  	'.$this->opt3.'
		  	</td>	
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Relatório Automático (gerado pelo usuário)</p>
		  	</td>
		  	<td>
		  	'.$this->opt4.'
		  	</td>		
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Acesso Mobile – App IOS e Android</p>
		  	</td>
		  	<td>
		  	'.$this->opt5.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Rádio</p>
		  	</td>
		  	<td>
		  	'.$this->opt6.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Tv</p>
		  	</td>
		  	<td>
		  	'.$this->opt7.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Mídias Sociais</p>
		  	</td>
		  	<td>
		  	'.$this->opt8.'
		  	</td>
		</tr>

		</table>

		<p></p>

		</div>

		<br><br><br><br><br><br><br>

		<div class=tam">

		<header>
        	<img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
        </header>

	    <footer>
        	Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>

		<br><br>

		<img src=../Imagens/icon.png class=fundo>

		<hr style="color: #000000;"></hr>

		<p style="text-align: center;"> Proposta </p>

		<p style="font-weight: bold; text-align: center;"> '.$this->titulo1.' </p>

		<p style="font-weight: bold; font-style: italic;"> Monitoramento :  '.$this->monitoramento1.'</p>

		<p style="font-size: 12px;"> '.$this->desc1.' </p>

		<p> Cobertura :  '.$this->cobertura1.'</p>

		<p style="font-size: 12px;"> '.$this->desc2.' </p>

		<p style="font-weight: bold;"> Investimento Mensal :  '.$this->investimento1.'</p> 

		<p style="font-size: 12px;"> '.$this->desc3.' </p>

		</ul>

		<hr style="color: #000000;"></hr>

		<p style="text-align: center;"> Proposta </p>

		<p style="font-weight: bold; text-align: center;"> '.$this->titulo2.' </p>

		<p style="font-weight: bold; font-style: italic;"> Monitoramento :  '.$this->monitoramento2.'</p>

		<p style="font-size: 12px;"> '.$this->desc4.' </p>

		<p> Cobertura :  '.$this->cobertura2.'</p>

		<p style="font-size: 12px;"> '.$this->desc5.' </p>

		<p style="font-weight: bold;"> Investimento Mensal :  '.$this->investimento2.'</p> 

		<p style="font-size: 12px;"> '.$this->desc6.' </p>

		</ul>

		<hr style="color: #000000;"></hr>

		<p></p>

		</div>

		<br><br><br>
		
		<div class=tam">

		<header>
        	<img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
        </header>

	    <footer>
        	Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>

		<br><br>

		<img src=../Imagens/icon.png class=fundo>

		<p style="font-weight: bold; font-size: 12px;">Informamos que a CN Clipping, realiza monitoramento de Rádio e Tv - Avulso e Mensal.</p>

		<p style="font-weight: bold; text-align: center">CONTRATAÇÃO</p>

		<p>Para início da prestação do serviço, por favor solicite, preencha, assine e envie a Ficha de Autorização com pelo menos um dia de antecedência.</p>

		<p style="font-weight: bold; text-align: center">PAGAMENTOS</p>

		<p>Os pagamentos deverão ser feitos por meio de ficha de compensação bancária (enviada pela CN Clipping ou pelo Banco). Consulte-nos sobre o vencimento na data de contratação.</p>

		<p style="font-weight: bold; text-align: center">PRAZO</p>

		<p>O prazo mínimo para a prestação do serviço é de 30 dias. O cancelamento antes desse prazo não desobriga o cliente do pagamento do período integral. Os cancelamentos deverão ser informados por fax ou e-mail.</p>

		<p>Para quaisquer dúvidas, pedimos entrar em contato com o setor de atendimento, nos telefones (11) 2537-1264.</p>

		<p style="text-align: right"> Atenciosamente, </p>

		<p style="font-weight: bold; font-style: italic; text-align: right"> CN CLIPPING </p>

		</div>

		</body>
		</html>
		';

		// reference the Dompdf namespace

		$dompdf = new Dompdf();

		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream(date('Y').'orcamento.pdf');

	}

	function geraOpt3(){

			$con = new connection();

			$sql = "INSERT INTO tblNum(numOrc) VALUES (1)";

			mysqli_query($con->con, $sql);

			$sql = "SELECT MAX(codNum) AS num_max FROM tblNum";

			$sql = mysqli_query($con->con, $sql);

			$num = mysqli_fetch_assoc($sql);

			//echo $num['num_max'];

			//echo $num['num_max'];


			$html = '
	<html>
	
	<head>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<link href="/css/bootstrap.min.css" rel="stylesheet">

	</head>

	<style>

		.fundo{

			opacity: 0.1;
			width: 100%
			heigth: 100%;
			position: absolute;
			margin-top: 10%;
		}

		.tam{

			width: 2480px;
			heigth: 3508px;
		}


			header {
                position: fixed;
                top: -50px;
                left: 0px;
                right: 0px;
                height: 50px;

                text-align: center;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: -10px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                text-align: center;
                line-height: 35px;
            }

            .tt{

            	margin-top: 20px;
            	margin-left: -20px;
            	height: 70px;
            	width: 70px;

            }

	</style>

	<body>


	<div class=tam">
			<header>
            <img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
            </header>

	       <footer>
            Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>
	<img src=../Imagens/icon.png class=fundo>
		
		<br>

		<p style="font-family: Times New Roman; font-size:32px; text-align: center; font-style: italic;">ORÇAMENTO CN CLIPPING</p>

		<p style="font-size:18px;"> São Paulo, '.$this->data.' </p>

		<p> A  '.$this->empresa.'</p>

		<p style="margin-top: -30px;">A/C. '.$this->nomeCliente.'</p>

		<p style"text-align: right> Orçamento n° '. $num['num_max'] .'</p>

		<p style="margin-top: -20px;"> Prezados Senhores: Em atenção a sua solicitação, estamos por meio desta enviando proposta comercial para o fornecimento de serviços de Clipping de Notícias.</p>
		
		<br>

		<p style="font-weight:bold; font-size: 18px; text-align: center;">Especificações</p>

		<br>

		<p> Temas a serem pesquisados: </p>
 
		<p style="text-align: justify"> '.$this->tema.' </p>

		<br>

		<p> Publicações a serem lidas (detalhes em www.cnclipping.com.br ): </p>

		<p>•	Jornais e revistas da grande imprensa de São Paulo e do Rio de Janeiro.</p>
		<p>•	A CN Clipping tem acesso a eles no mesmo dia de sua publicação e o envio no período da manhã.</p>
		<p>•	Jornais e revistas de outros Estados e Interior brasileiros.</p>
		<p>•	Podem chegar a São Paulo com até 7 (sete) dias de atraso.</p>
		<p></p>


		</div>

		<br><br><br><br>

		<div class=tam">


		<header>
        	<img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
        </header>

	    <footer>
        	Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>

		<img src=../Imagens/icon.png class=fundo>

		<br>

		<p> Processamento: </p>

		<p>•	Busca dos temas em publicações impressas.</p>
		<p>•	Identificação e marcação do material.</p>
		<p>•	Coleta.</p>
		<p>•	Corte e colagem dos recortes em folhas de papel.</p>
		<p>•	Digitalização de todos os recortes.</p>
		<p>•	Digitação dos dados de identificação dos recortes.</p>
		<p>•	Armazenamento dos dados e dos arquivos de imagens nos servidores da CN Clipping.</p>
		<p>•	Envio do clipping digital de segunda à sexta-feira no período da manhã. Nas segundas-feiras, pode haver atraso por causa do acúmulo das publicações dos dias anteriores (sábado e domingo).</p>
		<p>•	Envio de e-mail para o cliente contendo links para o material coletado.</p>
		<p> Acesso ao material: </p>


		<p>O cliente  poderá ter acesso ao material das seguintes formas:</p>
		<p>•	No site da CN Clipping (www.cnclipping.com.br) - imagens dos recortes.</p>
		<p>•	Recebendo e-mails contendo links para as imagens</p>
		<p>O material digitalizado fica armazenado enquanto durarem os serviços prestados à empresa.</p>
		<p></p>

		</div>

		<br><br><br><br><br><br>

		<div class=tam">

		<header>
        	<img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
        </header>

	    <footer>
        	Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>

		<img src=../Imagens/icon.png class=fundo>

		<br><br><br><br>
		
		<table style="width: 100%; heigth:100%; border: 1px solid black;">
		<tr style="text-align: center;">
			<td>
			<p style="font-style: italic; color: blue;">Pacote de Serviços:</p>
			</td>
		</tr>

		<tr>
			<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping da Mídia Impressa-Digitalizado (jornais e revistas)</p>
		  	</td>			
		  	<td>
		  	'.$this->opt1.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Web sites</p>
		  	</td>
		  	<td>
		  	'.$this->opt2.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Cálculo de Centimetragem</p>
		  	</td>	
		  	<td>
		  	'.$this->opt3.'
		  	</td>	
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Relatório Automático (gerado pelo usuário)</p>
		  	</td>
		  	<td>
		  	'.$this->opt4.'
		  	</td>		
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Acesso Mobile – App IOS e Android</p>
		  	</td>
		  	<td>
		  	'.$this->opt5.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Rádio</p>
		  	</td>
		  	<td>
		  	'.$this->opt6.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Tv</p>
		  	</td>
		  	<td>
		  	'.$this->opt7.'
		  	</td>
		</tr>

		<tr>
		  	<td>
		  <p style="font-weight: bold; font-style: italic;">Clipping de Mídias Sociais</p>
		  	</td>
		  	<td>
		  	'.$this->opt8.'
		  	</td>
		</tr>

		</table>

		<p></p>

		</div>

		<br><br><br><br><br><br><br>

		<div class=tam">

		<header>
        	<img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
        </header>

	    <footer>
        	Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>

		<br><br>

		<img src=../Imagens/icon.png class=fundo>

		<hr style="color: #000000;"></hr>

		<p style="text-align: center;"> Proposta </p>

		<p style="font-weight: bold; text-align: center;"> '.$this->titulo1.' </p>

		<p style="font-weight: bold; font-style: italic;"> Monitoramento :  '.$this->monitoramento1.'</p>

		<p style="font-size: 12px;"> '.$this->desc1.' </p>

		<p> Cobertura :  '.$this->cobertura1.'</p>

		<p style="font-size: 12px;"> '.$this->desc2.' </p>

		<p style="font-weight: bold;"> Investimento Mensal :  '.$this->investimento1.'</p> 

		<p style="font-size: 12px;"> '.$this->desc3.' </p>

		</ul>

		<hr style="color: #000000;"></hr>

		<p style="text-align: center;"> Proposta </p>

		<p style="font-weight: bold; text-align: center;"> '.$this->titulo2.' </p>

		<p style="font-weight: bold; font-style: italic;"> Monitoramento :  '.$this->monitoramento2.'</p>

		<p style="font-size: 12px;"> '.$this->desc4.' </p>

		<p> Cobertura :  '.$this->cobertura2.'</p>

		<p style="font-size: 12px;"> '.$this->desc5.' </p>

		<p style="font-weight: bold;"> Investimento Mensal :  '.$this->investimento2.'</p> 

		<p style="font-size: 12px;"> '.$this->desc6.' </p>

		</ul>

		<hr style="color: #000000;"></hr>

		<p></p>

		</div>

		<br><br><br>
		
		<div class=tam">

		<header>
        	<img src=../Imagens/icon.png class=tt>   INFORMAÇÕES INTELIGENTES EM TEMPO REAL
        </header>

	    <footer>
        	Av. Francisco Tranchesi, 382 -  Jardim Nossa Senhora do Carmo – SP - CEP: 08270-460 - Brasil <br>
            (11) 2537-1264 - contato@cnclipping.com.br - www.cnclipping.com.br
        </footer>

		<br><br>

		<img src=../Imagens/icon.png class=fundo>

		<hr style="color: #000000;"></hr>

		<p style="text-align: center;"> Proposta </p>

		<p style="font-weight: bold; text-align: center;"> '.$this->titulo3.' </p>

		<p style="font-weight: bold; font-style: italic;"> Monitoramento :  '.$this->monitoramento3.'</p>

		<p style="font-size: 12px;"> '.$this->desc7.' </p>

		<p> Cobertura :  '.$this->cobertura3.'</p>

		<p style="font-size: 12px;"> '.$this->desc8.' </p>

		<p style="font-weight: bold;"> Investimento Mensal :  '.$this->investimento3.'</p> 

		<p style="font-size: 12px;"> '.$this->desc9.' </p>

		</ul>

		<hr style="color: #000000;"></hr>
		

		<p style="font-weight: bold; font-size: 12px;">Informamos que a CN Clipping, realiza monitoramento de Rádio e Tv - Avulso e Mensal.</p>

		<p><b>CONTRATAÇÃO: </b>Para início da prestação do serviço, por favor solicite, preencha, assine e envie a Ficha de Autorização com pelo menos um dia de antecedência.</p>

		<p><b>PAGAMENTOS: </b>Os pagamentos deverão ser feitos por meio de ficha de compensação bancária (enviada pela CN Clipping ou pelo Banco). Consulte-nos sobre o vencimento na data de contratação.</p>

		<p><b>PRAZO: </b>O prazo mínimo para a prestação do serviço é de 30 dias. O cancelamento antes desse prazo não desobriga o cliente do pagamento do período integral. Os cancelamentos deverão ser informados por fax ou e-mail.</p>

		<p>Para quaisquer dúvidas, pedimos entrar em contato com o setor de atendimento, nos telefones (11) 2537-1264.</p>

		<p style="text-align: right"> Atenciosamente, </p>

		<p style="font-weight: bold; font-style: italic; text-align: right"> CN CLIPPING </p>

		</div>

		</body>
		</html>
		';

		// reference the Dompdf namespace

		$dompdf = new Dompdf();

		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream(date('Y').'orcamento.pdf');


	}

	function setNomeE($nomeEmpresa){

		$this->nomeEmpresa = $nomeEmpresa;
	}

	function nomeEmpresa(){

		return $this->nomeEmpresa;

	}

	function setNomeC($nomeCliente){

		$this->nomeCliente = $nomeCliente;
	}

	function getNomeC(){

		return $this->nomeCliente;
	}


	function setOptI($opt1){

		$this->opt1 = $opt1;
	}

	function getOptI(){

		return $this->opt1;
	}


	function setOptII($opt2){

		$this->opt2 = $opt2;
	}

	function getOptII(){

		return $this->opt2;
	}


	function setOptIII($opt3){

		$this->opt3 = $opt3;
	}

	function getOptIII(){

		return $this->opt3;
	}


	function setOptIV($opt4){

		$this->opt4 = $opt4;
	}

	function getOptIV(){

		return $this->opt4;
	}


	function setOptV($opt5){

		$this->opt5 = $opt5;
	}

	function getOptV(){

		return $this->opt5;
	}

	function setOptVI($opt6){

		$this->opt6 = $opt6;
	}

	function getOptVI(){

		return $this->opt6;
	}

	function setOptVII($opt7){

		$this->opt7 = $opt7;
	}

	function getOptVII(){

		return $this->opt7;
	}

	function setTituloI($titulo1){

		$this->titulo1 = $titulo1;
	}

	function getTituloI(){

		return $this->titulo1;
	}


	function setTituloII($titulo2){

		$this->titulo2 = $titulo2;
	}

	function getTituloIII(){

		return $this->titulo3;
	}


	function setMonitoramentoI($monitoramento1){

		$this->monitoramento1 = $monitoramento1;
	}

	function getMonitoramentoI(){

		return $this->monitoramento1;
	}


	function setMonitoramentoII($monitoramento2){

		$this->monitoramento2 = $monitoramento2;
	}

	function getMonitoramentoII(){

		return $this->monitoramento2;
	}


	function setMonitoramentoIII($monitoramento3){

		$this->monitoramento3 = $monitoramento3;
	}

	function getMonitoramentoIII(){

		return $this->monitoramento3;
	}


	function setCoberturaI($cobertura1){

		$this->cobertura1 = $cobertura1;
	}

	function getCoberturaI(){

		return $this->cobertura1;
	}


	function setCoberturaII($cobertura2){

		$this->cobertura2 = $cobertura2;
	}

	function getCoberturaII(){

		return $this->cobertura2;
	}


	function setCoberturaIII($cobertura3){

		$this->cobertura3 = $cobertura3;
	}

	function getCoberturaIII(){

		return $this->cobertura3;
	}


	function setInvestimentoI($investimento1){

		$this->investimento1 = $investimento1;
	}

	function getInvestimentoI(){

		return $this->investimento1;
	}


	function setInvestimentoII($investimento2){

		$this->investimento2 = $investimento2;
	}

	function getInvestimentoII(){

		return $this->investimento2;
	}


	function setInvestimentoIII($investimento3){

		$this->investimento3 = $investimento3;
	}

	function getInvestimentoIII(){

		return $this->investimento3;
	}


	function setTituloIII($titulo3){

		$this->titulo3 = $titulo3;
	}

	function getTituloII(){

		return $this->titulo2;
	}

	function setData($data){

		$this->data = $data;

	}

	function getData(){

		return $this->data;

	}

	function setTema($tema){

		$this->tema = $tema;

	}

	function getTema(){

		return $this->tema;

	}

	function setEmpresa($empresa){

		$this->empresa = $empresa;

	}

	function getEmpresa(){

		return $this->empresa;

	}

	function setDesc1($desc1){

		$this->desc1 = $desc1;

	}


	function setDesc2($desc2){

		$this->desc2 = $desc2;

	}

	function setDesc3($desc3){

		$this->desc3 = $desc3;

	}

	function setDesc4($desc4){

		$this->desc4 = $desc4;

	}

	function setDesc5($desc5){

		$this->desc5 = $desc5;

	}

	function setDesc6($desc6){

		$this->desc6 = $desc6;

	}

	function setDesc7($desc7){

		$this->desc7 = $desc7;

	}

	function setDesc8($desc8){

		$this->desc8 = $desc8;

	}

	function setDesc9($desc9){

		$this->desc9 = $desc9;

	}

	function setOptVIII($opt8){

		$this->opt8 = $opt8;

	}

	}
?>