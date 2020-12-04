<?php
$Ds_aprovacao_aparelhos_cliente = "option3";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
     crossorigin="anonymous">
    <script src="servico.js"></script>
    <title></title>
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
    </div>
  </nav>
  
 
  </div>
  <div  class="container text-center"   >
    <h2 aria-label="arial" align="center"  >Lista de Serviço</h2>
    <table class="table table-striped table-sm" id="table" >
          <thead >
            <tr class="header" >
              <th ></th>
              <th ><button class="btn btn-outline-primary my-2 my-sm-0" onclick="filterSelection('Todos')"> Mostrar Tudo</button></th>
              <th ><button class="btn btn-outline-primary my-2 my-sm-0" onclick="filterSelection('Cliente')" name=>Clientes </button></th>
              <th ><button class="btn btn-outline-primary my-2 my-sm-0" onclick="filterSelection('Modelo')">Modelo </button></th>
              <th ><button class="btn btn-outline-primary my-2 my-sm-0" onclick="filterSelection('Analise')"> Em Analise</button> </th>
              <th ><button class="btn btn-outline-primary my-2 my-sm-0" onclick="filterSelection('Aprovados')"> Aprovados </button></th>
              <th><button class="btn btn-outline-primary my-2 my-sm-0" onclick="filterSelection('Negados')"> Negados </button></th>
             

            </tr>
            <tr>
              <th >#</th>
              <th id="write" name="">Cliente</th>
              <th id="greem"name="" >Modelo</th>
              <th id="greem" name="">Em Analise</th>
              <th id="red" name="">  Negado </th>
              <th id="black" name=""> Aprovado</th>
              <th id="pink" name="">Concluido</th>
              <th>--Opção--</th>
            </tr>
          </thead>
          <tbody>
            <tr > 
            <div  class="container">
            <form action="recebe_servico.php" method="post">
            <div class="form-check">

              <td>1</td>
              <td name=""id="write">Maxwell</td>
              <td name=""id="blo">Motorola</td>
              
              <td> <input class="form-check-input" type="radio" name="Ds_aprovacao_aparelhos_cliente" id="inlineRadio1" value="option1" ></td>
              <td>  <input class="form-check-input" type="radio" name="Ds_aprovacao_aparelhos_cliente" id="inlineRadio2" value="option2" ></td>
              <td>  <input class="form-check-input" type="radio" name="Ds_aprovacao_aparelhos_cliente" id="inlineRadio3" value="option3" ></td>
              <td>  <input class="form-check-input" type="radio" name="Ds_aprovacao_aparelhos_cliente" id="inlineRadio4" value="option4"></td>
              <td> <button class="btn btn-outline-primary my-2 my-sm-0"  type="submit" value="Garantia" class="btn btn-default">Garantia</button></td>
          </div>
                  </tr>
        </div>
    </div>
</div>
<div class="container">
            <form action="recebe_servico.php" method="post">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio"
                               name="Ds_status_orcamento"
                               value="option1"
                               class="form-check-input"
                               <?php echo ($Ds_status_orcamento == "option1") ? "checked" : null; ?>/> EM ANALISE
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio"
                               name="Ds_status_orcamento"
                               value="option2"
                               class="form-check-input"
                               <?php echo ($Ds_status_orcamento == "option2") ? "checked" : null; ?>> APROVADO
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio"
                               name="Ds_status_orcamento"
                               value="option3"
                               class="form-check-input"
                               <?php echo ($Ds_status_orcamento == "option3") ? "checked" : null; ?>/> CONCLUÍDO
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit me!" class="btn btn-default"/>
                </div>
            </form>
</body>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <script>
// Função para mudar o conteúdo de t2
function modifyText() {
  var t2 = document.getElementById("write");
  t2.firstChild.nodeValue = "";    
}
 
// Função para adicionar uma espera de evento em t
function load() { 
  var el = document.getElementById("table"); 
  el.addEventListener("click", modifyText, false); 
} 

document.addEventListener("DOMContentLoaded", load, false);
</script>

</html>