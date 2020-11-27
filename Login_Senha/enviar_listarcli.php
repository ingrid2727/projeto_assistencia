
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
     <script src="codigo/servico.js"></script>
    <title></title>
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
        <input class="form-control mr-sm-2" type="search"  id="myInput" onkeyup="myFunction()" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>

          <h2 aria-label="arial" align="center">Lista de Clientes</h2>
          <br>
          <div class="table-responsive"   id="myTable">
            <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th >Nome</th>
                      <th>Telefone</th>
                      <th>RG</th>
                      <th>CPF</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                 
                  
                  </tbody>
                </table>
                <button class="btn btn-outline-primary" onclick="excluir()">Excluir</button>
                
               <button class="btn btn-outline-primary" onclick="alterar()">ALTERAR</button>
              </div>
            
        </div>
    
    </div>
</div>
</body>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>
