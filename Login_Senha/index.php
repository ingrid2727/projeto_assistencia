<!DOCTYPE html>
<meta charset="utf-8">
<html lang="pt-br">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
     crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
  <title>Área de desenvolvimento</title>
</head>

<body>

     
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <img src="imagem/log.png" class="rounded mx-auto d-block" alt="" width="200" height="90">
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
  <ul class="nav nav-pills">
      <li class="nav-item active">
        <a class="nav-link"href="enviar_cliente.php">Cadastro de cliente<span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="enviar_aparelho.php">Cadastro de Aparelhos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="enviar_orcamento.php">Cadastro de orcamentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="enviar_servico.php">Serviços</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="enviar_listarcli.php">Listar Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="enviar_garantia.php">Gerar Garantia</a>
      </li>
     
    </ul>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    <form class="form-inline my-2 my-lg-0" action="pesquisar.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
      </ul>
    </form>
  </div>
</nav>



<div id="bemvindo">

  <div  class="container text-center"  >
   <?php

$email_cookie = $_COOKIE['email'];

if(isset($email_cookie)){

  echo"Bem-Vindo, $email_cookie <br>";

  echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";

}else{

  echo"Bem-Vindo, convidado <br>";

  echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";

  echo"<br><a href='enviar_login.php'>Faça Login</a> Para ler o conteúdo";

}

?>
  <h1>Sejá bem vindo a sua área de<br/> desenvolvimento</h1>
</div>
</div>



</body>
</html>