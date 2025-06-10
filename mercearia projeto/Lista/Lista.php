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

$sql= "SELECT * FROM cadastro";

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
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Telefone</th>  
            <th>Senha</th>
        </tr> 
    </thead>

    <tbody>
        <?php

            while($user_data= mysqli_fetch_assoc($result)){

                echo"<tr>";
                echo"<td>".$user_data['id']."</td>";
                echo"<td>".$user_data['nome']."</td>";
                echo"<td>".$user_data['email']."</td>";
                echo"<td>".$user_data['cpf']."</td>";
                echo"<td>".$user_data['telefone']."</td>";
                echo"<td>".$user_data['senha']."</td>";
            }

        ?>

    </tbody>

</table>

</body>
</html>