<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem quem Gosto</title>
</head>
<body>
    <?php
    $mensagem = "[Nome], Viva bastante.";

    $mensagem = str_replace("[Nome]", "Pai", $mensagem);

    echo "<p>$mensagem</p>";
    ?>
</body>
</html>