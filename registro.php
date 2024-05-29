<?php
session_start();
include_once("conexao.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$result_usuario = "INSERT INTO `cliente` (`idCliente`,`nomeCliente`, `senhaCliente`, `emailCliente`) VALUES (NULL, '$nome', '$senha', '$email')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

 if (mysqli_insert_id($conn)){
     $_SESSION['msg'] = "Usuário cadastrado com sucesso";
     header("Location: login.html");
 }else{
     header("Location: cadastro.html");
 }

?>