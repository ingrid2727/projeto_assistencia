<!DOCTYPE html>
<meta charset="utf-8">
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
     crossorigin="anonymous">
  <title>Mv Technology</title>
</head>

<body>



  <div class="mainlogin">
   
    <form name="f1" class="form1" action="recebe_login.php" method="POST">
    <p class="entrar" align="center">Mv Technology</p> 
    <img src="imagem/log.png" class="rounded mx-auto d-block" alt="" width="350" height="100">
    <input class="un" name="email" type="text" align="center" placeholder="Email" required>
    <input class="senha" name="senha" type="password" align="center" placeholder="Senha" id="psw" 
    required>
    <div align="center" >
      <table>
        <tr>
          <td>
      <input  type="checkbox" onclick="fazer()" ></td><td>Mostrar senha</td>
    
      </tr>
      </table>
    </div>
    <input  class="enviar" align="center"  type="submit" value="entrar" id="entrar" name="entrar"
      onclick="document.getElementById('id01').style.display='none'"><br>
   
      <p class="forgot" align="center"><a href="enviar_cadastro.php">Não tem cadastro? Clique Aqui</p>        
    </div>
    
  </body>

      
     
<script src="codigo/login.js"></script>
</html>