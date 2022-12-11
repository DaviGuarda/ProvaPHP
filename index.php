<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova :: Tido</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h2>PHP</h2>
        <form action="insert.php" method="post">
            <label>Nome</label>
            <input type="text" name="name" placeholder="Digite seu nome" autocomplete="off">
            <label>Email</label>
            <input type="email" name="email" placeholder="Digite seu email" autocomplete="off">
            <button type="submit">Enviar</button>
        </form>
        <form action="update.php">
            <button type="submit" class="botao">Atualizar</button>
        </form>
        <form action="delete.php">
            <button type="submit" class="botao">Deletar</button>
        </form>
        <form action="list.php">
            <button type="submit" class="botao">Listar</button>
        </form>
    </section>
</body>

</html>