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
    $nomeprod = $_POST['nomeprod'];
    $tipoprod = $_POST['tipoprod'];
    $quantprod = $_POST['quantprod'];
    $datavalidade = $_POST['datavalidade'];
    $descproduto = $_POST['descproduto'];

    $result = mysqli_query($conexao, "INSERT INTO produto(nomeProd,tipoProd,quantProd,dataValidade,descricaoProd) values ('$nomeprod','$tipoprod','$quantprod','$datavalidade','$descproduto')");

}

?>
