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

  	<form style="margin-top: 5%;" action="../Actions/logar.action.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" style="margin-left: 1%;">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu email" name="emailUsuario">
    <small id="emailHelp" class="form-text text-muted" style="margin-left: 1%;">Nunca compartilhe com ninguém seus dados.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="margin-left: 1%;">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha" name="senhaUsuario">
  </div>
  <button type="submit" class="btn btn-primary" style="width: 100%;">Entrar</button>

  </form>

  <button type="button" class="btn btn-primary" style="width: 100%; margin-top: 2%;">Esqueci minha senha</button>



  </body>

</html>