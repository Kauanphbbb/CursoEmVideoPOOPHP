<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 POO</title>
</head>

<body>
    <pre>
        <?php
        include_once("Cachorro.php");
        $c1 = new Cachorro;
        $c1->nome = "Doguinho";
        //$c1->raca = "Dálmata";
        $c1->kill();
        $c1->life();
        print_r($c1);
        $c1->latir();
        ?>
        </pre>
</body>

</html>