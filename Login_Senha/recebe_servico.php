<?php


if (isset($_POST['inlineRadioOptions'])) {
  var_dump("escolheu " . $_POST['inlineRadioOptions']);

} 
else {
  var_dump("não escolheu nenhuma Opções");
}
$_POST['inlineRadioOptions'] = ( isset($_POST['inlineRadioOptions']) ) ? $_POST['inlineRadioOptions'] : null;

# Visualizando os dados
var_dump($_POST);



?>