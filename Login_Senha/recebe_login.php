<?php

  $email = $_POST['email'];

  $entrar = $_POST['entrar'];

  $senha = ($_POST['senha']);

  $connect = mysql_connect('localhost','root','usbw');

  $db = mysql_select_db('assistencia');

    if (isset($entrar)) {

             

      $verifica = mysql_query("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");

        if (mysql_num_rows($verifica)==1){

          echo"<script language='javascript' type='text/javascript'>
          alert('email e/ou senha incorretos');
          window.location.href='enviar_login.php';</script>";

          die();

        }else{

          setcookie("email",$email);
          


          header("Location:index.php");

        }

    }

?>
