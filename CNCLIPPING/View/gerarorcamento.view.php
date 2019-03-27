<!DOCTYPE html>
<html lang="iso-8859-1">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CnClipping Orçamento</title>
    <link rel="shortcut icon" type="image/x-png" href="../Imagens/icon.png">

    <!--Bootstrap><!-->  
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
	
  </head>

  <body>
  	
  	<div style="width: 100%; height: 20%;" class="text-center">
  	<img src="../Imagens/icon.png" class="img-fluid" alt="Responsive image" style="width: 20%; height: 20%;">
  	</div>

  	<form style="margin-top: 5%;" action="../Actions/gerar.action.php" method="post">

  <div class="form-group">
    <label for="exampleInputPassword1" style="margin-left: 1%;">Nome do Cliente</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Fabrício Leonardo" name="nomeCliente">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1" style="margin-left: 1%;">Empresa Solicitante</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Cn Clipping" name="empresa">
  </div>

  <div class="form-check">
  <input style="margin-left: 10px;" type="checkbox" value="Sim" id="defaultCheck1" name="cbxOpt1">
  <label class="form-check-label" for="defaultCheck1">
    Clipping da Mídia Impressa-Digitalizado (jornais e revistas) 
  </label>
  </div>
  <div class="form-check">
  <input style="margin-left: 10px;" type="checkbox" value="Sim" id="defaultCheck2"  name="cbxOpt2">
  <label class="form-check-label" for="defaultCheck1">
    Clipping de Web sites
  </label>
  </div>
  <div class="form-check">
  <input style="margin-left: 10px;" type="checkbox" value="Sim" id="defaultCheck3"  name="cbxOpt3">
  <label class="form-check-label" for="defaultCheck1">
    Cálculo de Centimetragem
  </label>
  </div>
  <div class="form-check">
  <input style="margin-left: 10px;" type="checkbox" value="Sim" id="defaultCheck4"  name="cbxOpt4">
  <label class="form-check-label" for="defaultCheck1">
    Relatório Automático (gerado pelo usuário)
  </label>
  </div>
  <div class="form-check">
  <input style="margin-left: 10px;" type="checkbox" value="Sim" id="defaultCheck5"  name="cbxOpt5">
  <label class="form-check-label" for="defaultCheck1">
    Acesso Mobile – App IOS e Android
  </label>
  </div> 
  <div class="form-check">
  <input style="margin-left: 10px;" type="checkbox" value="Sim" id="defaultCheck5"  name="cbxOpt6">
  <label class="form-check-label" for="defaultCheck1">
    Clipping de Rádio
  </label>
  </div> 
  <div class="form-check">
  <input style="margin-left: 10px;" type="checkbox" value="Sim" id="defaultCheck5"  name="cbxOpt7">
  <label class="form-check-label" for="defaultCheck1">
    Clipping de Tv
  </label>
  </div>  
  <div class="form-check">
  <input style="margin-left: 10px;" type="checkbox" value="Sim" id="defaultCheck5"  name="cbxOpt8">
  <label class="form-check-label" for="defaultCheck1">
    Clipping de Mídias Sociais
  </label>
  </div> 


   <div class="form-group">
    <label for="exampleInputEmail1" style="margin-left: 1%;">Data</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="14 de Dezembro de 1999" name="data">
  </div>

  <div class="form-group">
  <label for="comment">Temas a serem pesquisados:</label>
  <textarea class="form-control" rows="5" id="comment" name="temas"></textarea>
</div>  

  <p class="h3" style="text-align: center;">Proposta 1</p>

   <div class="form-group">
    <label for="exampleInputEmail1" style="margin-left: 1%;">Título</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Clipping de Notícias – Tv: Globo – SBT – Band – Record " name="titulo1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" style="margin-left: 1%;">Monitoramento</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Monitoramento: Padronizado" name="monitoramento1">
    <label for="exampleInputEmail1" style="margin-left: 1%;">Descrição</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" " name="desc1" maxlength="82">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" style="margin-left: 1%;">Cobertura</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cobertura: Rio de Janeiro – Minas Gerais – Alagoas – Bahia – Pernambuco – Mato Grosso e Goiás. " name="cobertura1">
    <label for="exampleInputEmail1" style="margin-left: 1%;">Descrição</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" " name="desc2" maxlength="82">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" style="margin-left: 1%;">Investimento Mensal</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="17.600,00" name="investimento1">    
    <label for="exampleInputEmail1" style="margin-left: 1%;">Descrição</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" " name="desc3" maxlength="82">
  </div>

  


  <button type="submit" class="btn btn-primary" style="width: 100%;">Gerar</button>

  </form>

  </body>

</html>