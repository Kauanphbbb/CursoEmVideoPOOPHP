<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 POO</title>
</head>

<body>
    <pre>
    <?php
    include_once ("Caneta.php");
    $c1 = new Caneta("BIC");
    $c1->setCor("Amarela");
    print_r($c1);
    ?>
    </pre>
</body>

</html>