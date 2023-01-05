<?php   
include "config.php";
$produto = $_POST["produto"];
$descricao = $_POST["descricao"];
$valor = $_POST["valor"];

$sql = sprintf("insert into tb_mercado (produto,descricao,valor) values ('%s', '%s', '%s')" ,$produto,$descricao,$valor);
if(mysqli_query($conecta,$sql)){
header("location:index.php");
}else{
    echo "Erro ao inserir produto".mysqli_error($conecta);
}

?>

