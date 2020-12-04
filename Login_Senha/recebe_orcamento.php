<?php

include ('conexao.php');

$nome = $_POST['nome']  ;
$status = $_POST['status']    ;
$orcamento = $_POST['orcamento ']   ;
$valor = $_POST['valor']    ;

$sql= "INSERT into  orcamento ( 
Nm_cliente , 
Ds_status_orcamento, 
ds_orcamento,
Usuario_cd_usuario,
vl_orcamento) 
  VALUES (
      '$nome',
      '$status',
      '$orcamento',
      '$valor')";

if(   mysql_query($sql,$conexao)  )
{
    //registro incluido

    echo "<script>alert('Registro incluido')</script>";

}
else
{
    //problema na inclus�o

    echo mysql_error($conexao);

    echo "<script>alert('Problema na inclusão')</script>";

    die("<p>$sql</p>");  //liberar o comando para achar erro de comando sql

}


include('fecha.php');

echo "<script>self.location='enviar_orcamento.php'</script>";
?>








?>