
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
    <script src="codigo/cadas_cli.js"></script>
    <title>Cadastro cliente</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
    <img src="imagem/log.png" class="rounded mx-auto d-block" alt="" width="200" height="90">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link"href="enviar_cliente.php">Cadastro de cliente<span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="enviar_orcamento.php">Cadastro de Orçamento</a>
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
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>
 
 
      <div class="container ">   
        

        
          <div class="col-sm-8">
           
        <form class="form-signin" onsubmit= "return vallidform()">
         
      
          <h1 class="h3 mb-3 font-weight-normal">Garantia</h1>
      
          <label for="inputName" >Cadastro do Cliente</label>
          <input type="text" class="form-control" placeholder="Cadastro do Cliente" required autofocus>
          <br>
      
          <label for="inputName" >Cadastro do Orçamento</label>
          <input type="text" class="form-control" placeholder="Cadastro do Orçamento" required>
          <br>
      
          <label for="inputDate" >Data da Retirada:</label>
          <input type="date" class="form-control" placeholder="Data da Retirada" required>
          <br>
      
          <label for="inputText" >Imei do Aparelho</label>
          <input type="text" class="form-control" placeholder="Imei do Aparelho" required>
          <br>
      
          <div class="checkbox mb-3">
              <label>
              <input type="checkbox" value="Pago">Pagamento Concluido</label>
              <br>
      
              
              
          </div>
          <button class="btn btn-outline-primary" onclick="limpar()">LIMPAR</button>
                
            <button class="btn btn-outline-primary" onclick="alterar()">ALTERAR</button>
            <button class="btn btn-outline-primary" onclick="">Registrar a Garantia</button>
        
      </div>
        <br>
        </form>
    </div>
    </body>
    
      <script src="codigo/https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="codigo/https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </html>
    