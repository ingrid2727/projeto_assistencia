<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$fl_administrador = $_POST['fl_administrador'];
	
$connect = mysql_connect('localhost','root','usbw');
$db = mysql_select_db('assistencia');
$query_select = "SELECT email FROM usuario WHERE email = '$email'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['email'];

if($email == "" || $email == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo email deve ser preenchido');window.location.href='
  enviar_cadastro.php';</script>";

  }else{
    if($logarray == $email){

      echo"<script language='javascript' type='text/javascript'>
      alert('Esse email já existe');window.location.href='
      enviar_cadastro.php';</script>";
      die();

    }else{
      $query = "INSERT INTO usuario (nome,email,senha,fl_administrador) VALUES ('$nome','$email','$senha','$fl_administrador')";
      $insert = mysql_query($query,$connect);
      //print_r($query);
      //exit;


      if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Usuário cadastrado com sucesso!');window.location.
        href='enviar_cadastro.php'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse usuário');window.location
        .href='enviar_cadastro.php'</script>";
      }
    }
  }
  
include('fecha.php');

echo "<script>self.location='enviar_cadastro.php'</script>";
?>
 