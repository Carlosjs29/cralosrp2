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

$sql= "SELECT * FROM produto";

$result = $conexao->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<a href="/cralosrp2/mercearia projeto/Home/home.html" class="btn-home">Voltar para Home</a>

<table class= "table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome do Produto</th>
            <th>Tipo</th>
            <th>Quantidade</th>
            <th>Data de Validade</th>  
            <th>Descricao</th>
        </tr> 
    </thead>

    <tbody>
        <?php

            while($user_data= mysqli_fetch_assoc($result)){

                echo"<tr>";
                echo"<td>".$user_data['id']."</td>";
                echo"<td>".$user_data['nomeProd']."</td>";
                echo"<td>".$user_data['tipoProd']."</td>";
                echo"<td>".$user_data['quantProd']."</td>";
                echo"<td>".$user_data['dataValidade']."</td>";
                echo"<td>".$user_data['descricaoProd']."</td>";
            }

        ?>

    </tbody>

</table>

</body>
</html>