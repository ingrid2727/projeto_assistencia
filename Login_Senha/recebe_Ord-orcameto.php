<?php

    
   

include ('conexao.php');


$nome = $_POST['nome']  ;
$data= $_POST['data']  
$modelo = $_POST['modelo']    ;
$situacao = $_POST['situacao']    ;
$usuario =$_POST['usuario'];
$valor = $_POST['valor']    ;
$senha = $_POST['senha']  ;
$observacao = $_POST['observacao']    ;


$sql= "insert into  orcamento ( Nm_cliente , data , Ds_status_orcamento, ds_orcamento, Usuario_cd_usuario , vl_orcamento, senha , ds_observacao`) 
values('$nome','$data','$modelo','$situacao','$usuario','$valor','$senha','$observacao')";

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