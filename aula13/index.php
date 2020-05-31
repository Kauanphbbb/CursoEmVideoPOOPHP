<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 POO</title>
</head>

<body>
    <pre>
        <?php
        require_once "Mamifero.php";
        require_once "Lobo.php";
        require_once "Cachorro.php";

        $c1 = new Cachorro();

        $c1->reagirFrase("Olá");
        $c1->reagirFrase("Vai apanhar");

        $c1->reagirHora(14, 00);
        $c1->reagirHora(22, 00);

        $c1->reagirDono(false);
        $c1->reagirDono(true);

        $c1->reagirPeso(20, 10);
        $c1->reagirPeso(5, 3);
        ?>
    </pre>
</body>

</html>