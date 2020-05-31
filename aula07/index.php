<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aula 07 POO com PHP</title>
</head>

<body>
    <pre>
        <?php
        require_once "Luta.php";
        require_once "Lutador.php";
        $lt = [];
        $lt[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $lt[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $lt[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $lt[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
        $lt[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $lt[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
        $UEC01 = new Luta();
        $UEC01->marcarLuta($lt[0], $lt[1]);
        $UEC01->lutar();
        $lt[0]->status();
        $lt[1]->status();
        ?>
    </pre>
</body>

</html>