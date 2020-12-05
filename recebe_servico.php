



<?php
include('conexao.php');
$opcao = $_GET['opcao']; // vai vir o que está no value do radio

$multi = $_GET['Ds_aprovacao_aparelhos_cliente']; // por eu ter colocado escolhas[] no form ele vai vir como um array.

echo "Sua escolha foi... " . $opcao;
echo "<br /><br />";

echo "E sua outras escolhas... <br />";
for($i = 0; $i < count($multi); $i++) {
  echo " Escolha " . $i . ": " . $multi[$i] . "<br />";

 //inclue as inform��es das variaveis
 $sql="INSERT INTO  ordem_servico
 (Ds_aprovacao_aparelhos_cliente,
 Cliente_cd_cliente,
 Orcamento_cd_ordem_servico, 
 aparelho_cd_aparelho, 
 Usuario_cd_usuario)
 VALUES
 ( '$Ds_aprovacao_aparelhos_cliente' )";

 //verifica se foi inserido
 if(mysql_query($sql,$conexao))
 {
  echo "<script> alert('Alterado concluido!') </script>";
  echo "<script> self.location='enviar_servico.php' </script>";
 }
 else
 {
   echo "<script> alert('Problema na inclus�o!') </script>";
   die($sql);
 }


?>
