<?php

//inclue conexao
 include('conexao.php');

 include ('conexao.php');
 if (isset($_POST['Ds_aprovacao_aparelhos_cliente'])) {
   var_dump("escolheu " . $_POST['Ds_aprovacao_aparelhos_cliente']);
 
 } 
 else {
   var_dump("não escolheu nenhuma Opções");
 }
 $_POST['Ds_aprovacao_aparelhos_cliente'] = ( isset($_POST['Ds_aprovacao_aparelhos_cliente']) ) ? $_POST['Ds_aprovacao_aparelhos_cliente'] : null;
 
 # Visualizando os dados
 var_dump($_POST);
 
 //captura os valores dos campos
 
 $Ds_aprovacao_aparelhos_cliente = $_POST['Ds_aprovacao_aparelhos_cliente'];
 

 
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

include('fecha.php');
?>
