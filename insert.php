<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="main">
    <?php

    include "conn.php";

    $name = $_POST['name'];
    $email = $_POST['email'];

    //preparar

    $stmt = $conn->prepare("INSERT INTO employee (name, email) VALUES (:name, :email)");

    //trocar

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);

    //executar

    $stmt->execute();

    ?>
    
    <h1 class="text">Cadastro Realizado Com Sucesso!</h1>
    <p class="paragrafo">Obrigado pelo cadastro no nosso sistema :)</p>
    <a href="index.php" class="btn">Home</a>
</body>
</html>