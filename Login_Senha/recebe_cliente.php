<?php

include ('conexao.php');

$nome = $_POST['nm_cliente']  ;
$telefone = $_POST['nu_telefone']  ;
$cpf = $_POST['cpf']  ;
$rg = $_POST['rg']    ;

$sql= "INSERT into  cliente (nm_cliente,nu_telefone,cpf,rg) values('$nome','$telefone','$cpf','$rg')";

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

echo "<script>self.location='enviar_cliente.php'</script>";
?>






