<?php
include ('conexao.php');

$nome = $_POST['nome']  ;
$telefone = $_POST['telefone']  ;
$cpf = $_POST['cpf']  ;
$rg = $_POST['rg']    ;

$sql= "INSERT INTO cliente (
    nm_cliente,
    nu_telefone,
    cpf,
    rg)
    VALUES(
        '$nome',
        '$telefone',
        '$cpf',
        '$rg')";

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






