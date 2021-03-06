
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
     <script src="servico.js"></script> 
     <script src="cadas_cli.js"></script>
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

  
     
    <div class="container "> 
   
      <div class="row">
        <div class="col-sm-8">
        
          
           
      
            <h1 class="h3 mb-3 font-weight-normal">Cadastrar aparelho</h1>
            <form class="form-signin" action="recebe_aparelho.php" method="POST">


  <label for="inputModel"  id="write">Marca do aparelho</label>
<input type="text" name="tipo" class="form-control" placeholder="Marca dispositivo" required>
<br>
<label for="inputModel"  id="write">Modelo do aparelho</label>
<input type="text" name="modelo" class="form-control" placeholder="Modelo" required>
<br>
<label for="inputSituation" >Situação do aparelho</label>
<input type="text" name="problema"class="form-control" placeholder="Situação" required>
<br>

<label for="inputPassword" >Senha do aparelho</label>
<input type="text" name="senha" class="form-control" placeholder="Senha do aparelho" required>
<br>
<label for="inputSituation" >Acessorio</label>
<input type="text" name="acessorios"class="form-control" placeholder="acessorios aparelho" required>
<br>
<label for="inputSituation" >Imei</label>
<input type="text" name="imei"class="form-control" placeholder="Imei aparelho" required>
<br>
<label for="inputDate" >Data de entrada </label>
<input type="date" name="dt_entrada" class="form-control" placeholder="Data de entrada" required>
<br>
<label for="inputvalor" >Valor total</label>
<input type="text" name="total" class="form-control" placeholder="Valor total" required>
<br>
         <button class="btn btn-outline-primary" onclick="limpar()">LIMPAR</button>
               
        <button class="btn btn-outline-primary" onclick="alterar()">ALTERAR</button>
           
          
           <button class="btn btn-outline-primary" value = "CADASTRAR"  onclick="">CONFIRMAR</button>
           </form>
       </div>
         
    
   
   </body>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </html>
    