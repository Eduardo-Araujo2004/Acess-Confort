<?php
if(isset($_POST['email']) || isset($_POST['senha'])){

if(strlen($_POST['email']) == 0){
    echo "Preencha seu e-mail;";
} else if(strlen($_POST['senha']) == 0){
    echo "Preencha sua senha";
} else if(isset($_POST['email']) || isset($_POST['senha'])){

    $email = $conn -> real_escape_string($_POST['email']);
    $senha = $conn -> real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM funcionario WHERE emailFuncionario = 'admin@admin' AND senhaFuncionario = 'admin'";
    $sql_query = $conn->query($sql_code) or die("Falha na execução do codigo SQL: ". $conn->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1){

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['idFuncionario'] = $usuario['idFuncionario'];
        $_SESSION['telefoneFuncionario'] = $usuario['telefoneFuncionario'];
        $_SESSION['telefone2Funcionario'] = $usuario['telefone2Funcionario'];
        $_SESSION['senhaFuncionario'] = $usuario['SenhaFuncionario'];
        $_SESSION['emailFuncionario'] = $usuario['emailFuncionario'];
        $_SESSION['nomeFuncionario'] = $usuario['nomeFuncionario'];
        $_SESSION['bairro'] = $usuario['bairro'];
        $_SESSION['estado'] = $usuario['estado'];
        $_SESSION['cep'] = $usuario['cep'];
        $_SESSION['complemento'] = $usuario['complemento'];
        $_SESSION['numero'] = $usuario['numero'];
        $_SESSION['municipio'] = $usuario['municipio'];
        $_SESSION['logradouro'] = $usuario['logradouro'];
        $_SESSION['tipologradouro'] = $usuario['tipologradouro'];
        $_SESSION['cpfFuncionario'] = $usuario['cpfFuncionario'];
        $_SESSION['idSetor'] = $usuario['idSetor'];

        header("Location: adm.html");

    }else{
        echo "Falha ao logar! e-mail ou senha incorretos";
    }

}


}

?>