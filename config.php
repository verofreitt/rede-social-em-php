<?php  
$servidor = "127.0.0.1:3306";
$usuario = "root";
$senha = "";
$banco = "mercado";


$conecta = mysqli_connect($servidor, $usuario, $senha) or print (mysqli_error());
mysqli_select_db($conecta,$banco) or print(mysqli_error());

?>