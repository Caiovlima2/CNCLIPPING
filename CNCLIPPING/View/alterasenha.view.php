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

<form method="post" style="margin: 5%;" action="../Actions/alterasenha.action.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Id Usuário</label>
    <input type="text" class="form-control" name="idUsuario" placeholder=<?php echo $_GET["id"]; ?> value=<?php echo $_GET["id"]; ?> readonly>
    <small id="emailHelp" class="form-text text-muted">Este campo não pode e nem deve ser alterado.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="senhaUsuario1" name="senhaUsuario1" placeholder="**********">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="senhaUsuario2" name="senhaUsuario2" placeholder="**********">
  </div>
  <button type="submit" class="btn btn-primary" style="width: 100%;">Alterar</button>
</form>

</body>
</html>