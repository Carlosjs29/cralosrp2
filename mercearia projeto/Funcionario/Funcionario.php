<?php
$dbhost = '127.0.0.1:3306';
$dbUserName = 'root';
$dbPassword = 'senai.123';
$dbName = 'projetobanco';

$conexao = new mysqli($dbhost, $dbUserName, $dbPassword, $dbName);

/*if($conexao->connect_errno)
{
    echo("Seu servi num ta conectado");
}else{
    echo("Servi conectado");
}*/

if(isset($_POST['submit']))
{
    $nomeF = $_POST['nome'];
    $cpfF = $_POST['cpf'];
    $telefoneF = $_POST['telefone'];
    $emailF = $_POST['email'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO funcionario(nome,cpf,telefone,email,endereco) values ('$nomeF','$cpfF','$telefoneF','$emailF','$endereco')");
}

?>
