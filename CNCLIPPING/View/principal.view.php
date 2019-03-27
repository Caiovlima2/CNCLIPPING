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


  <img src="../Imagens/icon.png" style="height: 20%; width: 20%; margin-left: 40%; margin-top: 5%">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <ul class="navbar-nav mr-auto">

        <button class="btn btn-primary" data-toggle="modal" data-target="#mdlproposta" style="margin-top: 10%">Gerar Orçamento</button>

    </ul>
    

  <div class="row">

  <div class="col-6 col-md-4"></div>
  <div class="col-12 col-md-8"></div>
  
</div>

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

<div class="modal fade" id="mdlproposta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Propostas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Selecione quantas propostas deseja:
      </div>
      <div class="modal-footer">
        <a class="nav-link" href="gerarorcamento.view.php"><button type="button" class="btn btn-primary">1 Proposta</button></a>
        <a class="nav-link" href="gerarorcamento2.view.php"><button type="button" class="btn btn-primary">2 Propostas</button></a>
        <a class="nav-link" href="gerarorcamento3.view.php"><button type="button" class="btn btn-primary">3 Propostas</button></a>
      </div>
    </div>
  </div>
</div>
  </body>

  </html>