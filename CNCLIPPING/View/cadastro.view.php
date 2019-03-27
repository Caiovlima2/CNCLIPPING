<?php session_start(); ?>
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
    <?php if(isset($_SESSION['usuario']['logado'])){ echo "
    <ul class='navbar-nav mr-auto'>
    <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href=# id=navbarDropdown role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>
          Olá ".$_SESSION['usuario']['nome']."</a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='cadastro.view.php'>Novo Cadastro</a>
          <a class='dropdown-item' href='#'>Alterar Senha</a>
          <a class='dropdown-item' href='#'>Deslogar</a>
      </li>
      </ul>";

    }else{?>
        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
    <?php }; ?>   
    
  </div>
</nav>

  <form method="post" action="../Actions/cadastrar.action.php" style="margin-top: 20px;">
  <div class="form-row">
    <div class="col">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" placeholder="Primeiro Nome" name="nomeUsuario1">
    </div>
    <div class="col">
    <label for="inputEmail4">Sobrenome</label>
      <input type="text" class="form-control" placeholder="Último Nome" name="nomeUsuario2">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control " id="inputEmail4" placeholder="Email" name="emailUsuario">
    </div>   
    <div class="input-group mb-2 mb-sm-0">

    <input type="text" name="aviso" class="form-control col-md-12" disabled placeholder="Plataformas aceitas: hotmail e gmail" style="text-align: center;">

  </div>

  <input type="submit" name="btnEnviar" class="form-control btn btn-primary" style="margin-top: 10px;">
</form>
  
<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="../Actions/logar.action.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Endereço de Email</label>
            <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" aria-describedby="emailHelp" placeholder="master@hotmail.com">
            <small id="emailHelp" class="form-text text-muted">Insira o endereço completo, sem abreviações.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="senhaUsuario" name="senhaUsuario" placeholder="****************">
          </div>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

  </body>

  </html>