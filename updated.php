<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main">
    <?php
    include "conn.php";

    $id = $_POST['id'];
    $name = $_POST['name'];

    //preparar

    $stmt = $conn->prepare("UPDATE employee SET name = :name WHERE id = :id");


    //trocar

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $name);

    //executar

    $stmt->execute();

    ?>
    
    <h1 class="text">Informações atualizadas com sucesso!</h1>
    <p class="paragrafo">Pode retornar a essa função sempre que quiser :)</p>
    <a href="index.php" class="btn">Home</a>
</body>

</html>