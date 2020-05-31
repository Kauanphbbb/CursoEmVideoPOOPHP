<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 POO</title>
</head>

<body>
    <?php
    include_once("Cachorro.php");
    $c1 = new Cachorro;
    $c1->nome = "Doguinho";
    $c1->raca = "Dálmata";
    $c1->vivo = true;
    $c1->latir();
    echo "<br/>";
    $c2 = new Cachorro;
    $c2->nome = "Magrelinho";
    $c2->raca = "Vira-Lata";
    $c2->vivo = false;
    $c2->latir();
    ?>
</body>

</html>