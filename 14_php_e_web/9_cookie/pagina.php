<?php

    if(isset($_COOKIE['nome'])) {

        $nome = $_COOKIE['nome'];

    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <h1>Página</h1>
    <?php if($nome != ""): ?>
        <p>Seja bem-vindo <?= $nome ?></p>
    <?php endif; ?>
</body>
</html>