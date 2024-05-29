<?php
session_start();
include_once("conexao.php");

$nomecartao = $_POST['nomecartao'];
$numerocartao = $_POST['numerocartao'];
$datavalidade = $_POST['datavalidade'];
$cvv = $_POST['cvv'];
$cliente= '32';

$result_usuario = "INSERT INTO `formadepagamento` (`idPagamento`, `nomeCartao`, `numeroCartao`, `dataValidade`, `cvv`, `idCliente`) VALUES (null, '$nomecartao', '$numerocartao', '$datavalidade', '$cvv', '$cliente')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)){
    
    header("Location: concluido.html");
}else{
    header("Location: pagamento.html");
}

?>