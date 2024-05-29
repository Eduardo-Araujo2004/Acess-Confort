<?php
session_start();
include_once("conexao.php");

$email = $_POST['email'];
$senha = $_POST['password'];          
$cnpj = $_POST['cnpj'];

$result_usuario = "INSERT INTO `lojista` (`idLojista`, `emailLojista`, `senhaLojista`, `cnpj`) VALUES (NULL, '$email', '$senha', '$cnpj')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

 if (mysqli_insert_id($conn)){
     
     header("Location: login.html");
 }else{
     header("Location: lojista.cadastro.html");
 }

?>