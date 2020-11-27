<?php

    
   

include ('conexao.php');




$tipo = $_POST['tipo ']  ;
$modelo = $_POST['modelo']  ;
$problema= $_POST['problema']  ;
$senha = $_POST['senha']  ;
$acessorios = $_POST['acessorios']  ;
$imei = $_POST['imei']  ;
$cd_cliente = $_POST['cd_cliente']  ;
$dt_entrada= $_POST['dt_entrada']  ;



$sql= "INSERT  into  aparelho(Nm_tipo_modelo,Nm_modelo, Nm_prolema, cd_senha, ds_acessorios ,Nu_imei,cd_castro_cliente, cd_castro_cliente,dt_entrada) 
values('$tipo','$modelo ','$problema','$senha','$acessorios','$imei','$cd_cliente','$dt_entrada')";

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