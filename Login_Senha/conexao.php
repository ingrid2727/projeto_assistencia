<?php
$conexao= mysql_connect('localhost','root','usbw');
if ($conexao)
{

    if(!mysql_select_db('assistencia',$conexao))
{

die('erro:'.mysql_error($conexao));
}
}
else
{
    die('Problema na conexão!');

}
?>