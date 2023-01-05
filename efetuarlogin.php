<?php

include "config.php";
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = sprintf("select * from usuarios where email = '%s' and senha = '%s'",$email,$senha1);
if(mysqli_num_rows ($result) > 0){
$linha = mysqli_fetch_array($result);
session_cache_expire(30);
session_start();
$_SESSION['logado'] = true;
$_SESSION['email'] = true; $linha['email'];
$_SESSION['id'] = true; $linha['id'];
$_SESSION['nome'] = true; $linha['nome'];


header("location:indexlogado.php");
echo "entrou";

}else{

        session_destroy();
        header("location:formlogin.php");
}







?>