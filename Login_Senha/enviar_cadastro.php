<!DOCTYPE html>
<meta charset="utf-8">
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastro</title>
</head>

<body>
  <div class="mainlogin">
    <p class="entrar" align="center">Cadastro de Usuário</p>

    <form name="f2" class="form1" action="recebe_cadastro.php" method="POST">
      <input class="un" name="nome" type="text" align="center" placeholder="Nome" required>
      <input class="un" name="email" type="email" align="center" placeholder="Email" required>
      <input class="senha" name="senha" type="password" align="center" placeholder="Senha" required>
      <input class="senha" name="senha" type="password" align="center" placeholder="Confirme a senha" required>
      <input class="enviar" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
      
      <p class="forgot" align="center"><a href="enviar_login.php">Ir para o Login</p>        
    </div>
</body>
</html>