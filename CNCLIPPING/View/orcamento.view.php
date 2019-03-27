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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="../Imagens/icon.png" style="height: 55.96px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="orcamento.view.php">Enviar Orçamento <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Listar Orçamentos Enviados</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Banco de Dados
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Exportar</a>
          <a class="dropdown-item" href="#">Importar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Relatórios</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisa" aria-label="Search">
      <button class="btn btn-outline my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>


<form method="post" action="">

  <div class="form-group" style="margin-top: 50px;">
    <label for="exampleInput">Nome do Cliente</label>
    <input type="text" class="form-control" name="nomeCliente" placeholder="Nome">
  </div>

  <div class="form-group">
    <label for="exampleInput" >Email do Cliente</label>
    <input type="email" class="form-control" name="emailCliente" aria-describedby="emailHelp" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="exampleInput">Arquivo do Orçamento</label>
    <input type="file" class="form-control" name="arquivoCliente">
  </div>

  <button type="submit" class="btn btn-primary form-control">Enviar</button>
</form>

  </body>

  </html>