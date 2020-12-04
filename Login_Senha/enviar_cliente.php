
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
     crossorigin="anonymous">
   
    <title>Cadastro cliente</title>
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
    <form class="form-inline my-2 my-lg-0" >
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
      </ul>
    </form>

  </div>
</nav>

   

<div class="mainlogin">
  <div class="container ">   
        <div class="col-sm-8">

       
          <form class="form-signin" name="form1" action="recebe_cliente.php" >
          <p class="h3 mb-3 font-weight-normal">Cadastrar Cliente</p><br>

        <label for="inputNome" id="write">Nome</label>
        <input type="text" class="form-control" id="number"  placeholder="Nome Completo" name="nome" required>
         <br>
         <label for="inputtelefone" >Telefone</label>
        <input type="text"  onKeyPress="MascaraTelefone(form1.telefone);" 
        maxlength="14"  onBlur="ValidaTelefone(form1.telefone);" class="form-control" placeholder="Telefone" name="telefone" required >
        <span id="teste"></span>
        <br>
  
        <label for="inputcpf" >CPF</label>
        <input type="text" name="cpf" onBlur="ValidarCPF(form1.cpf);" 
       onKeyPress="MascaraCPF(form1.cpf);" maxlength="14" class="form-control"  id="cpf" placeholder="CPF" name="cpf" required >
        <span id="resultado"></span>
        <br>
        <label for="inputrg" >RG</label>
        <input type="text" id="rg" size="30" maxlength="12" class="form-control" onKeyPress="MascaraRG(form1.rg);" placeholder="RG" name="rg" required >
        <br>
        <button class="btn btn-outline-primary" value="LIMPAR">LIMPAR</button>
        <button class="btn btn-outline-primary" value = "CADASTRAR" >CADASTRAR</button>
        </form>
     </div>

</body>
<script src="jquery.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="codigo/cadas_cli.js"></script>
</html>

 
  
