<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
</head>
<body>
    <pre>
    <?php
    require_once "Livro.php";
    require_once "Pessoa.php";
    $pe = new Pessoa("Kauan", 18, "m");
    $li = new Livro("Harry Potter", "Cassia", 500, $pe);
    $li->voltarPag();
    $li->detalhes();
    ?>
    </pre>
</body>
</html>