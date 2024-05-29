<?php
session_start();
include_once("conexao.php");

$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$cor = $_POST['cor'];          
$tamanho = $_POST['tamanho'];
$nome = $_POST['nome'];

$result_usuario = "INSERT INTO `produto` (`idRoupas`, `Valor`, `qntdRoupas`, `Tamanho`, `Cores`, `nomeProduto`) VALUES (NULL, '$valor', '$quantidade', '$tamanho', '$cor', '$nome')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

 if (mysqli_insert_id($conn)){
     
     header("Location: cadprod.html");
 }else{
     header("Location: cadprod.html");
 }

?>