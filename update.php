<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h2>PHP - Atualizar</h2>
        <form action="updated.php" method="post">
            <label>Id</label>
            <input type="text" name="id" placeholder="Digite um id" autocomplete="off">
            <label>Nome</label>
            <input type="name" name="name" placeholder="Digite seu nome" autocomplete="off">
            <button type="submit">Enviar</button>
        </form>
        <form action="index.php">
            <button type="submit" class="botao">Voltar</button>
        </form>
    </section>
</body>

</html>