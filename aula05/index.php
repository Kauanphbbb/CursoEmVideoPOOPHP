<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo da aula 05 POO</title>
</head>
<body>
    <pre>
        <?php
        include_once "Conta.php";
        $CJ = new Conta();
        $CC = new Conta();

        $CJ->openAcc("cc");
        $CC->openAcc("cp");
        $CJ->setOwner("Jubileu");
        $CC->setOwner("Creusa");

        print_r($CJ);
        print_r($CC);
        ?>
    </pre>
</body>
</html>