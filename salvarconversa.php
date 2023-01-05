<?php 
include "config.php";
$login = $_POST["login"];
$password= $_POST["senha"];
$email= $_POST["email"];

$sql = sprintf("insert into pessoas (login,senha,email) values ('%s','%s','%s')", $login,$password,$email);

if(mysqli_query($conecta,$sql)) {
    header("location:index.php");
} else {
    echo "Erro ao inserir conversa".mysqli_error($conecta);
}

?>