<?php  session_start(); ?>  // session starts with the help of this function 

<?php

if(isset($_SESSION['use']))    
                              
 {
    header("Location:index.php"); 
 }
else
{
    include 'enviar_cadastro.php';
}

if(isset($_POST['login']))    
{
     $email = $_POST['email'];
     $senha = $_POST['senha'];

    if(isset($_POST["email"]) && isset($_POST["senha"])){
    $file = fopen('data.txt', 'r');
    $good=false;
    while(!feof($file)){
        $line = fgets($file);
        $array = explode(";",$line);
    if(trim($array[0]) == $_POST['email'] && trim($array[1]) == $_POST['senha']){
            $good=true;
            break;
        }
    }

    if($good){
    $_SESSION['use'] = $email;
        echo '<script type="text/javascript"> window.open("index.php","_self");</script>';  
    }else{
        echo "Email ou senha inválido";
    }
    fclose($file);
    }
    else{
        include 'enviar_cadastro.php';
    }

}
?>