<?php 

$dbhost = '127.0.0.1:3306';
$dbUserName = 'root';
$dbPassword = 'senai.123';
$dbName = 'projetobanco';

$conexao = new mysqli($dbhost, $dbUserName, $dbPassword, $dbName);

/* 
if($conexao->connect_errno)
{
   echo("Seu servi num ta conectado");
}else{
   echo("Servi conectado");
} 
*/

if(isset($_POST['submit']))
{
    $cliente = $_POST['cliente'];
    $funcionario = $_POST['funcionario'];
    $produtos = $_POST['produtos'];
    $quantidade = $_POST['quantidade'];
    $total = $_POST['total'];

    $result = mysqli_query($conexao, "INSERT INTO vendas(cliente,funcionario,produtos,quantidade,total) values ('$cliente','$funcionario','$produtos','$quantidade','$total')");
}


?>