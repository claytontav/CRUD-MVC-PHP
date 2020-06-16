<?php require 'Controller/controllerListar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Controller/controllerCadastro.php" method="post">
        <input type="text" name="name" id="name" placeholder="Informe seu nome">
        <input type="number" name="age" id="age" placeholder="Informe sua idade">
        <button type="submit">Cadastrar</button>
    </form>

    <section>
        <?php new controllerListar(); ?>
    </section>
</body>
</html>