<?php

$dbhost = '127.0.0.1:3306';
$dbUserName = 'root';
$dbPassword = 'senai.123';
$dbName = 'projetobanco';

$conexao = new mysqli($dbhost, $dbUserName, $dbPassword, $dbName);

/* if($conexao->connect_errno)
{
    echo("Seu servi num ta conectado");
}else{
    echo("Servi conectado");
} */

if(isset($_POST['submit']))
{
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,cpf,telefone,email,senha) values ('$nome','$cpf','$telefone','$email','$senha')");
}


?>

