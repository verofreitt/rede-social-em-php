<?php
session_start();
if($_SESSION['logado'] == true){
    echo "Bem Vindo".$_SESSION['nome'];

} else{
    session_destroy();
    header("location:deslogar.php");
}
?>