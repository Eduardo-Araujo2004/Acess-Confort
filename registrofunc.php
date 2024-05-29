<?php
session_start();
include_once("conexao.php");

$telefone = $_POST['telefone'];
$telefone2 = $_POST['telefone2'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$nome = $_POST['nome'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$numero = $_POST['numero'];
$municipio = $_POST['municipio'];
$logradouro = $_POST['logradouro'];
$tipologradouro = $_POST['tipologradouro'];
$cpf = $_POST['cpf'];
$setor = $_POST['setor'];

$result_usuario = "INSERT INTO `funcionario` (`idFuncionario`, `telefoneFuncionario`, `telefone2Funcionario`, `senhaFuncionario`, `emailFuncionario`, `nomeFuncionario`, `bairro`, `estado`, `cep`, `complemento`, `numero`, `municipio`, `logradouro`, `tipologradouro`, `cpfFuncionario`, `idSetor`) VALUES (NULL,'$telefone', '$telefone2', '$senha', '$email', '$nome', '$bairro', '$estado', '$cep', '$complemento', '$numero', '$municipio', '$logradouro', '$tipologradouro', '$cpf', '$setor')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)){
    
    header("Location: admin.html");
}else{
    header("Location: cadfun.html");
}

?>