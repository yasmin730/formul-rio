<?php


$host    = "localhost"; 
$usuario = "root";   
$senha   = "";          
$banco   = "yasmin_vitoria";     

$conexao = mysqli_connect($localhost, $root, $senha, $banco);
if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}


mysqli_set_charset($conexao, "utf8");
?>