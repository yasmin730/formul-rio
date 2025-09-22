<?php


$host    = "localhost"; 
$usuario = "root";   
$senha   = "";          
$banco   = "yasmin_vitoria";     

// Conexão MySQLi
$conexao = mysqli_connect($localhost, $root, $senha, $yasmin_vitoria);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}


mysqli_set_charset($conexao, "utf8");
?>