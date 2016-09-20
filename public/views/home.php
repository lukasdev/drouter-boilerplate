<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Projeto DRouter</title>
    </head>

    <body>
        <h1>Seja bem vindo ao projeto</h1>

        <ul>
            <?php foreach ($users as $user) : ?>
            <li><?php echo $user['name']; ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>
